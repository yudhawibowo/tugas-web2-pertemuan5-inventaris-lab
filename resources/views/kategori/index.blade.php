@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4>Daftar Kategori</h4>
            <a href="{{ route('kategori.create') }}" class="btn btn-primary">+ Tambah Kategori</a>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <form method="GET" class="mb-3">
            <div class="input-group">
                <input type="text" name="q" value="{{ request('q') }}" class="form-control"
                    placeholder="Cari kode atau nama kategori...">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                @if (request('q'))
                    <a href="{{ route('kategori.index') }}" class="btn btn-outline-danger">Reset</a>
                @endif
            </div>
        </form>

        <table class="table table-bordered table-hover align-middle">
            <thead>
                <tr>
                    <th width="50">#</th>
                    <th width="100">Kode</th>
                    <th>Nama Kategori</th>
                    <th width="130">Jumlah Inventaris</th>
                    <th width="150">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($kategoris as $kategori)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><span class="badge bg-secondary">{{ $kategori->kode }}</span></td>
                        <td>{{ $kategori->nama }}</td>
                        <td class="text-center">
                            <span class="badge bg-info text-dark">{{ $kategori->inventaris_count }} barang</span>
                        </td>
                        <td>
                            <a href="{{ route('kategori.edit', $kategori) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('kategori.destroy', $kategori) }}" method="POST" class="d-inline"
                                onsubmit="return confirm('Yakin ingin menghapus kategori ini?')">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">Belum ada data kategori.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $kategoris->links() }}
    </div>
@endsection
