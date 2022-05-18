<?php

namespace App\Http\Controllers;

use App\Jobs\PuppeteerScraper;
use App\Models\Scrapper;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'url' => 'required',
            'selector' => 'required'
        ]);

        PuppeteerScraper::dispatch($validated);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scrapper  $scrapper
     * @return \Illuminate\Http\Response
     */
    public function show(Scrapper $scrapper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scrapper  $scrapper
     * @return \Illuminate\Http\Response
     */
    public function edit(Scrapper $scrapper)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scrapper  $scrapper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scrapper $scrapper)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scrapper  $scrapper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scrapper $scrapper)
    {
        //
    }
}
