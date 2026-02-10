<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Sistem Kartu HPL') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body style="
    background:#f5f6f8;
    min-height:100vh;
    display:flex;
    align-items:center;
    justify-content:center;
    font-family: 'Instrument Sans', sans-serif;
">

    {{-- CARD --}}
    <div style="
        width: 320px;
        background:white;
        padding:30px 25px;
        border-radius:12px;
        box-shadow:0 4px 10px rgba(0,0,0,0.08);
        text-align:center;
    ">

        {{-- LOGO --}}
        <img src="{{ asset('images/logo.png') }}"
            alt="Logo"
            style="
                height:70px;
                display:block;
                margin:0 auto 15px auto;">

        {{-- JUDUL --}}
        <h1 style="font-size:18px; font-weight:600; margin-bottom:6px;">
            Sistem Kartu HPL
        </h1>

        {{-- DESKRIPSI --}}
        <p style="font-size:13px; color:#666; margin-bottom:22px;">
            Sistem pencatatan data ibu hamil<br>
            berbasis web
        </p>

        {{-- BUTTON --}}
        <div style="display:flex; flex-direction:column; gap:10px;">
            @if (Route::has('login'))
                <a href="{{ route('login') }}"
                   style="
                    background:#0d6efd;
                    color:white;
                    padding:10px;
                    border-radius:6px;
                    text-decoration:none;
                    font-size:14px;
                   ">
                    Login
                </a>
            @endif

            @if (Route::has('register'))
                <a href="{{ route('register') }}"
                   style="
                    background:#6c757d;
                    color:white;
                    padding:10px;
                    border-radius:6px;
                    text-decoration:none;
                    font-size:14px;
                   ">
                    Register
                </a>
            @endif
        </div>

    </div>

</body>
</html>
