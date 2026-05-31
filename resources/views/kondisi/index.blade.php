@extends('layouts.app')

@section('title', 'Data Kondisi')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold mb-0">Daftar Kondisi</h3>
    </div>

    <div class="card border-0 shadow-sm rounded-4">

        <div class="card-body p-0">

            <div class="table-responsive">

                <table class="table align-middle mb-0">

                    <thead style="background:#f9fafb;">
                        <tr>
                            <th width="80">#</th>
                            <th>Nama Kondisi</th>
                            <th>Deskripsi</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse($kondisis as $index => $kondisi)
                            <tr>

                                <td>{{ $index + 1 }}</td>

                                <td>
                                    <span class="badge bg-secondary">
                                        {{ $kondisi['nama'] }}
                                    </span>
                                </td>

                                <td>
                                    {{ $kondisi['deskripsi'] }}
                                </td>

                            </tr>

                        @empty

                            <tr>
                                <td colspan="3" class="text-center py-4 text-muted">
                                    Belum ada data kondisi
                                </td>
                            </tr>
                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection
