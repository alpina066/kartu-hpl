<?php

namespace App\Http\Controllers;

use App\Models\KartuHpl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class KartuHplController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;

        $data = KartuHpl::where('user_id', Auth::id())
            ->when($search, function ($query) use ($search) {
                $query->where(function ($q) use ($search) {
                    $q->where('nama', 'like', "%{$search}%")
                      ->orWhere('suami', 'like', "%{$search}%")
                      ->orWhere('alamat', 'like', "%{$search}%")
                      ->orWhere('dx_keb', 'like', "%{$search}%");
                });
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10); // Ganti get() dengan paginate() untuk performa lebih baik

        return view('kartu.index', compact('data', 'search'));
    }

    public function create()
    {
        return view('kartu.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:15|max:50',
            'hpht' => 'required|date|before_or_equal:today',
            'hpl'  => 'required|date|after_or_equal:hpht',
            'suami' => 'nullable|string|max:255',
            'pekerjaan' => 'nullable|string|max:100',
            'alamat' => 'nullable|string',
            'dx_keb' => 'nullable|string|max:255',
            'perdarahan' => 'nullable|string',
            'bb' => 'nullable|numeric|min:30|max:150',
            'tb' => 'nullable|numeric|min:100|max:200',
            'tensi' => 'nullable|string|max:50',
            'hb' => 'nullable|numeric|min:5|max:20',
            'status_tt' => 'nullable|string',
            'tablet_fe' => 'nullable|string',
            'letak_janin' => 'nullable|string',
            'lila' => 'nullable|numeric|min:20|max:40',
            'jarak_anak' => 'nullable|integer|min:0',
            'partus_tgl' => 'nullable|date|after_or_equal:hpht',
            'penolong' => 'nullable|string|max:100',
            'jenis_kelamin' => 'nullable|in:L,P',
            'cara_lahir' => 'nullable|string',
            'bayi' => 'nullable|string',
            'plasenta' => 'nullable|string',
            'ku_bayi' => 'nullable|string',
            'ku_ibu' => 'nullable|string',
            'bbl' => 'nullable|numeric|min:1000|max:5000',
            'lk_ld' => 'nullable|numeric|min:20|max:60',
        ]);

        // Tambahkan user_id ke data yang divalidasi
        $validated['user_id'] = Auth::id();

        KartuHpl::create($validated);

        return redirect()->route('kartu-hpl.index')
            ->with('success', 'Data Kartu HPL berhasil disimpan');
    }

    public function edit(KartuHpl $kartu_hpl)
    {
        // Authorization: Pastikan user hanya bisa mengedit data miliknya
        $this->authorize('update', $kartu_hpl);

        return view('kartu.edit', [
            'data' => $kartu_hpl
        ]);
    }

    public function update(Request $request, KartuHpl $kartu_hpl)
    {
        // Authorization: Pastikan user hanya bisa mengupdate data miliknya
        $this->authorize('update', $kartu_hpl);

        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'umur' => 'required|integer|min:15|max:50',
            'hpht' => 'required|date|before_or_equal:today',
            'hpl'  => 'required|date|after_or_equal:hpht',
            'suami' => 'nullable|string|max:255',
            'pekerjaan' => 'nullable|string|max:100',
            'alamat' => 'nullable|string',
            'dx_keb' => 'nullable|string|max:255',
            'perdarahan' => 'nullable|string',
            'bb' => 'nullable|numeric|min:30|max:150',
            'tb' => 'nullable|numeric|min:100|max:200',
            'tensi' => 'nullable|string|max:50',
            'hb' => 'nullable|numeric|min:5|max:20',
            'status_tt' => 'nullable|string',
            'tablet_fe' => 'nullable|string',
            'letak_janin' => 'nullable|string',
            'lila' => 'nullable|numeric|min:20|max:40',
            'jarak_anak' => 'nullable|integer|min:0',
            'partus_tgl' => 'nullable|date|after_or_equal:hpht',
            'penolong' => 'nullable|string|max:100',
            'jenis_kelamin' => 'nullable|in:L,P',
            'cara_lahir' => 'nullable|string',
            'bayi' => 'nullable|string',
            'plasenta' => 'nullable|string',
            'ku_bayi' => 'nullable|string',
            'ku_ibu' => 'nullable|string',
            'bbl' => 'nullable|numeric|min:1000|max:5000',
            'lk_ld' => 'nullable|numeric|min:20|max:60',
        ]);

        $kartu_hpl->update($validated);

        return redirect()->route('kartu-hpl.index')
            ->with('success', 'Data berhasil diperbarui');
    }

    public function destroy(KartuHpl $kartu_hpl)
    {
        // Authorization: Pastikan user hanya bisa menghapus data miliknya
        $this->authorize('delete', $kartu_hpl);

        $kartu_hpl->delete();

        return redirect()->route('kartu-hpl.index')
            ->with('success', 'Data berhasil dihapus');
    }

    // Optional: Tambahkan method show jika diperlukan
    public function show(KartuHpl $kartu_hpl)
    {
        $this->authorize('view', $kartu_hpl);
        
        return view('kartu.show', [
            'data' => $kartu_hpl
        ]);
    }
}