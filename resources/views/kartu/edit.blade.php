@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Kartu HPL</h3>

    <form action="{{ route('kartu-hpl.update', $data->id) }}" method="POST" class="form-card">
        @csrf
        @method('PUT')

        <div class="form-grid">

            @php
                $fields = [
                    'nama' => 'Nama',
                    'umur' => 'Umur',
                    'suami' => 'Suami',
                    'pekerjaan' => 'Pekerjaan',
                    'alamat' => 'Alamat',
                    'dx_keb' => 'Dx Keb',
                    'hpht' => 'HPHT',
                    'hpl' => 'HPL',
                    'perdarahan' => 'Perdarahan',
                    'bb' => 'BB',
                    'tb' => 'TB',
                    'tensi' => 'Tensi',
                    'hb' => 'HB',
                    'status_tt' => 'Status TT',
                    'tablet_fe' => 'Tablet FE',
                    'letak_janin' => 'Letak Janin',
                    'lila' => 'LILA',
                    'jarak_anak' => 'Jarak Anak',
                    'partus_tgl' => 'Tanggal Partus',
                    'penolong' => 'Penolong',
                    'jenis_kelamin' => 'Jenis Kelamin',
                    'cara_lahir' => 'Cara Lahir',
                    'bayi' => 'Bayi',
                    'plasenta' => 'Plasenta',
                    'ku_bayi' => 'KU Bayi',
                    'ku_ibu' => 'KU Ibu',
                    'bbl' => 'BBL',
                    'lk_ld' => 'LK / LD',
                ];
            @endphp

            @foreach ($fields as $name => $label)
                <div class="form-group">
                    <label>{{ $label }}</label>

                    @if(in_array($name, ['alamat']))
                        <textarea name="{{ $name }}">{{ $data->$name }}</textarea>
                    @else
                        <input
                            type="{{ in_array($name, ['hpht','hpl','partus_tgl']) ? 'date' : 'text' }}"
                            name="{{ $name }}"
                            value="{{ $data->$name }}"
                        >
                    @endif
                </div>
            @endforeach

        </div>

        <div class="form-actions">
            <button type="submit" class="btn btn-save">Update</button>
            <a href="{{ route('kartu-hpl.index') }}" class="btn btn-back">Kembali</a>
        </div>
    </form>
</div>
@endsection
