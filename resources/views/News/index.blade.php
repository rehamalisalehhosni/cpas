@extends('layouts.admin')

@section('content')
	<div class="row">
	    <div class="col-lg-12 margin-tb">
	        <div class="pull-left">
	            <h2>News CRUD</h2>
	        </div>
	        <div class="pull-right">
	        	@permission('news-create')
	            <a class="btn btn-success" href="{{ route('news.create') }}"> Create New News</a>
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
	@foreach ($news as $key => $item)
	<tr>
		<td>{{ ++$i }}</td>
		<td>{{ $item->title }}</td>
		<td><img src="{{url('/Uploads/news/'. $item->main_image)}}" alt="" class="img-thumbnail img_view" /></td>
		<td>
			<a class="btn btn-info" href="{{ route('news.show',$item->news_id) }}">Show</a>
			@permission('news-edit')
			<a class="btn btn-primary" href="{{ route('news.edit',$item->news_id) }}">Edit</a>
			@endpermission
			@permission('news-delete')
			{!! Form::open(['method' => 'DELETE','route' => ['news.destroy', $item->news_id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        	{!! Form::close() !!}
        	@endpermission
		</td>
	</tr>
	@endforeach
	</table>
	{!! $news->render() !!}
@endsection
