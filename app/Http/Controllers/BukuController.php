<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use App\Models\Buku;
use App\Models\KategoriBuku;
use Illuminate\Support\Facades\Storage;

class BukuController extends Controller
{
    public function index()
    {
        $data = Buku::with('kategori')->latest()->paginate(10);
        return view('buku.index', compact('data'));
    }

    public function create()
    {
        $kategori = KategoriBuku::orderBy('nama')->pluck('nama','id');
        return view('buku.create', compact('kategori'));
    }

    public function store(StoreBukuRequest $request)
    {
        $payload = $request->validated();

        // handle cover upload
        if ($request->hasFile('cover')) {
            $payload['cover_path'] = $request->file('cover')->store('covers','public');
        }
        Buku::create($payload);

        return redirect()->route('buku.index')->with('success','Buku dibuat.');
    }

    public function edit(Buku $buku)
    {
        $kategori = KategoriBuku::orderBy('nama')->pluck('nama','id');
        return view('buku.edit', compact('buku','kategori'));
    }

    public function update(UpdateBukuRequest $request, Buku $buku)
    {
        $payload = $request->validated();

        if ($request->hasFile('cover')) {
            // hapus lama
            if ($buku->cover_path) Storage::disk('public')->delete($buku->cover_path);
            $payload['cover_path'] = $request->file('cover')->store('covers','public');
        }
        $buku->update($payload);

        return redirect()->route('buku.index')->with('success','Buku diperbarui.');
    }

    public function destroy(Buku $buku)
    {
        if ($buku->cover_path) Storage::disk('public')->delete($buku->cover_path);
        $buku->delete();
        return back()->with('success','Buku dihapus.');
    }
}
