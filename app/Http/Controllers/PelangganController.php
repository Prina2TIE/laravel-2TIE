
<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $dataPelanggan = Pelanggan::all();

        return view('admin.pelanggan.index', compact('dataPelanggan'));
    }

    public function create()
    {
        return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'birthday'   => 'required|date',
            'gender'     => 'required|in:Male,Female',
            'email'      => 'required|email',
            'phone'      => 'required|numeric',
        ]);

        Pelanggan::create($data);

        return redirect()->route('pelanggan.index')
            ->with('success', 'Penambahan Data Pelanggan Berhasil!');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $dataPelanggan = Pelanggan::findOrFail($id);

        return view('admin.pelanggan.edit', compact('dataPelanggan'));
    }

    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'birthday'   => 'required|date',
            'gender'     => 'required|in:Male,Female',
            'email'      => 'required|email',
            'phone'      => 'required|numeric',
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->update($data);

        return redirect()->route('pelanggan.index')
            ->with('success', 'Perubahan Data Berhasil!');
    }

    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')
            ->with('success', 'Data Pelanggan Berhasil Dihapus!');
    }
}
