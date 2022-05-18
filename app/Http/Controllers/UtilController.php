<?php

namespace App\Http\Controllers;

use App\Jobs\PuppeteerScraper;
use App\Models\Scrapper;
use Illuminate\Http\Request;

class UtilController extends Controller
{
    public function home()
    {
        $scraps = Scrapper::paginate(10);
        return view('home', compact('scraps'));
    }

    public function scrap_queue(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required',
            'selector' => 'required'
        ]);

        $scrapper = PuppeteerScraper::dispatchSync($validated);

        return response()->json(['queue' => $scrapper]);
    }
}
