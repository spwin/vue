<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Emegency WEB Developer</title>

        <script> window.Laravel =  <?php echo json_encode(['csrfToken' => csrf_token()]); ?></script>
        <link href="{{ url()->asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="@yield('app-page', 'layout')">
            @yield('content')
        </div>
        <script type="text/javascript" src="{{ url()->to('/').'/js/app.js' }}"></script>
    </body>
</html>
