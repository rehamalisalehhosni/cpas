@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Certifications CRUD</h2>
		</div>
		<div class="pull-right">
			@permission('certifications-create')
			<a class="btn btn-success" href="{{ route('certifications.create') }}"> Create New certification</a>
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
		<th>image</th>
		<th>Type</th>
		<th width="280px">Action</th>
	</tr>
	@foreach ($certifications as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td><img src="{{url('/Uploads/certifications/'. $item->image)}}" alt="" class="img-thumbnail img_view" /></td>
		<td>{{ $item->type->title }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('certifications.show',$item->certifications_id) }}">Show</a>
			@permission('certifications-edit')
			<a class="btn btn-primary" href="{{ route('certifications.edit',$item->certifications_id) }}">Edit</a>
			@endpermission
			@permission('certifications-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['certifications.destroy', $item->certifications_id],'style'=>'display:inline']) !!}
			{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
			@endpermission
		</td>
	</tr>
	@endforeach
</table>
{!! $certifications->render() !!}
@endsection
