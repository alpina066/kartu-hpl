<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Kartu HPL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: Arial, sans-serif; background:#f5f5f5; padding:20px; }
        h2 { margin-bottom:10px; }
        table { width:100%; border-collapse:collapse; background:white; }
        th, td { border:1px solid #ccc; padding:6px 8px; font-size:12px; text-align:left; }
        th { background:#eaeaea; }
        .btn { padding:4px 8px; font-size:12px; border-radius:4px; text-decoration:none; color:white; }
        .btn-primary { background:#0d6efd; }
        .btn-warning { background:#ffc107; color:black; }
        .btn-danger { background:#dc3545; }
        .top-bar { margin-bottom:12px; }
    </style>
</head>
<body>

<h2>Data Kartu HPL</h2>

<div class="top-bar">
    <a href="/dashboard" class="btn btn-primary">Dashboard</a>
    <a href="/kartu-hpl/create" class="btn btn-primary">Tambah Data</a>
</div>

<table>
    <thead>
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
            <th>Partus Tgl</th>
            <th>Penolong</th>
            <th>Jenis Kelamin</th>
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
        @forelse ($data as $item)
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
                <a href="/kartu-hpl/edit?created_at={{ $item->created_at }}" class="btn btn-warning">Edit</a>

                <form action="/kartu-hpl/delete?created_at={{ $item->created_at }}" method="POST" style="display:inline">
                    @csrf
                    <button onclick="return confirm('Hapus data ini?')" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="30" style="text-align:center">Data belum ada</td>
        </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>
