@extends('view_bukutamu.layout')

@section('content')
<div class="card uper">
	<div class="card-header">
    Form Tambah Data
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
		
		<form method="post" action="{{ route('bukutamu.store') }}">
        @csrf
			<div class="form-group"> 
				<label>Nama</label>
				<input type="text" class="form-control" name="nama"/>
			</div>
			
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" class="form-control" name="alamat"/>
			</div>
			
			<div class="form-group">
				<label>Pesan</label>
				<textarea class="form-control" name="pesan"></textarea>
			</div>
			
			<button type="submit" class="btn btn-primary">Tambah Data</button>
			<button type="button" onClick="location.href ='{{ route('bukutamu.index')}}'" class="btn btn-danger">Kembali</button>
		</form>
	</div>
</div>
@endsection