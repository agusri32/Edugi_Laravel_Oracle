@extends('view_bukutamu.layout')

@section('content')
	
	@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
	@endif
	
	<table class="table table-striped border">
    <thead>
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>Alamat</td>
          <td>Pesan</td>
        </tr>
    </thead>
    <tbody>
        @foreach($result as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->pesan}}</td>
        </tr>
        @endforeach
    </tbody>
	</table>
	
@endsection