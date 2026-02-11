<x-app-layout>
<div class="max-w-7xl mx-auto p-6">

<h2 class="text-xl font-semibold mb-4">Tambah Data Kartu HPL</h2>

<form action="/kartu-hpl/store" method="POST" class="space-y-4">
@csrf

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<input type="text" name="nama" placeholder="Nama" class="input" required>
<input type="number" name="umur" placeholder="Umur" class="input">
<input type="text" name="suami" placeholder="Nama Suami" class="input">
<input type="text" name="pekerjaan" placeholder="Pekerjaan" class="input">
<input type="text" name="alamat" placeholder="Alamat" class="input">
<input type="text" name="dx_keb" placeholder="Dx Kebidanan" class="input">
<input type="date" name="hpht" class="input">
<input type="date" name="hpl" class="input">
<input type="text" name="perdarahan" placeholder="Perdarahan" class="input">
<input type="text" name="bb" placeholder="BB" class="input">
<input type="text" name="tb" placeholder="TB" class="input">
<input type="text" name="tensi" placeholder="Tensi" class="input">
<input type="text" name="hb" placeholder="HB" class="input">
<input type="text" name="status_tt" placeholder="Status TT" class="input">
<input type="text" name="tablet_fe" placeholder="Tablet FE" class="input">
<input type="text" name="letak_janin" placeholder="Letak Janin" class="input">
<input type="text" name="lila" placeholder="LILA" class="input">
<input type="text" name="jarak_anak" placeholder="Jarak Anak" class="input">
<input type="date" name="partus_tgl" class="input">
<input type="text" name="penolong" placeholder="Penolong" class="input">
<input type="text" name="jenis_kelamin" placeholder="Jenis Kelamin" class="input">
<input type="text" name="cara_lahir" placeholder="Cara Lahir" class="input">
<input type="text" name="bayi" placeholder="Bayi" class="input">
<input type="text" name="plasenta" placeholder="Plasenta" class="input">
<input type="text" name="ku_bayi" placeholder="KU Bayi" class="input">
<input type="text" name="ku_ibu" placeholder="KU Ibu" class="input">
<input type="text" name="bbl" placeholder="BBL" class="input">
<input type="text" name="lk_ld" placeholder="LK / LD" class="input">
</div>

<div class="flex gap-2 mt-4">
<button class="px-4 py-2 bg-blue-600 text-white rounded">Simpan</button>
<a href="/kartu-hpl" class="px-4 py-2 bg-gray-500 text-white rounded">Kembali</a>
</div>

</form>
</div>
</x-app-layout>

<style>
.input {
    @apply border border-gray-300 rounded px-3 py-2 w-full;
}
</style>
