@extends('layouts.app')

@section('content')
<div class="container">
<div class="form-card">
<h3>Tambah Kartu HPL</h3>

<form action="{{ route('kartu-hpl.store') }}" method="POST">
@csrf

<div class="form-grid">
@php
$fields = [
'nama'=>'Nama','umur'=>'Umur','suami'=>'Nama Suami','pekerjaan'=>'Pekerjaan',
'alamat'=>'Alamat','dx_keb'=>'DX Kebidanan','hpht'=>'HPHT','hpl'=>'HPL',
'perdarahan'=>'Perdarahan','bb'=>'BB','tb'=>'TB','tensi'=>'Tensi','hb'=>'HB',
'status_tt'=>'Status TT','tablet_fe'=>'Tablet FE','letak_janin'=>'Letak Janin',
'lila'=>'LILA','jarak_anak'=>'Jarak Anak','partus_tgl'=>'Tanggal Partus',
'penolong'=>'Penolong','jenis_kelamin'=>'Jenis Kelamin Bayi','cara_lahir'=>'Cara Lahir',
'bayi'=>'Bayi','plasenta'=>'Plasenta','ku_bayi'=>'KU Bayi','ku_ibu'=>'KU Ibu',
'bbl'=>'BBL','lk_ld'=>'LK / LD'
];
@endphp

@foreach($fields as $name => $label)
<div class="form-group">
<label>{{ $label }}</label>

@if($name == 'alamat')
<textarea name="{{ $name }}">{{ old($name) }}</textarea>
@else
<input type="{{ in_array($name,['hpht','hpl','partus_tgl']) ? 'date' : 'text' }}"
name="{{ $name }}" value="{{ old($name) }}">
@endif
</div>
@endforeach
</div>

<div class="form-actions">
<button class="btn btn-save">Simpan</button>
<a href="{{ route('kartu-hpl.index') }}" class="btn btn-back">Kembali</a>
</div>

</form>
</div>
</div>
@endsection
