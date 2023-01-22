<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Intergaz</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="py-6 px-3 bg-black w-full">
        <ul class="flex flex-row text-white justify-evenly">
            <li>
                <a href="/clients">Klientu saraksts</a>
            </li>
            <li>
                |
            </li>
            <li>
                <a href="/deliveries">Klientu piegādes</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
