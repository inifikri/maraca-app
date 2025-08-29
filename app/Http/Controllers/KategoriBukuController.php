<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreKategoriBukuRequest;
use App\Http\Requests\UpdateKategoriBukuRequest;
use App\Models\KategoriBuku;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class KategoriBukuController extends Controller
{
    public function index(Request $request)
    {
        $q       = trim($request->get('q', ''));     
        $perPage = (int) $request->get('per_page', 10); 
        $perPage = in_array($perPage, [10,25,50,100]) ? $perPage : 10;

        $data = KategoriBuku::query()
            ->when($q !== '', fn($qr) => $qr->where('nama', 'like', "%{$q}%"))
            ->orderBy('nama')
            ->paginate($perPage)
            ->withQueryString();
        // $data = KategoriBuku::latest()->paginate(10);
        return view('kategori.index', compact('data','q','perPage'));
    }

    public function store(StoreKategoriBukuRequest $request)
    {
        $payload = $request->validated();
        $payload['slug'] = Str::slug($payload['nama']);
        KategoriBuku::create($payload);

        return redirect()->route('kategori.index')->with('success','Kategori dibuat.');
    }

    public function update(UpdateKategoriBukuRequest $request, KategoriBuku $kategori)
    {
        $payload = $request->validated();
        $payload['slug'] = Str::slug($payload['nama']);
        $kategori->update($payload);

        return redirect()->route('kategori.index')->with('success','Kategori diperbarui.');
    }

    public function destroy(KategoriBuku $kategori)
    {
        $kategori->delete();
        return back()->with('success','Kategori dihapus.');
    }
}
