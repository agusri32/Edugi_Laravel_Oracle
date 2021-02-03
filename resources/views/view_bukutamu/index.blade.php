@extends('view_bukutamu.layout')

@section('content')
	
	@if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br/>
	@endif
	
    <a href="{{ route('bukutamu.create')}}" class="btn btn-primary">Tambah</a></td><br><br>
	<table class="table table-striped border">
    <thead>
        <tr>
          <td>No</td>
          <td>Nama</td>
          <td>Alamat</td>
          <td>Pesan</td>
		  <td colspan="2" style="width:30%">Kelola Data</td>
        </tr>
    </thead>
    <tbody>
        @foreach($result as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->alamat}}</td>
            <td>{{$data->pesan}}</td>
			<td align='right'>
				<a href="{{ route('bukutamu.edit', $data->id)}}" class="btn btn-warning">Edit</a>
				<a href="{{ route('bukutamu.show', $data->id)}}" class="btn btn-primary">Cetak</a>
			</td>
			<td align='left'>
                <form action="{{ route('bukutamu.destroy', $data->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit" onClick="return confirm('Apakah Anda yakin akan menghapus data?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
	</table>
	
@endsection