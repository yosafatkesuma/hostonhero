@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Blog</div>

                    <div class="card-body">
                        <h1>Create Blog</h1>
                        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama:</strong>
                                        <input type="text" id="judul" name="judul" class="form-control" placeholder="Judul">
                                    </div>
                                </div>
                        
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Isi:</strong>
                                        <textarea class="form-control" style="height:150px" id="isi" name="isi" placeholder="Isi"></textarea>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Pilih Gambar:</strong>
                                        <div class="col-md-8">
                                            <input class="form-control" type="file" id="gambar" name="gambar" />
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
