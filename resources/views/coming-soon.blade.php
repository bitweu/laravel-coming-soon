<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Coming soon ...</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="/vendor/coming-soon/theme.css" />

        {{ commingsoon_background() }}
    </head>
    <body>
        <div class="container h-100 d-flex justify-content-center align-items-center flex-column">
            <h1 class="coming-soon-title text-center mb-lg-5 mb-4">
                {{ comingsoon_title() }}
            </h1>
            <h3 class="coming-soon-intro text-center">
                {{ comingsoon_intro() }}
            </h3>
        </div>
    </body>
</html>
