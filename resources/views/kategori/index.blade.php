@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            <h1 class="page-title font-weight-bold">Kategori Buku</h1>
            <div class="mt-5 mb-3">
                <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahData">+ Tambah
                    Data</a>
            </div>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{-- ikon opsional --}}
                    <i class="fa-solid fa-check-circle me-1"></i>
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="fa-solid fa-triangle-exclamation me-1"></i>
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form method="GET" action="{{ route('kategori.index') }}" class="d-flex gap-2">
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    <input type="text" name="q" value="{{ $q ?? '' }}" class="form-control"
                        placeholder="Cari nama kategori...">
                </div>
                <button class="btn btn-secondary btn-sm" type="submit">Cari</button>
                @if (!empty($q))
                    <a class="btn btn-dark" href="{{ route('kategori.index') }}">Reset</a>
                @endif
            </form>
            <div class="card mt-3">
                {{-- <div class="card-body"> --}}
                <table class="table table-striped align-middle mb-0 p-0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $i => $row)
                            <tr>
                                <td>{{ $data->firstItem() + $i }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>
                                    <div class="button">
                                        <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                            data-bs-target="#UbahKategori{{ $row->id }}"><i
                                                class="fa-solid fa-pencil"></i></a>
                                        <form action="{{ route('kategori.destroy', $row->id) }}" method="post"
                                            class="d-inline" onsubmit="return confirm('Hapus kategori buku ini?')">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-sm btn-danger"><i
                                                    class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-muted">Belum ada data.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                {{-- </div> --}}
            </div>
            <div class="card-footer d-flex justify-content-between align-items-center flex-wrap gap-2">
                <div class="small text-muted">
                    Menampilkan {{ $data->firstItem() ?? 0 }}–{{ $data->lastItem() ?? 0 }} dari {{ $data->total() }} data
                </div>
                <div class="d-flex justify-content-center mt-3">
                    {{ $data->onEachSide(1)->links('vendor.pagination.numbers-only') }}
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL TAMBAH DATA --}}
    <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="tambahDataLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tambahDataLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('kategori.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Nama<span class="text-danger">*</span></label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Kategori Buku"
                                value="{{ old('nama') }}" required />
                        </div>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <label>Deskripsi<span class="text-danger">*</span></label>
                            <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi') }}</textarea>
                        </div>
                        @error('deskripsi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm">
                            <i class="fa-solid fa-floppy-disk"></i> Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    {{-- MODAL UPDATE DATA --}}
    @foreach ($data as $i => $row)
        <div class="modal fade" id="UbahKategori{{ $row->id }}" tabindex="-1" aria-labelledby="UbahKategoriLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="UbahKategoriLabel">Ubah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('kategori.update', $row->id) }}" method="POST">
                        @csrf @method('PUT')
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Nama<span class="text-danger">*</span></label>
                                <input type="text" name="nama" class="form-control"
                                    placeholder="Nama Kategori Buku" value="{{ old('nama', $row->nama) }}" required />
                            </div>
                            <div class="form-group">
                                <label>Deskripsi<span class="text-danger">*</span></label>
                                <textarea name="deskripsi" class="form-control" rows="3">{{ old('deskripsi', $row->deskripsi) }}"</textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary btn-sm">
                                <i class="fa-solid fa-floppy-disk"></i> Save
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    @if ($errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                // Kalau error terjadi di create/edit, kamu bisa pilih modal mana yang mau dibuka.
                const el = document.getElementById('tambahData');
                if (el) new bootstrap.Modal(el).show();
            });
        </script>
    @endif
@endsection
