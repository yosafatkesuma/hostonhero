@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <p>Selamat Datang di Halamanan Menu</p>
                        <h1>Arsip Menu</h1>
                        <p><a href="{{ route('menu.create') }}">Tambah Menu</a></p>
                        <table class="table table-striped">
                            <thead >
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Isi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menus as $menu)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $menu->nama }}</td>
                                    <td width="75%">{{ $menu->isi }}</td>
                                    <td>
                                        <form action="{{ route('menu.destroy',$menu->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{ route('menu.edit',$menu->id) }}">Edit</a>
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
