@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        <img src="{{asset('img/music-background.png')}}" width="100%">
            <div class="card">
                <div class="card-header">
                	Ubah Artist
                	<a href="{{route('artist.index')}}" class="btn btn-sm btn-primary float-right">Kembali</a>
                </div>

                <div class="card-body">

                	@if(session('sukses'))
                	<div class="alert alert-warning alert-dismissible fade show" role="alert">
					  	{{session('sukses')}}
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>
					@endif

                	<form action="{{route('artist.update', $artist->id)}}" method="POST">
                		@csrf
                		@method('PUT')
					  <div class="form-group">
					    <label for="artist_name">Nama Artist</label>
					    <input type="text" class="form-control" id="artist_name" name="artist_name" value="{{$artist->artist_name}}">
					  </div>
					  <button type="submit" class="btn btn-success">Simpan</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
