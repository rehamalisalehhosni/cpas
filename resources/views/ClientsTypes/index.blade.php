@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Clients Types CRUD</h2>
		</div>
		<div class="pull-right">
			@permission('clientsTypes-create')
			<a class="btn btn-success" href="{{ route('clientsTypes.create') }}"> Create New type</a>
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
	@foreach ($clientsTypes as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('clientsTypes.show',$item->clients_types_id) }}">Show</a>
			@permission('clientsTypes-edit')
			<a class="btn btn-primary" href="{{ route('clientsTypes.edit',$item->clients_types_id) }}">Edit</a>
			@endpermission
			@permission('clientsTypes-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['clientsTypes.destroy', $item->clients_types_id],'style'=>'display:inline']) !!}
			{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
			@endpermission
		</td>
	</tr>
	@endforeach
</table>
{!! $clientsTypes->render() !!}
@endsection
