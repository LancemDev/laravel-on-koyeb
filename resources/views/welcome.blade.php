<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <h1 class="text-3xl font-bold underline">
    Hello Lizzy!
    Our Laravel application will be hosted here :)))

    <p class="text-xl font-bold border">
        Our db is also hosted on the cloud but on a different platform
        The links below should take care of authentication. 
        This page will be the homepage but we can work on that later
    <p class="text-xl font-bold border">
        I'm so excited about this!!
    </p>
    <a href={{ route('login') }} class="text-xl font-bold border">
        login
    </a>
    <a href={{ route('register') }} class="text-xl font-bold border">
        register
  </h1>
</body>
</html>