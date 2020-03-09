<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Ecommerce Project</title>

    @include('frontend.partials.styles')
</head>
<body>

<div class="wrapper">
{{--    Navigation--}}
    @include('frontend.partials.nav')


        @yield('content')      {{--load content in different pages--}}

    @include('frontend.partials.footer')
</div>

@include('frontend.partials.scripts')

</body>
</html>
