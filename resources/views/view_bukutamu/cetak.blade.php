@extends('view_bukutamu.layout')
  
@section('content')
<body onLoad="window.print()">
	<div class="card uper">
		<div class="card-header" id="not-print">
		Cetak Data
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
					<input type="text" class="form-control" name="nama" value="{{ $result->nama }}" disabled/>
				</div>
				
				<div class="form-group">
					<label>Alamat</label>
					<input type="text" class="form-control" name="alamat" value="{{ $result->alamat }}" disabled/>
				</div>
				
				<div class="form-group">
					<label>Pesan</label>
					<textarea class="form-control" name="pesan" disabled>{{ $result->pesan }}</textarea>
				</div>
				
				<button type="button" id="not-print" onClick="window.print();return false" class="btn btn-primary">Cetak Data</button>
				<button type="button" id="not-print" onClick="location.href ='{{ route('bukutamu.index')}}'" class="btn btn-danger">Kembali</button>
			</form>
		</div>
	</div>
</body>
@endsection