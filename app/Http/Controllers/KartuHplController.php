<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KartuHplController extends Controller
{
    protected string $table = 'kartu_hpl';

    public function index()
    {
        $data = DB::table($this->table)->orderBy('id', 'desc')->get();
        return view('kartu-hpl.index', compact('data'));
    }

    public function create()
    {
        return view('kartu-hpl.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'nullable|string|max:50',
            'suami' => 'nullable|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'dx_keb' => 'nullable|string|max:255',
            'hpht' => 'nullable|date',
            'hpl' => 'nullable|date',
            'perdarahan' => 'nullable|string|max:255',
            'bb' => 'nullable|string|max:50',
            'tb' => 'nullable|string|max:50',
            'tensi' => 'nullable|string|max:50',
            'hb' => 'nullable|string|max:50',
            'status_tt' => 'nullable|string|max:50',
            'tablet_fe' => 'nullable|string|max:50',
            'letak_janin' => 'nullable|string|max:50',
            'lila' => 'nullable|string|max:50',
            'jarak_anak' => 'nullable|string|max:50',
            'partus_tgl' => 'nullable|date',
            'penolong' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|string|max:50',
            'cara_lahir' => 'nullable|string|max:50',
            'bayi' => 'nullable|string|max:255',
            'plasenta' => 'nullable|string|max:255',
            'ku_bayi' => 'nullable|string|max:255',
            'ku_ibu' => 'nullable|string|max:255',
            'bbl' => 'nullable|string|max:50',
            'lk_ld' => 'nullable|string|max:50',
        ]);

        DB::table($this->table)->insert(array_merge($validated, [
            'created_at' => now(),
            'updated_at' => now(),
        ]));

        return redirect()->route('kartu-hpl.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $data = DB::table($this->table)->where('id', $id)->first();

        if (!$data) {
            abort(404);
        }

        return view('kartu-hpl.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'nullable|string|max:50',
            'suami' => 'nullable|string|max:255',
            'pekerjaan' => 'nullable|string|max:255',
            'alamat' => 'nullable|string',
            'dx_keb' => 'nullable|string|max:255',
            'hpht' => 'nullable|date',
            'hpl' => 'nullable|date',
            'perdarahan' => 'nullable|string|max:255',
            'bb' => 'nullable|string|max:50',
            'tb' => 'nullable|string|max:50',
            'tensi' => 'nullable|string|max:50',
            'hb' => 'nullable|string|max:50',
            'status_tt' => 'nullable|string|max:50',
            'tablet_fe' => 'nullable|string|max:50',
            'letak_janin' => 'nullable|string|max:50',
            'lila' => 'nullable|string|max:50',
            'jarak_anak' => 'nullable|string|max:50',
            'partus_tgl' => 'nullable|date',
            'penolong' => 'nullable|string|max:255',
            'jenis_kelamin' => 'nullable|string|max:50',
            'cara_lahir' => 'nullable|string|max:50',
            'bayi' => 'nullable|string|max:255',
            'plasenta' => 'nullable|string|max:255',
            'ku_bayi' => 'nullable|string|max:255',
            'ku_ibu' => 'nullable|string|max:255',
            'bbl' => 'nullable|string|max:50',
            'lk_ld' => 'nullable|string|max:50',
        ]);

        DB::table($this->table)->where('id', $id)->update(array_merge($validated, [
            'updated_at' => now(),
        ]));

        return redirect()->route('kartu-hpl.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        DB::table($this->table)->where('id', $id)->delete();
        return redirect()->route('kartu-hpl.index')->with('success', 'Data berhasil dihapus');
    }
}
