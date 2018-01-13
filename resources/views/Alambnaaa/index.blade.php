@extends('layouts.admin')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Alambnaaa CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('alambnaaa-create')
	            <a class="btn btn-success" href="{{ route('alambnaaa.create') }}"> Create New Alambnaaa</a>
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
			<th> Image</th>
			<th> link</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($alambnaaa as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td><img src="{{url('/Uploads/alambnaaa/images/'. $item->image)}}" alt="" class="img-thumbnail img_view" /></td>
		<td><a href="{{url('/Uploads/alambnaaa/files/'. $item->file)}}" alt="" download >Download</a></td>
		<td>
			<a class="btn btn-info" href="{{ route('alambnaaa.show',$item->alambnaaa_id) }}">Show</a>
			@permission('alambnaaa-edit')
			<a class="btn btn-primary" href="{{ route('alambnaaa.edit',$item->alambnaaa_id) }}">Edit</a>
			@endpermission
			@permission('alambnaaa-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['alambnaaa.destroy', $item->alambnaaa_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $alambnaaa->render() !!}
@endsection
