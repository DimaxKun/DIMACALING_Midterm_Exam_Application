<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $isekaiAnime = [
            ['title' => 'Re:Zero - Starting Life in Another World', 'episodes' => 50, 'main_character' => 'Subaru Natsuki', 'rating' => '8.5/10'],
            ['title' => 'That Time I Got Reincarnated as a Slime', 'episodes' => 48, 'main_character' => 'Rimuru Tempest', 'rating' => '8.1/10'],
            ['title' => 'Sword Art Online', 'episodes' => 96, 'main_character' => 'Kirito (Kazuto Kirigaya)', 'rating' => '7.7/10'],
            ['title' => 'No Game No Life', 'episodes' => 12, 'main_character' => 'Sora & Shiro', 'rating' => '8.2/10'],
            ['title' => 'Mushoku Tensei: Jobless Reincarnation', 'episodes' => 48, 'main_character' => 'Rudeus Greyrat', 'rating' => '8.7/10'],
        ];

        return view('products.index', compact('isekaiAnime'));
    }
}
