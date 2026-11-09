@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h2 class="fw-bold">My Portfolio</h2>
        <p class="text-muted">Daftar proyek yang pernah saya kerjakan.</p>
    </div>

    <a href="{{ route('portfolio.create') }}" class="btn btn-primary">
        + Tambah Proyek
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="row">

    @forelse($portfolios as $portfolio)

        <div class="col-md-4 mb-4">
            <div class="card shadow-sm h-100">
                <div class="card-body">

                    <h5 class="fw-bold">
                        {{ $portfolio->judul }}
                    </h5>

                    <p>{{ $portfolio->deskripsi }}</p>

                    <p class="text-muted">
                        Teknologi: {{ $portfolio->teknologi }}
                    </p>

                    @if($portfolio->link)
                        <a href="{{ $portfolio->link }}" target="_blank">
                            Lihat Proyek
                        </a>
                    @endif

                    <hr>

                    <a href="{{ route('portfolio.edit', $portfolio->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>

                    <form action="{{ route('portfolio.destroy', $portfolio->id) }}"
                          method="POST" class="d-inline">

                        @csrf
                        @method('DELETE')

                        <button type="submit"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus proyek ini?')">
                            Hapus
                        </button>

                    </form>

                </div>
            </div>
        </div>

    @empty

        <div class="col-12">
            <div class="alert alert-info">
                Belum ada proyek portfolio.
            </div>
        </div>

    @endforelse

</div>

@endsection