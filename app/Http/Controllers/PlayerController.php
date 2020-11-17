<?php

namespace App\Http\Controllers;

use App\ChatBoxMessage;
use App\Http\Controllers\Controller;
use App\OitbPlayer;
use App\Post;
use App\PrisonPlayer;
use App\Review;
use App\User;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlayerController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($name)
    {
        $player = OitbPlayer::all()->where('pseudo', '=', $name)->first();
        $player_prison = PrisonPlayer::all()->where('name', '=', $name)->first();
        if (isset($player)) {
            return view('player', compact('player', 'player_prison'));
        } else {
            return response(404);
        }
    }
}
