@extends('layout.layout')
@section('content')
    <main>
        <div class="content">
            <div class="display-player">
                <div class="display-skin">
                    <img src="https://minotar.net/bust/{{ $player->pseudo }}/200.png" alt="{{ $player->pseudo }}'s skin">
                </div>

                <div class="player-info">
                    <span class="player-Rang admin">Joueur</span>
                    <h3>{{ $player->pseudo }}</h3>
                    <div class="player-online-status online">
                        <span class="circle online"></span>
                        <span class="circle online" style="animation-delay: 2s"></span>
                        <span class="circle online" style="animation-delay: 4s"></span>
                        <p>Online</p>
                    </div>
                </div>
            </div>

            <table class="list-games">
                <tr>
                    <td>
                        <div class="game">
                            <h3 class="green">OITB</h3>
                            <div class="image">
                                <img src="{{ asset('') }}/img/knockit.jpg" alt="OITB">
                            </div>
                            <ul>
                                <li>
                                    <p><i class="fas fa-trophy"></i>Rang</p>
                                    <span>{{ $player->rank }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-bullseye"></i>Eliminations</p>
                                    <span>{{ $player->kills }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-award"></i>Coins</p>
                                    <span>{{ $player->coins }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-alt-circle-up"></i>Hits</p>
                                    <span>{{ $player->hits }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-skull-crossbones"></i>Morts</p>
                                    <span>{{ $player->deaths }}</span>
                                </li>
                            </ul>
                        </div>
                    </td>

                    <td>
                        <div class="game">
                            <h3 class="red">Prison</h3>
                            <div class="image">
                                <img src="{{ asset('') }}/img/knockit.jpg" alt="Prison">
                            </div>
                            <ul>
                                <li>
                                    <p><i class="fas fa-trophy"></i>Rang</p>
                                    <span>{{ str_replace('default', 'A', $player_prison->rank) }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-dollar-sign"></i>Argent</p>
                                    <span>{{ number_format($player_prison->balance, 0, '.', ' ') }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-star"></i>Prestige</p>
                                    <span>{{ $player_prison->prestige }}</span>
                                </li>
                            </ul>
                        </div>
                    </td>

                    <td>
                        <div class="game">
                            <h3 class="yellow">Skyblock</h3>
                            <div class="image">
                                <img src="{{ asset('') }}/img/bed.jpg" alt="Skyblock">
                            </div>
                            <ul>
                                <li>
                                    <p><i class="fas fa-trophy"></i>Rang</p>
                                    <span>{{ $player->balance }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-bullseye"></i>Eliminations</p>
                                    <span>{{ $player->kills }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-award"></i>Coins</p>
                                    <span>{{ $player->coins }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-alt-circle-up"></i>Hits</p>
                                    <span>{{ $player->hits }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-skull-crossbones"></i>Morts</p>
                                    <span>{{ $player->deaths }}</span>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="game">
                            <h3 class="blue">FarmRun</h3>
                            <div class="image">
                                <img src="{{ asset('') }}/img/gungame.jpg" alt="FarmRun">
                            </div>
                            <ul>
                                <li>
                                    <p><i class="fas fa-trophy"></i>Rang</p>
                                    <span>{{ $player->Rang }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-bullseye"></i>Eliminations</p>
                                    <span>{{ $player->kills }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-award"></i>Coins</p>
                                    <span>{{ $player->coins }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-alt-circle-up"></i>Hits</p>
                                    <span>{{ $player->hits }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-skull-crossbones"></i>Morts</p>
                                    <span>{{ $player->deaths }}</span>
                                </li>
                            </ul>
                        </div>
                    </td>

                    <td>
                        <div class="game">
                            <h3 class="purple">Faction</h3>
                            <div class="image">
                                <img src="{{ asset('') }}/img/bed.jpg" alt="Faction">
                            </div>
                            <ul>
                                <li>
                                    <p><i class="fas fa-trophy"></i>Rang</p>
                                    <span>{{ $player->Rang }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-bullseye"></i>Eliminations</p>
                                    <span>{{ $player->kills }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-award"></i>Coins</p>
                                    <span>{{ $player->coins }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-alt-circle-up"></i>Hits</p>
                                    <span>{{ $player->hits }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-skull-crossbones"></i>Morts</p>
                                    <span>{{ $player->deaths }}</span>
                                </li>
                            </ul>
                        </div>
                    </td>

                    <td>
                        <div class="game">
                            <h3 class="dark-purple">Général</h3>
                            <div class="image">
                                <img src="{{ asset('') }}/img/sky.jpg" alt="sky">
                            </div>
                            <ul>
                                <li>
                                    <p><i class="fas fa-trophy"></i>Rang</p>
                                    <span>{{ $player->Rang }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-bullseye"></i>Eliminations</p>
                                    <span>{{ $player->kills }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-award"></i>Coins</p>
                                    <span>{{ $player->coins }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-arrow-alt-circle-up"></i>Hits</p>
                                    <span>{{ $player->hits }}</span>
                                </li>
                                <li>
                                    <p><i class="fas fa-skull-crossbones"></i>Morts</p>
                                    <span>{{ $player->deaths }}</span>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </main>
@endsection
