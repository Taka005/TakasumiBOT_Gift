<?php
$res = json_decode(file_get_contents("https://api.takasumibot.com/v1/gift?id=".htmlspecialchars($_GET["id"])),true);

$data = $res["data"];

if(!$data) return require_once __DIR__."/invalid.php";
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TakasumiBOT Gift</title>

        <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="/assets/img/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="180x180" href="/assets/img/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192" href="/assets/img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="1024x1024" href="/assets/img/takasumibot.png">

        <head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/ fb# prefix属性: https://ogp.me/ns/ prefix属性#">
        <meta property="og:type" content="website" />
        <meta property="og:title" content="ギフトが送られてきました" />
        <meta property="og:description" content="コマンドで入力してゲットしよう" />
        <meta property="og:site_name" content="TakasumiBOT Gift" />
        <meta property="og:image" content="/assets/img/takasumibot.png" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="/assets/css/main.css">
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand text-darl mb-0 h1" href="/">TakasumiBOT Gift</a>
                </div>
            </nav>
        </header>
	    <main>
            <div class="info card text-center">
                <div class="card-body">
                    <h1 class="card-title">ギフトが送られてきました</h1>
                    <h3 class="card-text"><?= $data["type"] ?>コイン</h3>
                    <p class="card-text">Discordからコマンドを実行してゲットしよう!</p>
                </div>
            </div>
	    </main>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    </body>
</html>