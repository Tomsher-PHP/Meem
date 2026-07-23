<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $title = 'MEEM Real Estate Investment';
        $meta_description = 'MEEM Real Estate Investment - Building sustainable real estate value in the UAE.';
        return view('index', compact('title', 'meta_description'));
    }

    public function about()
    {
        $title = 'About Us | MEEM Real Estate Investment';
        $meta_description = 'Learn about MEEM Real Estate Investment and our approach to sustainable real estate value in the UAE.';
        return view('about', compact('title', 'meta_description'));
    }

    public function platform()
    {
        $title = 'Platform | MEEM Real Estate Investment';
        $meta_description = "Explore MEEM's integrated investment, asset, and property management platform.";
        return view('platform', compact('title', 'meta_description'));
    }

    public function strategy()
    {
        $title = 'Strategy | MEEM Real Estate Investment';
        $meta_description = "Explore MEEM's disciplined, forward-looking real estate investment strategy.";
        return view('strategy', compact('title', 'meta_description'));
    }

    public function whyMeem()
    {
        $title = 'Why MEEM? | MEEM Real Estate Investment';
        $meta_description = "Discover why MEEM is positioned to deliver sustainable real estate value across the UAE.";
        return view('why-meem', compact('title', 'meta_description'));
    }

    public function contact()
    {
        $title = 'Contact Us | MEEM Real Estate Investment';
        $meta_description = "Contact MEEM Real Estate Investment LLC in Sharjah, UAE.";
        return view('contact', compact('title', 'meta_description'));
    }

    public function sitemap()
    {
        $urls = [
            ['loc' => route('home'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '1.0'],
            ['loc' => route('about'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => route('platform'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => route('strategy'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => route('why-meem'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.8'],
            ['loc' => route('contact'), 'lastmod' => now()->startOfMonth()->toAtomString(), 'changefreq' => 'monthly', 'priority' => '0.7'],
        ];

        return response()->view('sitemap', compact('urls'))
            ->header('Content-Type', 'text/xml');
    }

    public function robots()
    {
        $robotsContent = "User-agent: *\nDisallow:\n\nSitemap: " . config('app.url') . "/sitemap.xml\n";
        return response($robotsContent)->header('Content-Type', 'text/plain');
    }
}
