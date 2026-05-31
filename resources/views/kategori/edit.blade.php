@extends('layouts.app')

@section('content')
    <div class="container" style="max-width: 600px">
        <div class="card shadow-sm">
            <div class="card-header bg-warning">
                <h5 class="mb-0">Edit Kategori</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori.update', $kategori) }}" method="POST">
                    @csrf @method('PUT')

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Kode Kategori <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="kode" value="{{ old('kode', $kategori->kode) }}"
                            class="form-control @error('kode') is-invalid @enderror" style="text-transform:uppercase"
                            maxlength="10">
                        @error('kode')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">
                            Nama Kategori <span class="text-danger">*</span>
                        </label>
                        <input type="text" name="nama" value="{{ old('nama', $kategori->nama) }}"
                            class="form-control @error('nama') is-invalid @enderror" maxlength="100">
                        @error('nama')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-warning">Update</button>
                        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
