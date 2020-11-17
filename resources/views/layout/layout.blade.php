<!DOCTYPE html>
<html lang="fr-FR">
<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AnarchyNetwork</title>
    <!-- Links -->
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}/css/style.css">
    <link href="{{ asset('') }}/fontawesome/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>

<header id="header">
    <div class="nav-bar">
        <div class="nav-bar-content">
            <p class="nav-bar-content-left"><i class="fas fa-dice"></i>
                Jouez maintenant avec <span class="player-count" id="players"></span> autres joueurs <span
                    class="server-ip">play.anarchynetwork<b style="color: #c2c2c2">.eu</b></span>
            </p>
            <a href="/" class="nav-bar-content-right">AnarchyNetwork</a>
            <a href="https://twitter.com/GrayR0ot" class="nav-bar-content-right"><i class="fab fa-twitter"></i></a>
            <a href="https://discord.gg/PZAS3ft" class="nav-bar-content-right"><i class="fab fa-discord"></i></a>
        </div>
    </div>

    <!-- Navigation Banner -->
    <div class="nav-banner">
        <div class="nav-banner-content">
            <div class="nav-banner-content-left">
                <a href="https://discord.gg/PZAS3ft" class="card-icon discord"><i class="fab fa-discord" style="font-weight: normal"></i>Discord</a>
            </div>
            <div class="nav-banner-content-center">
                <img src="{{ asset('') }}/img/logo.png" class="logo-animation" alt="Logo">
            </div>
            <div class="nav-banner-content-right">
                <a href="#" class="card-icon store"><i class="fas fa-shopping-bag"></i>Discord</a>
            </div>
        </div>
    </div>
    <!-- Navigation -->
    <div class="nav">
        <div class="nav-content">
            <ul>
                <li><a href="/">OITB</a></li>
                <li><a href="/prison">Prison</a></li>
                <li><a href="#">FarmRun</a></li>
                <li><a href="#">FarmRun</a></li>
            </ul>
        </div>
    </div>
</header>
@yield('content')
<div class="footer">
    <p>Copyright &copy; 2020 - AnarchyNetwork</p>
    <a href="#" target="_blank">Mentions légales et politique de confidentialité</a>
</div>
<script src="{{ asset('') }}/js/playercount.js"></script>
</body>
</html>
