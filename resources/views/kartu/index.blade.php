@extends('layouts.app')

@section('content')

<div class="container">

    {{-- HEADER --}}
    <div class="header-bar">
        <h3>Data Kartu HPL</h3>
    </div>

    {{-- NOTIFICATION --}}
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    {{-- SEARCH + TAMBAH --}}
    <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
        <form method="GET" action="{{ route('kartu-hpl.index') }}" style="display:flex; gap:8px; align-items:center;">
            <input
                type="text"
                name="search"
                value="{{ $search ?? '' }}"
                placeholder="Cari nama / suami / alamat..."
                style="padding:8px 12px; border:1px solid #ddd; border-radius:6px; width:280px;"
                autocomplete="off">
            <button type="submit" class="btn btn-edit" style="padding:8px 16px;">Cari</button>
            @if($search)
                <a href="{{ route('kartu-hpl.index') }}" class="btn btn-delete" style="padding:8px 16px;">Reset</a>
            @endif
        </form>

        <a href="{{ route('kartu-hpl.create') }}" class="btn btn-save" style="padding:8px 16px;">
            + Tambah Data
        </a>
    </div>

    {{-- TABEL --}}
    <div class="table-wrapper" style="overflow-x:auto;">
        @if($data->count() > 0)
        <table class="table-hpl">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Suami</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>DX Keb</th>
                    <th>HPHT</th>
                    <th>HPL</th>
                    <th>Perdarahan</th>
                    <th>BB</th>
                    <th>TB</th>
                    <th>Tensi</th>
                    <th>HB</th>
                    <th>Status TT</th>
                    <th>Tablet FE</th>
                    <th>Letak Janin</th>
                    <th>LILA</th>
                    <th>Jarak Anak</th>
                    <th>Partus Tgl</th>
                    <th>Penolong</th>
                    <th>JK</th>
                    <th>Cara Lahir</th>
                    <th>Bayi</th>
                    <th>Plasenta</th>
                    <th>KU Bayi</th>
                    <th>KU Ibu</th>
                    <th>BBL</th>
                    <th>LK/LD</th>
                    <th class="sticky-col">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ ($data->currentPage() - 1) * $data->perPage() + $loop->iteration }}</td>
                    <td><strong>{{ $item->nama }}</strong></td>
                    <td>{{ $item->umur ?? '-' }}</td>
                    <td>{{ $item->suami ?? '-' }}</td>
                    <td>{{ $item->pekerjaan ?? '-' }}</td>
                    <td style="max-width: 150px; word-wrap: break-word;">{{ $item->alamat ?? '-' }}</td>
                    <td>{{ $item->dx_keb ?? '-' }}</td>
                    <td>{{ $item->hpht ? \Carbon\Carbon::parse($item->hpht)->format('d/m/Y') : '-' }}</td>
                    <td>{{ $item->hpl ? \Carbon\Carbon::parse($item->hpl)->format('d/m/Y') : '-' }}</td>
                    <td>{{ $item->perdarahan ?? '-' }}</td>
                    <td>{{ $item->bb ?? '-' }}</td>
                    <td>{{ $item->tb ?? '-' }}</td>
                    <td>{{ $item->tensi ?? '-' }}</td>
                    <td>{{ $item->hb ?? '-' }}</td>
                    <td>{{ $item->status_tt ?? '-' }}</td>
                    <td>{{ $item->tablet_fe ?? '-' }}</td>
                    <td>{{ $item->letak_janin ?? '-' }}</td>
                    <td>{{ $item->lila ?? '-' }}</td>
                    <td>{{ $item->jarak_anak ?? '-' }}</td>
                    <td>{{ $item->partus_tgl ? \Carbon\Carbon::parse($item->partus_tgl)->format('d/m/Y') : '-' }}</td>
                    <td>{{ $item->penolong ?? '-' }}</td>
                    <td>
                        @if($item->jenis_kelamin == 'L')
                            L
                        @elseif($item->jenis_kelamin == 'P')
                            P
                        @else
                            -
                        @endif
                    </td>
                    <td>{{ $item->cara_lahir ?? '-' }}</td>
                    <td>{{ $item->bayi ?? '-' }}</td>
                    <td>{{ $item->plasenta ?? '-' }}</td>
                    <td>{{ $item->ku_bayi ?? '-' }}</td>
                    <td>{{ $item->ku_ibu ?? '-' }}</td>
                    <td>{{ $item->bbl ?? '-' }}</td>
                    <td>{{ $item->lk_ld ?? '-' }}</td>
                    <td class="aksi sticky-col">
                        <div style="display:flex; flex-direction: column; gap:5px; min-width: 80px;">
                            <a href="{{ route('kartu-hpl.edit', $item) }}" class="btn btn-edit" style="padding:5px 10px; width: 100%;">
                                Edit
                            </a>
                            
                            <form action="{{ route('kartu-hpl.destroy', $item) }}" method="POST"
                                  onsubmit="return confirm('Apakah Anda yakin menghapus data {{ $item->nama }}?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-delete" style="padding:5px 10px; width: 100%;">
                                    Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- PAGINATION --}}
        @if($data->hasPages())
        <div style="margin-top: 20px;">
            {{ $data->withQueryString()->links() }}
        </div>
        @endif

        @else
        <div class="alert alert-info" style="text-align:center; padding:20px; margin:20px 0;">
            <p style="margin:0;">Data tidak ditemukan</p>
            @if($search)
            <p style="margin:10px 0 0 0;">Hasil pencarian untuk: <strong>"{{ $search }}"</strong></p>
            <a href="{{ route('kartu-hpl.index') }}" style="display:inline-block; margin-top:10px;">Tampilkan semua data</a>
            @endif
        </div>
        @endif
    </div>

