

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- <link href="{{ asset('css/styles.css') }}" rel="stylesheet"> -->
</head>

</head>
<body>
    <header>
   
    @include('layouts.partials.navbar')
    </header>

    <main>
        <!-- Page content -->
        @yield('content')
    </main>

    <footer>
    @include('layouts.partials.footer')
    </footer>


</body>
</html>
