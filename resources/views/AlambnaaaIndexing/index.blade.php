@extends('layouts.admin')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>Alambnaaa Indexing CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('alambnaaaIndexing-create')
	            <a class="btn btn-success" href="{{ route('alambnaaaIndexing.create') }}"> Create New Alambnaaa Indexing</a>
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
			<th> Year </th>
			<th> link</th>
			<th width="280px">Action</th>
		</tr>
	@foreach ($alambnaaaIndexing as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td>{{ $item->year_from.'-'.$item->year_to }}</td>
		<td><a href="{{url('/Uploads/alambnaaaIndexing/files/'. $item->file)}}" alt="" download >Download</a></td>
		<td>
			<a class="btn btn-info" href="{{ route('alambnaaaIndexing.show',$item->alambnaaa_indexing_id) }}">Show</a>
			@permission('alambnaaaIndexing-edit')
			<a class="btn btn-primary" href="{{ route('alambnaaaIndexing.edit',$item->alambnaaa_indexing_id) }}">Edit</a>
			@endpermission
			@permission('alambnaaaIndexing-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['alambnaaaIndexing.destroy', $item->alambnaaa_indexing_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $alambnaaaIndexing->render() !!}
@endsection
