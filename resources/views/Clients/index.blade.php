@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Clients CRUD</h2>
		</div>
		<div class="pull-right">
			@permission('clients-create')
			<a class="btn btn-success" href="{{ route('clients.create') }}"> Create New Clients</a>
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
		<th>Logo</th>
		<th>Type</th>
		<th width="280px">Action</th>
	</tr>
	@foreach ($clients as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td><img src="{{url('/Uploads/clients/'. $item->logo)}}" alt="" class="img-thumbnail img_view" /></td>
		<td>{{ $item->types->title }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('clients.show',$item->clients_id) }}">Show</a>
			@permission('clients-edit')
			<a class="btn btn-primary" href="{{ route('clients.edit',$item->clients_id) }}">Edit</a>
			@endpermission
			@permission('clients-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['clients.destroy', $item->clients_id],'style'=>'display:inline']) !!}
			{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
			@endpermission
		</td>
	</tr>
	@endforeach
</table>
{!! $clients->render() !!}
@endsection
