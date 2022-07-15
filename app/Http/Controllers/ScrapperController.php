<?php

namespace App\Http\Controllers;

use App\Jobs\PuppeteerScraper;
use App\Models\Scrapper;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Nesk\Puphpeteer\Puppeteer;

class ScrapperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scraps = Scrapper::latest()->paginate(10);
        $scraps = $scraps->setCollection($scraps->getCollection()->each( fn ($scrap) => $scrap->html = (string) tidy(preg_replace('/\s+/', ' ', $scrap->html)) ));
        return Inertia::render('Home', ['title' => 'Homepage', 'scraps' => $scraps]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|url',
            'selector' => 'required'
        ]);

        PuppeteerScraper::dispatch($validated);

        return redirect()->back()->withSuccess('Your request has been submitted successfully');
    }
}
