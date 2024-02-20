<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Url;
use Illuminate\Support\Str;

class UrlController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('urlform');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'url' => 'required|url',
        ]);

        $originalUrl = $request->input('url');
        // Check the value using dd() or var_dump()
        // dd($originalUrl); // or var_dump($originalUrl);
        $shortenedUrl = Str::random(6); 
        // Generate a short random string (you can use a more advanced logic)
        // dd($shortenedUrl);

        Url::create([
            'original_url' => $originalUrl,
            'shortened_url' => $shortenedUrl,
        ]);

        return redirect()->back()->with('shortened_url', url($shortenedUrl));

    }

    public function redirect($shortenedUrl)
    {
        $url = Url::where('shortened_url', $shortenedUrl)->firstOrFail();
        return redirect($url->original_url);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
