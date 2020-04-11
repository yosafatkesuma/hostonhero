@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Blog</div>

                    <div class="card-body">
                        <h1>Edit Blog</h1>
                        <form action="{{ route('blog.update',$blog->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama:</strong>
                                        <input type="text" name="judul" value="{{ $blog->judul }}" class="form-control" placeholder="Judul">
                                    </div>
                                </div>
                    
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Isi:</strong>
                                        <textarea class="form-control" style="height:150px" name="isi" placeholder="Isi">{{ $blog->isi }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 text-right">Pilih Gambar</label>
                                    <div class="col-md-8">
                                        <input type="file" name="gambar" />
                                        <img src="{{ asset('/images/'.$blog->gambar) }}" class="img-thumbnail" width="100">
                                        <input type="hidden" name="hidden_image" value="{{ $blog->gambar }}" />
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
