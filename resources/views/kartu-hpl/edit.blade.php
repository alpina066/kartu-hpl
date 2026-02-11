<x-app-layout>
<div class="max-w-7xl mx-auto p-6">

<h2 class="text-xl font-semibold mb-4">Edit Data Kartu HPL</h2>

<form action="/kartu-hpl/update?created_at={{ $data->created_at }}" method="POST" class="space-y-4">
@csrf

<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
<input type="text" name="nama" value="{{ $data->nama }}" class="input" required>
<input type="number" name="umur" value="{{ $data->umur }}" class="input">
<input type="text" name="suami" value="{{ $data->suami }}" class="input">
<input type="text" name="pekerjaan" value="{{ $data->pekerjaan }}" class="input">
<input type="text" name="alamat" value="{{ $data->alamat }}" class="input">
<input type="text" name="dx_keb" value="{{ $data->dx_keb }}" class="input">
<input type="date" name="hpht" value="{{ $data->hpht }}" class="input">
<input type="date" name="hpl" value="{{ $data->hpl }}" class="input">
<input type="text" name="perdarahan" value="{{ $data->perdarahan }}" class="input">
<input type="text" name="bb" value="{{ $data->bb }}" class="input">
<input type="text" name="tb" value="{{ $data->tb }}" class="input">
<input type="text" name="tensi" value="{{ $data->tensi }}" class="input">
<input type="text" name="hb" value="{{ $data->hb }}" class="input">
<input type="text" name="status_tt" value="{{ $data->status_tt }}" class="input">
<input type="text" name="tablet_fe" value="{{ $data->tablet_fe }}" class="input">
<input type="text" name="letak_janin" value="{{ $data->letak_janin }}" class="input">
<input type="text" name="lila" value="{{ $data->lila }}" class="input">
<input type="text" name="jarak_anak" value="{{ $data->jarak_anak }}" class="input">
<input type="date" name="partus_tgl" value="{{ $data->partus_tgl }}" class="input">
<input type="text" name="penolong" value="{{ $data->penolong }}" class="input">
<input type="text" name="jenis_kelamin" value="{{ $data->jenis_kelamin }}" class="input">
<input type="text" name="cara_lahir" value="{{ $data->cara_lahir }}" class="input">
<input type="text" name="bayi" value="{{ $data->bayi }}" class="input">
<input type="text" name="plasenta" value="{{ $data->plasenta }}" class="input">
<input type="text" name="ku_bayi" value="{{ $data->ku_bayi }}" class="input">
<input type="text" name="ku_ibu" value="{{ $data->ku_ibu }}" class="input">
<input type="text" name="bbl" value="{{ $data->bbl }}" class="input">
<input type="text" name="lk_ld" value="{{ $data->lk_ld }}" class="input">
</div>

<div class="flex gap-2 mt-4">
<button class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
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
