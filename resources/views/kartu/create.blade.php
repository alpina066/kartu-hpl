@extends('layouts.app')

@section('content')
<div class="container">
    <div class="form-card">

        <h2 style="font-size:18px; font-weight:600; margin-bottom:15px;">
            Tambah Data Kartu HPL
        </h2>

        <form action="{{ route('kartu-hpl.store') }}" method="POST">
            @csrf

            <div class="form-grid">

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ old('nama') }}">
                    @error('nama') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group">
                    <label>Umur</label>
                    <input type="number" name="umur" value="{{ old('umur') }}">
                    @error('umur') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group">
                    <label>Nama Suami</label>
                    <input type="text" name="suami" value="{{ old('suami') }}">
                </div>

                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" value="{{ old('pekerjaan') }}">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="alamat">{{ old('alamat') }}</textarea>
                </div>

                <div class="form-group">
                    <label>DX Kebidanan</label>
                    <input type="text" name="dx_keb" value="{{ old('dx_keb') }}">
                </div>

                <div class="form-group">
                    <label>HPHT</label>
                    <input type="date" name="hpht" value="{{ old('hpht') }}">
                    @error('hpht') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group">
                    <label>HPL</label>
                    <input type="date" name="hpl" value="{{ old('hpl') }}">
                    @error('hpl') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="form-group">
                    <label>Perdarahan</label>
                    <input type="text" name="perdarahan" value="{{ old('perdarahan') }}">
                </div>

                <div class="form-group">
                    <label>Berat Badan (BB)</label>
                    <input type="number" step="0.1" name="bb" value="{{ old('bb') }}">
                </div>

                <div class="form-group">
                    <label>Tinggi Badan (TB)</label>
                    <input type="number" step="0.1" name="tb" value="{{ old('tb') }}">
                </div>

                <div class="form-group">
                    <label>Tensi</label>
                    <input type="text" name="tensi" value="{{ old('tensi') }}">
                </div>

                <div class="form-group">
                    <label>HB</label>
                    <input type="text" name="hb" value="{{ old('hb') }}">
                </div>

                <div class="form-group">
                    <label>Status TT</label>
                    <input type="text" name="status_tt" value="{{ old('status_tt') }}">
                </div>

                <div class="form-group">
                    <label>Tablet FE</label>
                    <input type="text" name="tablet_fe" value="{{ old('tablet_fe') }}">
                </div>

                <div class="form-group">
                    <label>Letak Janin</label>
                    <input type="text" name="letak_janin" value="{{ old('letak_janin') }}">
                </div>

                <div class="form-group">
                    <label>LILA</label>
                    <input type="number" step="0.1" name="lila" value="{{ old('lila') }}">
                </div>

                <div class="form-group">
                    <label>Jarak Anak</label>
                    <input type="text" name="jarak_anak" value="{{ old('jarak_anak') }}">
                </div>

                <div class="form-group">
                    <label>Tanggal Partus</label>
                    <input type="date" name="partus_tgl" value="{{ old('partus_tgl') }}">
                </div>

                <div class="form-group">
                    <label>Penolong</label>
                    <input type="text" name="penolong" value="{{ old('penolong') }}">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin Bayi</label>
                    <input type="text" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
                </div>

                <div class="form-group">
                    <label>Cara Lahir</label>
                    <input type="text" name="cara_lahir" value="{{ old('cara_lahir') }}">
                </div>

                <div class="form-group">
                    <label>Bayi</label>
                    <input type="text" name="bayi" value="{{ old('bayi') }}">
                </div>

                <div class="form-group">
                    <label>Plasenta</label>
                    <input type="text" name="plasenta" value="{{ old('plasenta') }}">
                </div>

                <div class="form-group">
                    <label>KU Bayi</label>
                    <input type="text" name="ku_bayi" value="{{ old('ku_bayi') }}">
                </div>

                <div class="form-group">
                    <label>KU Ibu</label>
                    <input type="text" name="ku_ibu" value="{{ old('ku_ibu') }}">
                </div>

                <div class="form-group">
                    <label>BBL</label>
                    <input type="number" step="0.01" name="bbl" value="{{ old('bbl') }}">
                </div>

                <div class="form-group">
                    <label>LK / LD</label>
                    <input type="text" name="lk_ld" value="{{ old('lk_ld') }}">
                </div>

            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-save">Simpan</button>
                <a href="{{ route('kartu-hpl.index') }}" class="btn btn-back">Kembali</a>
            </div>

        </form>

    </div>
</div>
@endsection
