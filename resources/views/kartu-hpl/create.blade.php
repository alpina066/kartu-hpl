@extends('layouts.app')

@section('content')
<div class="container">

    <div class="header-bar">
        <h2>Tambah Data Kartu HPL</h2>
        <a href="/kartu-hpl" class="btn btn-back">Kembali</a>
    </div>

    <div class="form-card">
        <form action="/kartu-hpl/store" method="POST">
            @csrf

            <div class="form-grid">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" required>
                </div>

                <div class="form-group">
                    <label>Umur</label>
                    <input type="number" name="umur">
                </div>

                <div class="form-group">
                    <label>Nama Suami</label>
                    <input type="text" name="suami">
                </div>

                <div class="form-group">
                    <label>Pekerjaan</label>
                    <input type="text" name="pekerjaan">
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat">
                </div>

                <div class="form-group">
                    <label>Dx Kebidanan</label>
                    <input type="text" name="dx_keb">
                </div>

                <div class="form-group">
                    <label>HPHT</label>
                    <input type="date" name="hpht">
                </div>

                <div class="form-group">
                    <label>HPL</label>
                    <input type="date" name="hpl">
                </div>

                <div class="form-group">
                    <label>Perdarahan</label>
                    <input type="text" name="perdarahan">
                </div>

                <div class="form-group">
                    <label>BB</label>
                    <input type="text" name="bb">
                </div>

                <div class="form-group">
                    <label>TB</label>
                    <input type="text" name="tb">
                </div>

                <div class="form-group">
                    <label>Tensi</label>
                    <input type="text" name="tensi">
                </div>

                <div class="form-group">
                    <label>HB</label>
                    <input type="text" name="hb">
                </div>

                <div class="form-group">
                    <label>Status TT</label>
                    <input type="text" name="status_tt">
                </div>

                <div class="form-group">
                    <label>Tablet FE</label>
                    <input type="text" name="tablet_fe">
                </div>

                <div class="form-group">
                    <label>Letak Janin</label>
                    <input type="text" name="letak_janin">
                </div>

                <div class="form-group">
                    <label>LILA</label>
                    <input type="text" name="lila">
                </div>

                <div class="form-group">
                    <label>Jarak Anak</label>
                    <input type="text" name="jarak_anak">
                </div>

                <div class="form-group">
                    <label>Tanggal Partus</label>
                    <input type="date" name="partus_tgl">
                </div>

                <div class="form-group">
                    <label>Penolong</label>
                    <input type="text" name="penolong">
                </div>

                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin">
                </div>

                <div class="form-group">
                    <label>Cara Lahir</label>
                    <input type="text" name="cara_lahir">
                </div>

                <div class="form-group">
                    <label>Bayi</label>
                    <input type="text" name="bayi">
                </div>

                <div class="form-group">
                    <label>Plasenta</label>
                    <input type="text" name="plasenta">
                </div>

                <div class="form-group">
                    <label>Keadaan Umum Bayi</label>
                    <input type="text" name="ku_bayi">
                </div>

                <div class="form-group">
                    <label>Keadaan Umum Ibu</label>
                    <input type="text" name="ku_ibu">
                </div>

                <div class="form-group">
                    <label>BBL</label>
                    <input type="text" name="bbl">
                </div>

                <div class="form-group">
                    <label>LK / LD</label>
                    <input type="text" name="lk_ld">
                </div>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-save">Simpan</button>
                <a href="/kartu-hpl" class="btn btn-back">Batal</a>
            </div>
        </form>
    </div>

</div>
@endsection
