@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <h3 class="mb-3">Register Kartu Perkiraan Persalinan (HPL)</h3>

    {{-- pesan sukses --}}
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('kartu-hpl.create') }}" class="btn btn-primary mb-3">
        + Tambah Data
    </a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm">
            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Suami</th>
                    <th>Pekerjaan</th>
                    <th>Alamat</th>
                    <th>Dx Keb</th>
                    <th>HPHT</th>
                    <th>HPL</th>
                    <th>Perdarahan</th>
                    <th>BB</th>
                    <th>TB</th>
                    <th>Tensi</th>
                    <th>HB</th>
                    <th>Status TT</th>
                    <th>Tablet Fe</th>
                    <th>Letak Janin</th>
                    <th>LILA</th>
                    <th>Jarak Anak</th>
                    <th>Tgl Partus</th>
                    <th>Penolong</th>
                    <th>JK</th>
                    <th>Cara Lahir</th>
                    <th>Bayi</th>
                    <th>Plasenta</th>
                    <th>KU Bayi</th>
                    <th>KU Ibu</th>
                    <th>BBL</th>
                    <th>LK / LD</th>
                </tr>
            </thead>

            <tbody>
                @forelse($data as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->nama }}</td>
                    <td class="text-center">{{ $item->umur }}</td>
                    <td>{{ $item->suami }}</td>
                    <td>{{ $item->pekerjaan }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->dx_keb }}</td>
                    <td class="text-center">{{ $item->hpht }}</td>
                    <td class="text-center">{{ $item->hpl }}</td>
                    <td class="text-center">{{ $item->perdarahan }}</td>
                    <td class="text-center">{{ $item->bb }}</td>
                    <td class="text-center">{{ $item->tb }}</td>
                    <td class="text-center">{{ $item->tensi }}</td>
                    <td class="text-center">{{ $item->hb }}</td>
                    <td class="text-center">{{ $item->status_tt }}</td>
                    <td class="text-center">{{ $item->tablet_fe }}</td>
                    <td class="text-center">{{ $item->letak_janin }}</td>
                    <td class="text-center">{{ $item->lila }}</td>
                    <td class="text-center">{{ $item->jarak_anak }}</td>
                    <td class="text-center">{{ $item->partus_tgl }}</td>
                    <td>{{ $item->penolong }}</td>
                    <td class="text-center">{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->cara_lahir }}</td>
                    <td>{{ $item->bayi }}</td>
                    <td>{{ $item->plasenta }}</td>
                    <td>{{ $item->ku_bayi }}</td>
                    <td>{{ $item->ku_ibu }}</td>
                    <td class="text-center">{{ $item->bbl }}</td>
                    <td class="text-center">{{ $item->lk_ld }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="29" class="text-center">
                        Data belum ada
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</div>
@endsection
