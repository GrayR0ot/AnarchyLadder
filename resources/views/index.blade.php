@extends('layout.layout')
@section('content')
    <main>
        <div class="content">
            <table class="list-stats">
                <tr>
                    <th></th>
                    <th></th>
                    <th style="text-align: left"><i class="fas fa-user"></i>Joueur</th>
                    <th><i class="fas fa-trophy"></i>Rang</th>
                    <th><i class="fas fa-bullseye"></i>Eliminations</th>
                    <th><i class="fas fa-star"></i>Coins</th>
                    <th><i class="fas fa-arrow-alt-circle-up"></i>Hits</th>
                    <th><i class="fas fa-skull-crossbones"></i>Morts</th>
                </tr>
                @foreach($oitbPlayers as $player)
                    @if($loop->index == 100)
                        @break
                    @endif
                    <tr>
                        @if($loop->index == 0)
                            <td><i class="fas fa-trophy gold"></i></td>
                        @elseif($loop->index == 1)
                            <td><i class="fas fa-trophy silver"></i></td>
                        @elseif($loop->index == 2)
                            <td><i class="fas fa-trophy bronze"></i></td>
                        @else
                            <td>{{ $loop->index+1 }}</td>
                        @endif
                        <td><img src="https://minotar.net/avatar/{{ $player->pseudo }}/30.png"
                                 alt="{{ $player->pseudo }}'s head">
                        </td>
                        <td style="text-align: left"><a
                                href="/player/{{ $player->pseudo  }}/stats">{{ $player->pseudo }}</a></td>
                        <td>{{ $player->rank }}</td>
                        <td>{{ $player->kills }}</td>
                        <td>{{ $player->coins }}</td>
                        <td>{{ $player->hits }}</td>
                        <td>{{ $player->deaths }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
@endsection
