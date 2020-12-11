<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ダウンロード -Wi-Fiによる測位システム</title>
    <!-- csrf対策 -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('/dsBuffer.bmp.png') }}">
</head>
  <body>
    <div id="app"> 
        <downloadroute-component></route-component>
    </div>
    <script src=" {{ mix('js/app.js') }} "></script>
  </body>
</html>