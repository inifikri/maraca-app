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
                            <th>Cover</th>
                            <th>Judul</th>
                            <th>Kategori</th>
                            <th>Penulis</th>
                            <th>Terbit</th>
                            <th>Stok</th>
                            <th class="text-end">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($data as $i => $row)
          <tr>
            <td>{{ $data->firstItem() + $i }}</td>
            <td>
              @if($row->cover_path)
                <img src="{{ asset('storage/'.$row->cover_path) }}" style="width:48px;height:48px;object-fit:cover" class="rounded">
              @else
                <span class="text-muted">—</span>
              @endif
            </td>
            <td>{{ $row->judul }}</td>
            <td>{{ $row->kategori->nama ?? '-' }}</td>
            <td>{{ $row->penulis ?? '-' }}</td>
            <td>{{ $row->tahun_terbit ?? '-' }}</td>
            <td>{{ $row->stok }}</td>
            <td class="text-end">
              <a href="{{ route('buku.edit',$row->id) }}" class="btn btn-sm btn-warning">Edit</a>
              <form action="{{ route('buku.destroy',$row->id) }}" method="post" class="d-inline"
                    onsubmit="return confirm('Hapus buku ini?')">
                @csrf @method('DELETE')
                <button class="btn btn-sm btn-danger">Hapus</button>
              </form>
            </td>
          </tr>
        @empty
          <tr><td colspan="8" class="text-center text-muted">Belum ada data.</td></tr>
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
@endsection