</div>

<style>
    /* Responsive Table */
    .table-wrapper {
        max-width: 100%;
        overflow-x: auto;
        border: 1px solid #dee2e6;
        border-radius: 8px;
        background: white;
    }
    
    .table-hpl {
        width: 100%;
        border-collapse: collapse;
        min-width: 1500px; /* Lebar minimum untuk semua kolom */
    }
    
    .table-hpl th {
        background-color: #2c3e50;
        color: white;
        border: 1px solid #dee2e6;
        padding: 12px 8px;
        text-align: center;
        font-weight: 600;
        font-size: 13px;
        white-space: nowrap;
        position: sticky;
        top: 0;
        z-index: 10;
    }
    
    .table-hpl td {
        border: 1px solid #dee2e6;
        padding: 10px 8px;
        text-align: center;
        vertical-align: middle;
        font-size: 13px;
        background-color: white;
    }
    
    .table-hpl tbody tr:nth-child(even) {
        background-color: #f8f9fa;
    }
    
    .table-hpl tbody tr:hover {
        background-color: #e9f7fe;
    }
    
    /* Sticky Action Column */
    .sticky-col {
        position: sticky;
        right: 0;
        background-color: white;
        z-index: 5;
        box-shadow: -2px 0 5px rgba(0,0,0,0.1);
    }
    
    /* Buttons */
    .btn {
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 12px;
        transition: all 0.3s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        font-weight: 500;
    }
    
    .btn-edit {
        background-color: #3498db;
        color: white;
    }
    
    .btn-edit:hover {
        background-color: #2980b9;
        transform: translateY(-1px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    .btn-save {
        background-color: #2ecc71;
        color: white;
    }
    
    .btn-save:hover {
        background-color: #27ae60;
        transform: translateY(-1px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    .btn-delete {
        background-color: #e74c3c;
        color: white;
    }
    
    .btn-delete:hover {
        background-color: #c0392b;
        transform: translateY(-1px);
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    /* Header Styling */
    .header-bar {
        background: linear-gradient(135deg, #3498db 0%, #2c3e50 100%);
        color: white;
        padding: 15px 20px;
        border-radius: 8px;
        margin-bottom: 20px;
        box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    }
    
    .header-bar h3 {
        margin: 0;
        font-size: 1.5rem;
        font-weight: 600;
    }
    
    /* Alert Styling */
    .alert {
        padding: 12px 15px;
        border-radius: 6px;
        margin-bottom: 20px;
        border-left: 4px solid;
    }
    
    .alert-success {
        background-color: #d4edda;
        border-color: #28a745;
        color: #155724;
    }
    
    .alert-info {
        background-color: #d1ecf1;
        border-color: #17a2b8;
        color: #0c5460;
    }
    
    /* Pagination Styling */
    .pagination {
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
        margin: 20px 0;
    }
    
    .pagination li {
        margin: 0 2px;
    }
    
    .pagination li a,
    .pagination li span {
        display: block;
        padding: 8px 12px;
        border: 1px solid #ddd;
        border-radius: 4px;
        text-decoration: none;
        color: #3498db;
        font-size: 14px;
    }
    
    .pagination li.active span {
        background-color: #3498db;
        color: white;
        border-color: #3498db;
    }
    
    .pagination li a:hover {
        background-color: #f8f9fa;
    }
    
    /* Column width adjustments */
    .table-hpl th:nth-child(1), /* No */
    .table-hpl td:nth-child(1) {
        width: 40px;
        min-width: 40px;
    }
    
    .table-hpl th:nth-child(2), /* Nama */
    .table-hpl td:nth-child(2) {
        min-width: 120px;
    }
    
    .table-hpl th:nth-child(6), /* Alamat */
    .table-hpl td:nth-child(6) {
        min-width: 150px;
        max-width: 150px;
    }
    
    .table-hpl th:nth-child(29), /* Aksi */
    .table-hpl td:nth-child(29) {
        min-width: 90px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 1200px) {
        .table-wrapper {
            font-size: 12px;
        }
        
        .table-hpl th,
        .table-hpl td {
            padding: 8px 5px;
        }
    }
</style>

@endsection