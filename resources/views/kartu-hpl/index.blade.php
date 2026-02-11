@extends('layouts.app')

@section('content')
<div class="container">
<h3>Data Kartu HPL</h3>

<a href="/kartu-hpl/create" class="btn btn-primary mb-3">+ Tambah</a>

<table class="table table-bordered table-sm">
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
<th>Tgl Partus</th>
<th>Penolong</th>
<th>JK Bayi</th>
<th>Cara Lahir</th>
<th>Bayi</th>
<th>Plasenta</th>
<th>KU Bayi</th>
<th>KU Ibu</th>
<th>BBL</th>
<th>LK/LD</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach($data as $item)
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
<td>{{ $item->perdarahan }}</td>
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
<td>
<a href="/kartu-hpl/edit?created_at={{ $item->created_at }}" class="btn btn-sm btn-warning">Edit</a>

<form action="/kartu-hpl/delete?created_at={{ $item->created_at }}" method="POST" style="display:inline">
@csrf
@method('DELETE')
<button onclick="return confirm('Hapus data ini?')" class="btn btn-sm btn-danger">Hapus</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
</div>
@endsection
