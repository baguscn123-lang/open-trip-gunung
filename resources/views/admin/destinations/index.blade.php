@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h1 class="text-danger fw-bold">
            Daftar Destination
        </h1>

        <a href="{{ route('destinations.create') }}"
           class="btn btn-danger">

            + Tambah Destination

        </a>

    </div>

    {{-- SUCCESS --}}
    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif

    <div class="card bg-dark border-0 shadow-lg">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-dark table-hover align-middle">

                    <thead>

                        <tr>

                            <th>No</th>
                            <th>Gambar</th>
                            <th>Title</th>
                            <th>Lokasi</th>
                            <th>Harga</th>
                            <th>Durasi</th>
                            <th>Difficulty</th>
                            <th>Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($destinations as $destination)

                            <tr>

                                <td>
                                    {{ $loop->iteration }}
                                </td>

                                <td>

                                    <img src="{{ asset('images/destinations/' . $destination->image) }}"
                                         width="120"
                                         class="rounded">

                                </td>

                                <td>
                                    {{ $destination->title }}
                                </td>

                                <td>
                                    {{ $destination->location }}
                                </td>

                                <td class="text-warning fw-bold">
                                    {{ $destination->price }}
                                </td>

                                <td>
                                    {{ $destination->duration }}
                                </td>

                                <td>
                                    {{ $destination->difficulty }}
                                </td>

                                <td>

                                    <div class="d-flex gap-2">

                                        <a href="{{ route('destinations.edit', $destination->id)}}"
                                           class="btn btn-warning btn-sm">

                                            Edit

                                        </a>

                                        <form action="{{ route('destinations.destroy', $destination->id) }}"
                                              method="POST">

                                            @csrf
                                            @method('DELETE')

                                            <button class="btn btn-danger btn-sm">

                                                Hapus

                                            </button>

                                        </form>

                                    </div>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="8"
                                    class="text-center text-secondary">

                                    Belum ada destination.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection