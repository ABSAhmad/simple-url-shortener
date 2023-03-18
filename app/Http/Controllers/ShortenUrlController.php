<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ShortenUrlController extends Controller
{
    public function __invoke(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|url',
        ]);

        $shortUrl = new ShortUrl([
            'url_key' => Str::random(4),
            'target_url' => $validated['url'],
        ]);

        $shortUrl->saveOrFail();

        return redirect()
            ->to('/')
            ->with('shortened_url', route('short_url.redirect', ['key' => $shortUrl->url_key]))
        ;
    }
}
