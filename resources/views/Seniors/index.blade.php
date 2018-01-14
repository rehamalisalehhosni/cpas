@extends('layouts.admin')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Seniors CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('seniors-create')
	            <a class="btn btn-success" href="{{ route('seniors.create') }}"> Create New Seniors</a>
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
			<th>Image</th>
			<th>sort</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($seniors as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td><img src="{{url('/Uploads/seniors/'. $item->image)}}" alt="" class="img-thumbnail img_view" /></td>
		<td>{{ $item->sort }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('seniors.show',$item->seniors_id) }}">Show</a>
			@permission('seniors-edit')
			<a class="btn btn-primary" href="{{ route('seniors.edit',$item->seniors_id) }}">Edit</a>
			@endpermission
			@permission('seniors-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['seniors.destroy', $item->seniors_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $seniors->render() !!}
@endsection
