<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        {{-- JS --}}
        <script defer src="{{ asset('js/front.js')}}"></script>

        {{-- Style --}}
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css">

    </head>
    <body>
        
            <div class="content">

                <div id="root"></div>
            </div>
        </div>
    </body>
</html>
