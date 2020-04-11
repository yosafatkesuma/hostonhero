@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <p>Selamat Datang di Halamanan Blog</p>
                        <h1>Arsip Blog</h1>
                        <p><a href="{{ route('blog.create') }}">Tambah Blog</a></p>
                        <table class="table table-striped">
                            <thead >
                                <tr>
                                    <th class="col-md-1">No</th>
                                    <th class="col-md-1">Judul</th>
                                    <th class="col-md-6">Isi</th>
                                    <th class="col-md-2">Gambar</th>
                                    <th class="col-md-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td class="col-md-1">
                                        {{ ++$i }}
                                    </td>
                                    <td class="col-md-1">{{ $blog->judul }}</td>
                                    <td class="col-md-6">{{ $blog->isi }}</td>
                                    <td class="col-md-2">
                                        <a href="{{ route('blog.shows', $blog->id) }}">{{ $blog->gambar }}</a>
                                    </td>
                                    <td class="col-md-2">
                                        <form action="{{ route('blog.destroy',$blog->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{ route('blog.edit',$blog->id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
