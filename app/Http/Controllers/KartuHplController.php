<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KartuHpl;
use Illuminate\Support\Facades\Auth;

class KartuHplController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $data = KartuHpl::where('user_id', Auth::id())
            ->when($search, function ($query) use ($search) {
                $query->where('nama', 'like', "%{$search}%")
                      ->orWhere('suami', 'like', "%{$search}%")
                      ->orWhere('alamat', 'like', "%{$search}%")
                      ->orWhere('dx_keb', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('kartu.index', compact('data', 'search'));
    }

    public function create()
    {
        return view('kartu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'hpht' => 'required|date',
            'hpl'  => 'required|date',
        ]);

        KartuHpl::create([
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
        ]);

        return redirect()->route('kartu-hpl.index')
            ->with('success', 'Data Kartu HPL berhasil disimpan');
    }

    public function edit($id)
    {
        $data = KartuHpl::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        return view('kartu.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'umur' => 'required|numeric',
            'hpht' => 'required|date',
            'hpl'  => 'required|date',
        ]);

        $data = KartuHpl::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $data->update($request->all());

        return redirect()->route('kartu-hpl.index')
            ->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $data = KartuHpl::where('id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();

        $data->delete();

        return redirect()->route('kartu-hpl.index')
            ->with('success', 'Data berhasil dihapus');
    }
}
