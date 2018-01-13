@extends('layouts.admin')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Books CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('cpasBooks-create')
	            <a class="btn btn-success" href="{{ route('cpasBooks.create') }}"> Create New Books</a>
	            @endpermission
	        </div>
	    </div>
	</div>
	@if ($message = Session::get('success'))
		<div class="alert alert-success">
			<p>{{ $message }}</p>
		</div>
	@endif
	<table class="table table-bordered">
		<tr>
			<th>No</th>
			<th>Title</th>
			<th>Author</th>
			<th>Main Image</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($cpasBooks as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td>{{ $item->author }}</td>
		<td><img src="{{url('/Uploads/cpasbooks/'. $item->image)}}" alt="" class="img-thumbnail img_view" /></td>
		<td>
			<a class="btn btn-info" href="{{ route('cpasBooks.show',$item->cpas_books_id) }}">Show</a>
			@permission('cpasBooks-edit')
			<a class="btn btn-primary" href="{{ route('cpasBooks.edit',$item->cpas_books_id) }}">Edit</a>
			@endpermission
			@permission('cpasBooks-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['cpasBooks.destroy', $item->cpas_books_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $cpasBooks->render() !!}
@endsection
