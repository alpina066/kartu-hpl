<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .card-dashboard {
                background: #ffffff;
                padding: 20px;
                border-radius: 10px;
                max-width: 350px;
                box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            }

            .btn-view {
                display: inline-block;
                margin-top: 10px;
                background: #0d6efd;
                color: white;
                padding: 8px 16px;
                border-radius: 6px;
                text-decoration: none;
                font-size: 14px;
            }
            
            .container {
                padding: 20px;
            }

            .header-bar {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 15px;
            }

            .btn-add {
                background: #198754;
                color: white;
                padding: 8px 14px;
                border-radius: 5px;
                text-decoration: none;
                font-size: 14px;
            }

            .table-wrapper {
                width: 100%;
                overflow-x: auto;
            }

            .table-hpl {
                border-collapse: collapse;
                min-width: 2200px;
                font-size: 13px;
            }

            .table-hpl th,
            .table-hpl td {
                border: 1px solid #444;
                padding: 6px 8px;
                white-space: nowrap;
            }

            .table-hpl thead th {
                background: #e9ecef;
                text-align: center;
            }

            .table-hpl tbody tr:nth-child(even) {
                background: #f9f9f9;
            }

            /* TOMBOL */
            .btn {
                padding: 6px 12px;
                border-radius: 6px;
                font-size: 13px;
                text-decoration: none;
                border: none;
                cursor: pointer;
            }

            .btn-edit { background: #0d6efd; color: white; }
            .btn-delete { background: #dc3545; color: white; }
            .btn-save { background: #198754; color: white; }
            .btn-back { background: #6c757d; color: white; }

            /* AKSI DI TABEL */
            .aksi {
                display: flex;
                gap: 6px;
            }

            /* FORM EDIT */
            .form-card {
                background: #fff;
                padding: 20px;
                border-radius: 10px;
                max-width: 1000px;
            }

            .form-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .form-group {
                display: flex;
                flex-direction: column;
            }

            .form-group label {
                font-weight: 600;
                margin-bottom: 4px;
            }

            .form-group input,
            .form-group textarea {
                padding: 6px;
                border-radius: 6px;
                border: 1px solid #ccc;
            }

            /* TOMBOL BAWAH */
            .form-actions {
                margin-top: 20px;
                display: flex;
                gap: 10px;
            }

            .btn-primary {
                background-color: #0d6efd;
                color: #ffffff !important;
                padding: 10px 18px;
                border-radius: 6px;
                text-decoration: none;
                font-weight: 600;
                display: inline-block;
            }
            .btn-primary:hover {
                background-color: #0b5ed7;
            }

        </style>

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </body>
</html>
