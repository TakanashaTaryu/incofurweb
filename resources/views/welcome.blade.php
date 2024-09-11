<!DOCTYPE html>
<html lang="en">

<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta property="og:type" content="website">
    <meta property="og:title" content="INCOFUR - New Story">
    <meta property="og:description" content="Serunya Berpetualang di Dunia Virtual Bersama dengan Incofur!">
    <meta property="og:image" content="{{ asset('images/incofurbg.png') }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:title" content="INCOFUR">
    <meta property="twitter:description" content="Serunya Berpetualang di Dunia Virtual Bersama dengan Incofur!">
    <meta property="twitter:image" content="{{ asset('incofurbg.png') }}">
    <title>INCOFUR - New Story</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body>
    <img src="{{ asset('images/INCOFUR_Desktop.png') }}" class="full-screen-image" alt="Full Screen Image">
</body>

<script>// Mencegah klik kanan
document.addEventListener('contextmenu', event => event.preventDefault());

// Mencegah shortcut keyboard tertentu untuk inspect element
document.onkeydown = function (e) {
    // F12 key, Ctrl+Shift+I, Ctrl+Shift+J, Ctrl+U
    if (e.keyCode == 123 || (e.ctrlKey && e.shiftKey && 
       (e.keyCode == 'I'.charCodeAt(0) || e.keyCode == 'J'.charCodeAt(0))) || 
       (e.ctrlKey && e.keyCode == 'U'.charCodeAt(0))) {
        return false;
    }
}</script>

<style>* {
    margin: 0;
    padding: 0;
}

html,
body {
    height: 100%;
}

.container {
    width: 100vw;
    height: 100vh;
}

.full-screen-image {
    width: 100%;
    height: auto;
    display: block;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    pointer-events: none;
}
</style>

</html>
