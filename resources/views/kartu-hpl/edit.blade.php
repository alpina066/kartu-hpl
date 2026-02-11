<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Kartu HPL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial, sans-serif; background:#f5f5f5; padding:20px; }
        h2 { margin-bottom:10px; }
        .btn { padding:6px 12px; border-radius:4px; text-decoration:none; color:white; font-size:13px; }
        .btn-primary { background:#0d6efd; }
        .btn-secondary { background:#6c757d; }
        form { background:white; padding:15px; border-radius:6px; }
        .row { display:grid; grid-template-columns:repeat(3,1fr); gap:10px; }
        .col { display:flex; flex-direction:column; }
        label { font-size:12px; font-weight:bold; margin-bottom:3px; }
        input, select { padding:6px; font-size:12px; border:1px solid #ccc; border-radius:4px; }
    </style>
</head>
<body>

<h2>Edit Data Kartu HPL</h2>

<a href="/kartu-hpl" class="btn btn-secondary">← Kembali</a>

<br><br>

<form action="/kartu-hpl/update?created_at={{ $data->created_at }}" method="POST">
    @csrf

    <div class="row">

        <div class="col">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ $data->nama }}">
        </div>

        <div class="col">
            <label>Umur</label>
            <input type="number" name="umur" value="{{ $data->umur }}">
        </div>

        <div class="col">
            <label>Nama Suami</label>
            <input type="text" name="suami" value="{{ $data->suami }}">
        </div>

        <div class="col">
            <label>Pekerjaan</label>
            <input type="text" name="pekerjaan" value="{{ $data->pekerjaan }}">
        </div>

        <div class="col">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ $data->alamat }}">
        </div>

        <div class="col">
            <label>Dx Keb</label>
            <input type="text" name="dx_keb" value="{{ $data->dx_keb }}">
        </div>

        <div class="col">
            <label>HPHT</label>
            <input type="date" name="hpht" value="{{ $data->hpht }}">
        </div>

        <div class="col">
            <label>HPL</label>
            <input type="date" name="hpl" value="{{ $data->hpl }}">
        </div>

        <div class="col">
            <label>Perdarahan</label>
            <input type="text" name="perdarahan" value="{{ $data->perdarahan }}">
        </div>

        <div class="col">
            <label>Berat Badan (BB)</label>
            <input type="text" name="bb" value="{{ $data->bb }}">
        </div>

        <div class="col">
            <label>Tinggi Badan (TB)</label>
            <input type="text" name="tb" value="{{ $data->tb }}">
        </div>

        <div class="col">
            <label>Tensi</label>
            <input type="text" name="tensi" value="{{ $data->tensi }}">
        </div>

        <div class="col">
            <label>HB</label>
            <input type="text" name="hb" value="{{ $data->hb }}">
        </div>

        <div class="col">
            <label>Status TT</label>
            <input type="text" name="status_tt" value="{{ $data->status_tt }}">
        </div>

        <div class="col">
            <label>Tablet Fe</label>
            <input type="text" name="tablet_fe" value="{{ $data->tablet_fe }}">
        </div>

        <div class="col">
            <label>Letak Janin</label>
            <input type="text" name="letak_janin" value="{{ $data->letak_janin }}">
        </div>

        <div class="col">
            <label>LILA</label>
            <input type="text" name="lila" value="{{ $data->lila }}">
        </div>

        <div class="col">
            <label>Jarak Anak</label>
            <input type="text" name="jarak_anak" value="{{ $data->jarak_anak }}">
        </div>

        <div class="col">
            <label>Tanggal Partus</label>
            <input type="date" name="partus_tgl" value="{{ $data->partus_tgl }}">
        </div>

        <div class="col">
            <label>Penolong</label>
            <input type="text" name="penolong" value="{{ $data->penolong }}">
        </div>

        <div class="col">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin">
                <option value="">- Pilih -</option>
                <option value="Laki-laki" {{ $data->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $data->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="col">
            <label>Cara Lahir</label>
            <input type="text" name="cara_lahir" value="{{ $data->cara_lahir }}">
        </div>

        <div class="col">
            <label>Bayi</label>
            <input type="text" name="bayi" value="{{ $data->bayi }}">
        </div>

        <div class="col">
            <label>Plasenta</label>
            <input type="text" name="plasenta" value="{{ $data->plasenta }}">
        </div>

        <div class="col">
            <label>KU Bayi</label>
            <input type="text" name="ku_bayi" value="{{ $data->ku_bayi }}">
        </div>

        <div class="col">
            <label>KU Ibu</label>
            <input type="text" name="ku_ibu" value="{{ $data->ku_ibu }}">
        </div>

        <div class="col">
            <label>BBL</label>
            <input type="text" name="bbl" value="{{ $data->bbl }}">
        </div>

        <div class="col">
            <label>LK / LD</label>
            <input type="text" name="lk_ld" value="{{ $data->lk_ld }}">
        </div>

    </div>

    <br>

    <button type="submit" class="btn btn-primary">Update Data</button>

</form>

</body>
</html>
