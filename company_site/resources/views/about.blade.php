<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" />
</head>

<body>
    @include("parts.common",["title" => "会社概要"])
    @include("parts.header")
    <main>
        <h1>会社概要ページ</h1>
        <p>現在の時間は {{ $current_time }} です<p>
    </main>
    @include("parts.footer")
</body>

</html>