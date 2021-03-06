<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="London based WEB Developer with 6 years of practice. Expertise: Laravel, Symfony, WordPress, Urgent Website Fixes, Website Maintenance, Payment Integrations, Onsite SEO.">
        <title>Emegency WEB Developer</title>
        <script> window.Laravel =  <?php echo json_encode(['csrfToken' => csrf_token()]); ?></script>
        <link href="{{ url()->asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="@yield('app-page', 'layout')">
            @yield('content')
        </div>
        <script type="text/javascript" src="{{ url()->to('/').'/js/app.js' }}"></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-91930716-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
</html>
