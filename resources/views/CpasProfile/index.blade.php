@extends('layouts.admin')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Cpas Profile CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('cpasProfile-create')
	            <a class="btn btn-success" href="{{ route('cpasProfile.create') }}"> Create New Cpas Profile</a>
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
			<th>sort</th>
			<th>Main Image</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($cpasProfile as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td>{{ $item->sort }}</td>
		<td><img src="{{url('/Uploads/cpasprofile/'. $item->image)}}" alt="" class="img-thumbnail img_view" /></td>
		<td>
			<a class="btn btn-info" href="{{ route('cpasProfile.show',$item->cpas_profile_id) }}">Show</a>
			@permission('cpasProfile-edit')
			<a class="btn btn-primary" href="{{ route('cpasProfile.edit',$item->cpas_profile_id) }}">Edit</a>
			@endpermission
			@permission('cpasProfile-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['cpasProfile.destroy', $item->cpas_profile_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $cpasProfile->render() !!}
@endsection
