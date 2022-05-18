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
        $data = $this->data;
        // dd($data->get('url'));
        $url = $data->get('url');
        $elem = $data->get('selector');

        $puppeteer = new Puppeteer;

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
                    'created_at' => Carbon::now()
                ]);
            });

            $browser->close();

            if($collection->count() > 0) {
                Scrapper::insert($collection->toArray());
                // Trigger Socket, notify success
            } else {
                // Trigger Socket, notify error
            }


        } catch (Node\Exception $exception) {
            // Trigger Socket, notify error
        }
    }
}
