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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body class="bg-gray-900">
<header>
    <nav class="py-6 px-3 bg-black w-full">
        <ul class="flex flex-row text-white justify-evenly uppercase">
            <li>
                <a href="/clients">Klientu saraksts</a>
            </li>
            <li>
                |
            </li>
            <li>
                <a href="/deliveries/types">Pasūtījumu tipi</a>
            </li>
            <li>
                |
            </li>
            <li>
                <a href="/deliveries/last">Pēdējā piegāde</a>
            </li>
            <li>
                |
            </li>
            <li>
                <a href="/clients/inactive">Neaktīvie klienti</a>
            </li>
        </ul>
    </nav>
</header>
<main>
    @yield('content')
</main>
</body>
</html>
