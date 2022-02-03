<?php
$dir    = getcwd() . '/music';
$files1 = scandir($dir,1);
//var_dump($files1);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Tokyo-To Online</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <script src='js/main.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <audio autoplay src="music/iloveyoubump.mp3" id="stream"></audio>
    <center><img src="images/Backward.png" width="100" class="skipbut" onclick="">
    <img src="images/logo.png" width="540" height="564" class="rotate" onclick="test()" >
    <img src="images/Forward.png" height="100" class="skipbut" onclick=""></center>
    <h2>Tokyo-To Online</h2>
</body>
</html>
