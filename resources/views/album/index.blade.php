@extends('layouts.app')

@section('content')

<div class="container">
<h3>Daftar Album</h3>

<table>
	<tr>
		<td>Nama</td>
		<td>Text</td>
		<td>Photo ID</td>
		<td>Hapus</td>
		<td>Edit</td>
	</tr> 
@foreach($rows as $row)
	<tr>
		<td>{{ $row->album_name }}</td>
		<td>{{ $row->album_text }}</td>
		<td>{{ $row->photo_id }}</td>
		<td><form action="{{ url('album/'.$row->album_id) }}" method="post">
			<input type="hidden" name="_method" value="DELETE">
			@csrf
			<button>Hapus</button>
		</form></td>
		<td><a href="{{ url('album/'.$row->album_id.'/edit') }}"><button>Edit</button></a></td>
	</tr>
@endforeach
</table>
<div><a href="{{ url('album/create') }}">Tambah Data</a></div>
</div>
@endsection 