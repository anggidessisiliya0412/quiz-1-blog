@extends('layouts.app')

@section('content')

<div class="container">
<h3>Daftar Category</h3>

<table>
	<tr>
		<td>Nama</td>
		<td>Text</td>
	</tr> 
@foreach($rows as $row)
	<tr>
		<td>{{ $row->category_name }}</td>
		<td>{{ $row->category_text }}</td>
		<td><form action="{{ url('category/'.$row->category_text) }}" method="post">
			<input type="hidden" name="_method" value="DELETE">
			@csrf
			<button>Hapus</button>
		</form></td>
		<td><a href="{{ url('category/'.$row->category_id.'/edit') }}"><button>Edit</button></a></td>
	</tr>
@endforeach
</table>
<div><a href="{{ url('category/create') }}">Tambah Data</a></div>
</div>
@endsection 