<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class KartuHplController extends Controller
{
    protected string $table = 'kartu_hpl';

    public function index()
    {
        $data = DB::table($this->table)
            ->where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('kartu-hpl.index', compact('data'));
    }

    public function create()
    {
        return view('kartu-hpl.create');
    }

    public function store(Request $request)
    {
        DB::table($this->table)->insert([
            'user_id' => Auth::id(),
            'nama' => $request->nama,
            'umur' => $request->umur,
            'suami' => $request->suami,
            'pekerjaan' => $request->pekerjaan,
            'alamat' => $request->alamat,
            'dx_keb' => $request->dx_keb,
            'hpht' => $request->hpht,
            'hpl' => $request->hpl,
            'perdarahan' => $request->perdarahan,
            'bb' => $request->bb,
            'tb' => $request->tb,
            'tensi' => $request->tensi,
            'hb' => $request->hb,
            'status_tt' => $request->status_tt,
            'tablet_fe' => $request->tablet_fe,
            'letak_janin' => $request->letak_janin,
            'lila' => $request->lila,
            'jarak_anak' => $request->jarak_anak,
            'partus_tgl' => $request->partus_tgl,
            'penolong' => $request->penolong,
            'jenis_kelamin' => $request->jenis_kelamin,
            'cara_lahir' => $request->cara_lahir,
            'bayi' => $request->bayi,
            'plasenta' => $request->plasenta,
            'ku_bayi' => $request->ku_bayi,
            'ku_ibu' => $request->ku_ibu,
            'bbl' => $request->bbl,
            'lk_ld' => $request->lk_ld,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect()->route('kartu-hpl.index')->with('success', 'Data berhasil disimpan');
    }

    public function edit($id)
    {
        $data = DB::table($this->table)
            ->where('id', $id)
            ->where('user_id', Auth::id())
            ->first();

        if (!$data) abort(404);

        return view('kartu-hpl.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        DB::table($this->table)
            ->where('id', $id)
            ->where('user_id', Auth::id())
            ->update([
                'nama' => $request->nama,
                'umur' => $request->umur,
                'suami' => $request->suami,
                'pekerjaan' => $request->pekerjaan,
                'alamat' => $request->alamat,
                'dx_keb' => $request->dx_keb,
                'hpht' => $request->hpht,
                'hpl' => $request->hpl,
                'perdarahan' => $request->perdarahan,
                'bb' => $request->bb,
                'tb' => $request->tb,
                'tensi' => $request->tensi,
                'hb' => $request->hb,
                'status_tt' => $request->status_tt,
                'tablet_fe' => $request->tablet_fe,
                'letak_janin' => $request->letak_janin,
                'lila' => $request->lila,
                'jarak_anak' => $request->jarak_anak,
                'partus_tgl' => $request->partus_tgl,
                'penolong' => $request->penolong,
                'jenis_kelamin' => $request->jenis_kelamin,
                'cara_lahir' => $request->cara_lahir,
                'bayi' => $request->bayi,
                'plasenta' => $request->plasenta,
                'ku_bayi' => $request->ku_bayi,
                'ku_ibu' => $request->ku_ibu,
                'bbl' => $request->bbl,
                'lk_ld' => $request->lk_ld,
                'updated_at' => now(),
            ]);

        return redirect()->route('kartu-hpl.index')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        DB::table($this->table)
            ->where('id', $id)
            ->where('user_id', Auth::id())
            ->delete();

        return redirect()->route('kartu-hpl.index')->with('success', 'Data berhasil dihapus');
    }
}
