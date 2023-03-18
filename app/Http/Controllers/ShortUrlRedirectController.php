<?php

namespace App\Http\Controllers;

use App\Models\ShortUrl;

class ShortUrlRedirectController extends Controller
{
    public function __invoke(string $key)
    {
        $shortUrl = ShortUrl::whereUrlKey($key)->firstOrFail();

        return redirect()->away($shortUrl->target_url);
    }
}
