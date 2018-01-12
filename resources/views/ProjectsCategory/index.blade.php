@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Projects Category CRUD</h2>
		</div>
		<div class="pull-right">
			@permission('projectCategory-create')
			<a class="btn btn-success" href="{{ route('projectCategory.create') }}"> Create New Item</a>
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
	@foreach ($projectsCategory as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td>
			<a class="btn btn-info" href="{{ route('projectCategory.show',$item->projects_category_id) }}">Show</a>
			@permission('projectCategory-edit')
			<a class="btn btn-primary" href="{{ route('projectCategory.edit',$item->projects_category_id) }}">Edit</a>
			@endpermission
			@permission('projectCategory-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['projectCategory.destroy', $item->projects_category_id],'style'=>'display:inline']) !!}
			{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
			@endpermission
		</td>
	</tr>
	@endforeach
</table>
{!! $projectsCategory->render() !!}
@endsection
