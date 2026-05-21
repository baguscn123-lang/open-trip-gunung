@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1 class="text-danger fw-bold">
            Tambah Destination
        </h1>

        <a href="{{ route('destinations.index') }}"
           class="btn btn-secondary">

            ← Kembali

        </a>

    </div>

    <div class="card bg-dark border-0 shadow-lg">

        <div class="card-body p-4">

            <form action="{{ route('destinations.store') }}"
                  method="POST"
                  enctype="multipart/form-data">

                @csrf

                {{-- TITLE --}}
                <div class="mb-4">

                    <label class="form-label text-white">

                        Judul Destination

                    </label>

                    <input type="text"
                           name="title"
                           class="form-control bg-black text-white border-secondary p-3"
                           placeholder="Contoh: Gunung Rinjani">

                    @error('title')

                        <small class="text-danger">

                            {{ $message }}

                        </small>

                    @enderror

                </div>

                {{-- LOCATION --}}
                <div class="mb-4">

                    <label class="form-label text-white">

                        Lokasi

                    </label>

                    <input type="text"
                           name="location"
                           class="form-control bg-black text-white border-secondary p-3"
                           placeholder="Contoh: Lombok">

                    @error('location')

                        <small class="text-danger">

                            {{ $message }}

                        </small>

                    @enderror

                </div>

                {{-- PRICE --}}
                <div class="mb-4">

                    <label class="form-label text-white">

                        Harga

                    </label>

                    <input type="text"
                           name="price"
                           class="form-control bg-black text-white border-secondary p-3"
                           placeholder="Contoh: Rp 1.500.000">

                    @error('price')

                        <small class="text-danger">

                            {{ $message }}

                        </small>

                    @enderror

                </div>

                {{-- DURATION --}}
                <div class="mb-4">

                    <label class="form-label text-white">

                        Durasi

                    </label>

                    <input type="text"
                           name="duration"
                           class="form-control bg-black text-white border-secondary p-3"
                           placeholder="Contoh: 3 Hari 2 Malam">

                    @error('duration')

                        <small class="text-danger">

                            {{ $message }}

                        </small>

                    @enderror

                </div>

                {{-- DIFFICULTY --}}
                <div class="mb-4">

                    <label class="form-label text-white">

                        Difficulty

                    </label>

                    <select name="difficulty"
                            class="form-control bg-black text-white border-secondary p-3">

                        <option value="">
                            -- Pilih Difficulty --
                        </option>

                        <option value="Easy">
                            Easy
                        </option>

                        <option value="Medium">
                            Medium
                        </option>

                        <option value="Hard">
                            Hard
                        </option>

                    </select>

                    @error('difficulty')

                        <small class="text-danger">

                            {{ $message }}

                        </small>

                    @enderror

                </div>

                {{-- DESCRIPTION --}}
                <div class="mb-4">

                    <label class="form-label text-white">

                        Deskripsi

                    </label>

                    <textarea name="description"
                              rows="8"
                              class="form-control bg-black text-white border-secondary p-3"
                              placeholder="Tulis deskripsi destination..."></textarea>

                    @error('description')

                        <small class="text-danger">

                            {{ $message }}

                        </small>

                    @enderror

                </div>

                {{-- IMAGE --}}
                <div class="mb-4">

                    <label class="form-label text-white">

                        Gambar Destination

                    </label>

                    <input type="file"
                           name="image"
                           class="form-control bg-black text-white border-secondary p-3">

                    @error('image')

                        <small class="text-danger">

                            {{ $message }}

                        </small>

                    @enderror

                </div>

                {{-- BUTTON --}}
                <button class="btn btn-danger px-4 py-2">

                    Simpan Destination

                </button>

            </form>

        </div>

    </div>

</div>

@endsection