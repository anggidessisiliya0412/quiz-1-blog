@extends('layouts.app')

@section('content')

<div class="container">
<h3>Daftar Post</h3>

<table>
	<tr>
		<td>Date</td>
		<td>Slug</td>
		<td>Title</td>
		<td>Txt</td>
		<td>ID Category</td>
	</tr> 
@foreach($rows as $row)
	<tr>
		<td>{{ $row->post_date }}</td>
		<td>{{ $row->post_slug }}</td>
		<td>{{ $row->post_title }}</td>
		<td>{{ $row->post_text }}</td>
		<td>{{ $row->category_id }}</td>
		<td><form action="{{ url('post/'.$row->post_id) }}" method="post">
			<input type="hidden" name="_method" value="DELETE">
			@csrf
			<button>Hapus</button>
		</form></td>
		<td><a href="{{ url('post'.$row->post_id.'/edit') }}"><button>Edit</button></a></td>
	</tr>

@endforeach
</table>
<div><a href="{{ url('post/create') }}">Tambah Data</a></div>
</div>
@endsection 