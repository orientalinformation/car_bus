<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Car shop - @yield('title')</title>
        <!-- Fonts -->
        <link rel="icon" href="/images/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
        <link href="/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="/css/coin-slider.css" rel="stylesheet" type="text/css"/>
        <!-- Javascripts -->
        <script type="text/javascript" src="/js/cufon-yui.js"></script>
        <script type="text/javascript" src="/js/cufon-times.js"></script>
        <script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
        <script type="text/javascript" src="/js/script.js"></script>
        <script type="text/javascript" src="/js/coin-slider.min.js"></script>
        <script type="text/javascript" src="/js/java.js"></script>
        <script type="text/javascript" src="/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
        tinymce.init({
            selector: "textarea",
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
        </script>
    </head>
    <body>
        <div class="main">
            @include('includes.header')
            <section class="content">
              @yield('content')
            </section>
            @include('includes.footer')
        </div>
    </body>
</html>