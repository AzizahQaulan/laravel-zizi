@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
    <div class="card-body p-4">

        <h3 class="fw-bold mb-4">Tambah Proyek Baru</h3>

        <form action="{{ route('portfolio.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label class="form-label">Judul Proyek</label>
                <input type="text" name="judul" class="form-control"
                       placeholder="Contoh: Sistem Informasi Laundry"
                       value="{{ old('judul') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea name="deskripsi" class="form-control"
                          rows="4" required>{{ old('deskripsi') }}</textarea>
            </div>

            <div class="mb-3">
                <label class="form-label">Teknologi</label>
                <input type="text" name="teknologi" class="form-control"
                       placeholder="Contoh: Laravel, MySQL, Bootstrap"
                       value="{{ old('teknologi') }}" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Link Proyek (Opsional)</label>
                <input type="url" name="link" class="form-control"
                       placeholder="https://contoh.com"
                       value="{{ old('link') }}">
            </div>

            <button type="submit" class="btn btn-primary">
                Simpan
            </button>

            <a href="{{ route('portfolio.index') }}"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>

@endsection