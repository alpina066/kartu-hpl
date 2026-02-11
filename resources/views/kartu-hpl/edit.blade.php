@extends('layouts.app')

@section('content')
<div class="container">

    <div class="header-bar">
        <h2>Edit Data Kartu HPL</h2>
        <a href="/kartu-hpl" class="btn btn-back">Kembali</a>
    </div>

    <div class="form-card">
        <form action="/kartu-hpl/update?created_at={{ $data->created_at }}" method="POST">
            @csrf

            <div class="form-grid">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" value="{{ $data->nama }}">
                </div>

                <div class="form-group">
                    <label>Umur</label>
                    <input type="number" name="umur" value="{{ $data->umur }}">
                </div>

                <div class="form-group">
                    <label>Nama Suami</label>
                    <input type="text" name="suami" value="{{ $data->suami }}">
                </div>

                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan" value="{{ $data->pekerjaan }}">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="{{ $data->alamat }}">
                </div>

                <div class="form-group">
                    <label>Dx Kebidanan</label>
                    <input type="text" name="dx_keb" value="{{ $data->dx_keb }}">
                </div>

                <div class="form-group">
                    <label>HPHT</label>
                    <input type="date" name="hpht" value="{{ $data->hpht }}">
                </div>

                <div class="form-group">
                    <label>HPL</label>
                    <input type="date" name="hpl" value="{{ $data->hpl }}">
                </div>

                <div class="form-group">
                    <label>Perdarahan</label>
                    <input type="text" name="perdarahan" value="{{ $data->perdarahan }}">
                </div>

                <div class="form-group">
                    <label>BB</label>
                    <input type="text" name="bb" value="{{ $data->bb }}">
                </div>

                <div class="form-group">
                    <label>TB</label>
                    <input type="text" name="tb" value="{{ $data->tb }}">
                </div>

                <div class="form-group">
                    <label>Tensi</label>
                    <input type="text" name="tensi" value="{{ $data->tensi }}">
                </div>

                <div class="form-group">
                    <label>HB</label>
                    <input type="text" name="hb" value="{{ $data->hb }}">
                </div>

                <div class="form-group">
                    <label>Status TT</label>
                    <input type="text" name="status_tt" value="{{ $data->status_tt }}">
                </div>

                <div class="form-group">
                    <label>Tablet FE</label>
                    <input type="text" name="tablet_fe" value="{{ $data->tablet_fe }}">
                </div>

                <div class="form-group">
                    <label>Letak Janin</label>
                    <input type="text" name="letak_janin" value="{{ $data->letak_janin }}">
                </div>

                <div class="form-group">
                    <label>LILA</label>
                    <input type="text" name="lila" value="{{ $data->lila }}">
                </div>

                <div class="form-group">
                    <label>Jarak Anak</label>
                    <input type="text" name="jarak_anak" value="{{ $data->jarak_anak }}">
                </div>

                <div class="form-group">
                    <label>Tanggal Partus</label>
                    <input type="date" name="partus_tgl" value="{{ $data->partus_tgl }}">
                </div>

                <div class="form-group">
                    <label>Penolong</label>
                    <input type="text" name="penolong" value="{{ $data->penolong }}">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}">
                </div>

                <div class="form-group">
                    <label>Cara Lahir</label>
                    <input type="text" name="cara_lahir" value="{{ $data->cara_lahir }}">
                </div>

                <div class="form-group">
                    <label>Bayi</label>
                    <input type="text" name="bayi" value="{{ $data->bayi }}">
                </div>

                <div class="form-group">
                    <label>Plasenta</label>
                    <input type="text" name="plasenta" value="{{ $data->plasenta }}">
                </div>

                <div class="form-group">
                    <label>Keadaan Umum Bayi</label>
                    <input type="text" name="ku_bayi" value="{{ $data->ku_bayi }}">
                </div>

                <div class="form-group">
                    <label>Keadaan Umum Ibu</label>
                    <input type="text" name="ku_ibu" value="{{ $data->ku_ibu }}">
                </div>

                <div class="form-group">
                    <label>BBL</label>
                    <input type="text" name="bbl" value="{{ $data->bbl }}">
                </div>

                <div class="form-group">
                    <label>LK / LD</label>
                    <input type="text" name="lk_ld" value="{{ $data->lk_ld }}">
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-save">Update</button>
                <a href="/kartu-hpl" class="btn btn-back">Batal</a>
            </div>
        </form>
    </div>

</div>
@endsection
