<?php

namespace App\Jobs;

use App\Models\Scrapper;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use Nesk\Puphpeteer\Puppeteer;
use Nesk\Rialto\Exceptions\Node;

class PuppeteerScraper implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private Collection $data;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = collect($data);
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // Trigger Socket, notify error
        $response = collect(['error' => 1, 'message' => 'Sorry, we could not get your selector, please try again with another']);

        $data = $this->data;
        // dd($data->get('url'));
        $url = $data->get('url');
        $elem = $data->get('selector');

        $puppeteer = new Puppeteer([
            'executable_path' => env('NODE_PATH', 'node')
        ]);

        $browser = $puppeteer->launch();

        $page = $browser->newPage();

        try {
            $page->tryCatch->goto($data->get('url'));

            $selectors = $page->querySelectorAll($data->get('selector'));
            $collection = collect();

            collect($selectors)->each( function($selector) use ($data, $collection) {
                $collection->add([
                    'url' => $data->get('url'),
                    'selector' => $data->get('selector'),
                    'html' => preg_replace('/\s+/', ' ', $selector->getProperty('outerHTML')->jsonValue()),
                    // 'html' => tidy($selector->getProperty('outerHTML')->jsonValue()),
                    'created_at' => Carbon::now()
                ]);
            });

            $browser->close();

            if($collection->count() > 0) {
                Scrapper::insert($collection->toArray());

                $scraps = Scrapper::latest()->paginate(10);
                $scraps = $scraps->setCollection($scraps->getCollection()->each( fn ($scrap) => $scrap->html = (string) tidy(preg_replace('/\s+/', ' ', $scrap->html)) ));

                $response = $response->merge(['error' => 0, 'message' => 'We have gotten your requested data, please check below for the update', 'data' => $scraps]);
                // Trigger Socket, notify success
            }

        } catch (Node\Exception $exception) {
            // Trigger Socket, notify error
            $response = $response->merge(['error' => 101, 'message' => 'The was an error trying to get your data, please try again later']);
        }

        event(new \App\Events\Scrapper($response));
    }
}
