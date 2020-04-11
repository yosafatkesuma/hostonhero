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
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul</th>
                                    <th>Isi</th>
                                    <th>Gambar</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td >{{ ++$i }}</td>
                                    <td >{{ $blog->judul }}</td>
                                    <td width="50%">{{ $blog->isi }}</td>
                                    <td >
                                        <a href="{{ route('blog.show', $blog->id) }}">{{ $blog->gambar }}</a>
                                    </td>
                                    <td >
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
