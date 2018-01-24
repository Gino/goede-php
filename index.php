<?php
    // date_default_timezone_set('Australia/Eucla'); // Middag
    // date_default_timezone_set('America/Aruba'); // Nacht/avond
    date_default_timezone_set('Europe/Amsterdam'); // Ochtend

    $date = date('H');
    $time = date('H:i');
    if ($date >= '06' && $date < '12') {
        $status = 'morning';
        $greeting = 'Goedemorgen';
        $picture = 'zonnetje.png';
    } elseif ($date >= '12' && $date < '18') {
        $status = 'afternoon';
        $greeting = 'Goedemiddag';
        $picture = 'vliegtuig.png';
    } elseif ($date >= '18' && $date < '00') {
        $status = 'evening';
        $greeting = 'Goedeavond';
        $picture = 'ufo.png';
    } elseif ($date >= '00' && $date < '06') {
        $status = 'night';
        $greeting = 'Goedenacht';
        $picture = 'ufo.png';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>goede-php</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css?family=Lobster');

    body {
        overflow-x: hidden;

    }

    div {
        font-family: 'Lobster', cursive;
        color: white;
        text-shadow: 2px 2px rgba(0, 0, 0, 0.3);
        font-size: 50px;
        text-align: center;
        margin-top: 250px;
    }

    p {
        margin: 0;
    }

    img {
        position: absolute;
        animation-name: flying;
        animation-duration: 10s;
        animation-iteration-count: infinite;
    }

    @keyframes flying {
        0%   {left: -20%;top: 0%}
        100%   {left: 100%;top: 10%}
        150%   {left: 150%;top: 10%}
    }
</style>
<body style="background: url('backgrounds/<?php echo $status; ?>.png');">
    <img src="img/<?php echo $picture; ?>" alt="Flying picture">
    <div>
        <p><?php echo $greeting; ?>, Gino</p>
        <p>Het is nu <?php echo $time; ?></p>
    </div>
</body>
</html>