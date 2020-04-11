@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Menu</div>

                    <div class="card-body">
                        <h1>Create Menu</h1>
                        <form action="{{ route('menu.store') }}" method="POST">
                            @csrf
                             <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nama:</strong>
                                        <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama">
                                    </div>
                                </div>
                        
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Isi:</strong>
                                        <textarea class="form-control" style="height:150px" id="isi" name="isi" placeholder="isi"></textarea>
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
