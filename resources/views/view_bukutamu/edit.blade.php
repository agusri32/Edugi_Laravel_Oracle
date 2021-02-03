@extends('view_bukutamu.layout')
   
@section('content')
<div class="card uper">
	<div class="card-header">
    Form Edit Data
	</div>
	<div class="card-body">
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				  <li>{{ $error }}</li>
				@endforeach
			</ul>
		</div><br/>
		@endif
	
		<form action="{{ route('bukutamu.update', $result->id) }}" method="POST">
        @csrf
        @method('PUT')
			<div class="form-group"> 
				<label>Nama</label>
				<input type="text" class="form-control" name="nama" value="{{ $result->nama }}"/>
			</div>
			
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" class="form-control" name="alamat" value="{{ $result->alamat }}"/>
			</div>
			
			<div class="form-group">
				<label>Pesan</label>
				<textarea class="form-control" name="pesan">{{ $result->pesan }}</textarea>
			</div>
			
			<button type="submit" class="btn btn-primary">Simpan Data</button>
			<button type="button" onClick="location.href ='{{ route('bukutamu.index')}}'" class="btn btn-danger">Kembali</button>
		</form>
	</div>
</div>
@endsection