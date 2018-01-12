<?php
    $date = date("H");
    $time = date("H:i");
    if ($date >= "06" && $date < "12") {
        $status = "morning";
        $greeting = "Goedemorgen";
    } elseif ($date >= "12" && $date < "18") {
        $status = "afternoon";
        $greeting = "Goedemiddag";
    } elseif ($date >= "18" && $date < "00") {
        $status = "evening";
        $greeting = "Goedeavond";
    } elseif ($date >= "00" && $date < "06") {
        $status = "night";
        $greeting = "Goedenacht";
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
</style>
<body style="background: url('backgrounds/<?php echo $status; ?>.png');">
    <div>
        <p><?php echo $greeting; ?>, Gino</p>
        <p>Het is nu <?php echo $time; ?></p>
    </div>
</body>
</html>