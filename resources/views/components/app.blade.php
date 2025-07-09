<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="{{ asset('wisuda.png') }}">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('style/style.css') }}">

    <title>Rex Education | @yield('title')</title>
</head>

<body>
    <!-- SIDEBAR -->
    @include('components.sidebar')
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        @include('components.navbar')
        <!-- NAVBAR -->

        <!-- MAIN -->


        <main>
            @yield('content')
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="{{ asset('style/script.js') }}"></script>
    {{-- Script Chart.js --}}

    @stack('scripts')

</body>

</html>
