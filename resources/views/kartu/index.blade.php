@extends('layouts.app')

@section('content')

<div class="container">

    {{-- HEADER --}}
    <div class="header-bar">
        <h3>Data Kartu HPL</h3>
    </div>

    {{-- SEARCH + TAMBAH --}}
    <div style="display:flex; justify-content:space-between; margin-bottom:15px;">
        <form method="GET" action="{{ route('kartu-hpl.index') }}" style="display:flex; gap:8px;">
            <input
                type="text"
                name="search"
                value="{{ $search ?? '' }}"
                placeholder="Cari nama / suami / alamat..."
                style="padding:6px 10px; border:1px solid #ccc; border-radius:6px; width:240px;">
            <button class="btn btn-edit">Cari</button>
        </form>

        <a href="{{ route('kartu-hpl.create') }}" class="btn btn-save">
            + Tambah Data
        </a>
    </div>

    {{-- TABEL --}}
    <div class="table-wrapper">
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
                    <th>LK / LD</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($data as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->umur }}</td>
                    <td>{{ $item->suami }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->dx_keb }}</td>
                    <td>{{ $item->hpht }}</td>
                    <td>{{ $item->hpl }}</td>
                    <td>{{ $item->bb }}</td>
                    <td>{{ $item->tb }}</td>
                    <td>{{ $item->tensi }}</td>
                    <td>{{ $item->hb }}</td>
                    <td>{{ $item->status_tt }}</td>
                    <td>{{ $item->tablet_fe }}</td>
                    <td>{{ $item->letak_janin }}</td>
                    <td>{{ $item->lila }}</td>
                    <td>{{ $item->jarak_anak }}</td>
                    <td>{{ $item->partus_tgl }}</td>
                    <td>{{ $item->penolong }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->cara_lahir }}</td>
                    <td>{{ $item->bayi }}</td>
                    <td>{{ $item->plasenta }}</td>
                    <td>{{ $item->ku_bayi }}</td>
                    <td>{{ $item->ku_ibu }}</td>
                    <td>{{ $item->bbl }}</td>
                    <td>{{ $item->lk_ld }}</td>
                    <td class="aksi">
                        <a href="{{ route('kartu-hpl.edit', $item->id) }}" class="btn btn-edit">Edit</a>
                        <form method="POST" action="{{ route('kartu-hpl.destroy', $item->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-delete"
                                onclick="return confirm('Hapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="29" style="text-align:center; padding:15px;">
                        Data tidak ditemukan
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>

@endsection
