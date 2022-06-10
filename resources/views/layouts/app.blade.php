<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fyyur</title>

        @livewireStyles
    </head>

    <body>
        <nav>
            <ul>
                <li>
                    <a href="/">🔥</a>
                </li>
                <li>
                    <a href="/venues">Venues</a>
                </li>
                <li>
                    <a href="/artists">Artists</a>
                </li>
                <li>
                    <a href="/shows">Shows</a>
                </li>
            </ul>
        </nav>
        {{ $slot }}

        @livewireScripts

    </body>
</html>