@extends('layouts.app')

@section('content')
<div class="container py-6">

    <h2 class="text-xl font-semibold text-gray-800 mb-6">
        Dashboard
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <!-- CARD KARTU HPL -->
        <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">
                📋 Data Kartu HPL
            </h3>

            <p class="text-gray-600 mt-2 leading-relaxed">
                Menu ini digunakan untuk mengelola data kartu HPL pasien,
                mulai dari penambahan, pengeditan, hingga pencarian data
                kehamilan.
            </p>

            <div class="mt-4">
                <a href="/kartu-hpl" class="btn-primary">
                    Lihat Data Kartu HPL
                </a>
            </div>
        </div>

        <!-- CARD USER -->
        <div class="bg-white shadow rounded-lg p-6 border border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">
                👤 Informasi Pengguna
            </h3>

            <p class="text-gray-600 mt-2">
                Anda saat ini login sebagai:
            </p>

            <div class="mt-3 p-3 bg-gray-100 rounded">
                <p class="font-medium text-gray-800">
                    {{ Auth::user()->name }}
                </p>
                <p class="text-sm text-gray-600">
                    {{ Auth::user()->email }}
                </p>
            </div>
        </div>

    </div>
</div>
@endsection
