<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>AimsEnrich</title>

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css"> -->
</head>
<body>
    @include('layouts.header')
    
    <div class="body-box">
        @yield('body')
    </div>
    
    @include('layouts.footer')
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
