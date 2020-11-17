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

class IndexController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $oitbPlayers = OitbPlayer::orderBy('rank', 'desc')->get();
        return view('index', compact('oitbPlayers'));
    }

    public function prison()
    {
        $prisonPlayers = PrisonPlayer::orderBy('balance', 'desc')->get();
        return view('prison', compact('prisonPlayers'));
    }
}
