@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        <p>Selamat Datang di Halamanan Contact</p>
                        <h1>Arsip Contact</h1>
                        <table class="table table-striped">
                            <thead >
                                <tr>
                                    <th class="col-md-1">No</th>
                                    <th class="col-md-2">Nama</th>
                                    <th class="col-md-2">Email</th>
                                    <th class="col-md-2">Subjek</th>
                                    <th class="col-md-3">Pesan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $contact)
                                <tr>
                                    <td class="col-md-1">
                                        {{ ++$i }}
                                    </td>
                                    <td class="col-md-2">{{ $contact->nama }}</td>
                                    <td class="col-md-2">{{ $contact->email }}</td>
                                    <td class="col-md-2">{{ $contact->judul }}</td>
                                    <td class="col-md-3">{{ $contact->pesan }}</td>
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
