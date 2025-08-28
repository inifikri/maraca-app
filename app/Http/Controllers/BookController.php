<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     * Menampilkan semua buku.
     */
    public function index()
    {
        $title = "Daftar Buku";
        $books = Books::with('category')->get();
        return view('books.index', compact('books','title'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'isbn' => 'required|string|unique:books',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id', 
        ]);

        $book = Books::create($request->all());
        return response()->json($book, 201);
    }

    /**
     * Display the specified resource.
     * Menampilkan detail satu buku.
     */
    public function show(Books $book)
    {
        $book->load('category'); // Eager loading kategori
        return response()->json($book);
    }

    /**
     * Update the specified resource in storage.
     * Memperbarui data buku.
     */
    public function update(Request $request, Books $book)
    {
        $request->validate([
            'title' => 'required|string',
            'author' => 'required|string',
            'isbn' => 'required|string|unique:books,isbn,' . $book->id,
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
        ]);

        $book->update($request->all());
        return response()->json($book);
    }

    /**
     * Remove the specified resource from storage.
     * Menghapus buku.
     */
    public function destroy(Books $book)
    {
        $book->delete();
        return response()->json(null, 204);
    }
}