@extends('layouts.admin')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Organisation Charts CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('organisationCharts-create')
	            <a class="btn btn-success" href="{{ route('organisationCharts.create') }}"> Create New Organisation Charts</a>
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
			<th>Main Image</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($organisationCharts as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td><img src="{{url('/Uploads/organisationcharts/'. $item->image)}}" alt="" class="img-thumbnail img_view" /></td>
		<td>
			<a class="btn btn-info" href="{{ route('organisationCharts.show',$item->organisation_charts_id) }}">Show</a>
			@permission('organisationCharts-edit')
			<a class="btn btn-primary" href="{{ route('organisationCharts.edit',$item->organisation_charts_id) }}">Edit</a>
			@endpermission
			@permission('organisationCharts-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['organisationCharts.destroy', $item->organisation_charts_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $organisationCharts->render() !!}
@endsection
