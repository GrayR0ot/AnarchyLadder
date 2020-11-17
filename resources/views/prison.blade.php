@extends('layout.layout')
@section('content')
    <main>
        <div class="content">
            <table class="list-stats">
                <tr>
                    <th></th>
                    <th></th>
                    <th style="text-align: left"><i class="fas fa-user"></i>Joueur</th>
                    <th><i class="fas fa-dollar-sign"></i>Argent</th>
                    <th><i class="fas fa-trophy"></i>Rang</th>
                    <th><i class="fas fa-star"></i>Prestige</th>
                </tr>
                @foreach($prisonPlayers as $player)
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
                        <td><img src="https://minotar.net/avatar/{{ $player->name }}/30.png"
                                 alt="{{ $player->name }}'s head">
                        </td>
                        <td style="text-align: left"><a
                                href="/player/{{ $player->name  }}/stats">{{ $player->name }}</a></td>
                        <td>{{ number_format($player->balance, 0, '.', ' ') }}</td>
                        <td>{{ str_replace('default', 'A', $player->rank) }}</td>
                        <td>{{ $player->prestige }}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </main>
@endsection
