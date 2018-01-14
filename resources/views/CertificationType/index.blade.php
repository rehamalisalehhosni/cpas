@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Certification Type CRUD</h2>
		</div>
		<div class="pull-right">
			@permission('certificationType-create')
			<a class="btn btn-success" href="{{ route('certificationType.create') }}"> Create New type</a>
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
		<th width="280px">Action</th>
	</tr>
	@foreach ($certificationType as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('certificationType.show',$item->certification_type_id) }}">Show</a>
			@permission('certificationType-edit')
			<a class="btn btn-primary" href="{{ route('certificationType.edit',$item->certification_type_id) }}">Edit</a>
			@endpermission
			@permission('certificationType-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['certificationType.destroy', $item->certification_type_id],'style'=>'display:inline']) !!}
			{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
			@endpermission
		</td>
	</tr>
	@endforeach
</table>
{!! $certificationType->render() !!}
@endsection
