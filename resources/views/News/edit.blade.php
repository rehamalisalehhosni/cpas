@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Edit New News</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('news.index') }}"> Back</a>
		</div>
	</div>
</div>
@if (count($errors) > 0)
<div class="alert alert-danger">
	<strong>Whoops!</strong> There were some problems with your input.<br><br>
	<ul>
		@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
{!! Form::model($item, ['method' => 'PATCH','novalidate' => 'novalidate','files' => true,'route' => ['news.update', $item->news_id]]) !!}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Publish Date:</strong>
			{!! Form::date('publish_date', null, array('placeholder' => 'Publish Date','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Title:</strong>
			{!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Description:</strong>
			{!! Form::textarea('text', null, array('placeholder' => 'Description','class' => 'form-control tinymce','style'=>'height:100px')) !!}
		</div>
	</div>
	@if ($item->main_image)
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<img src="{{url('/Uploads/news/'. $item->main_image)}}" alt="" class="img-thumbnail img_view" />
		</div>
	</div>
	@endif
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Main Image :</strong>
			{!! Form::file('main_image', null, array('placeholder' => 'Main Image','class' => 'form-control')) !!}
		</div>
	</div>
	@if ($item->newsImage)
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			@foreach($item->newsImage as  $image)
			<div class="imgs" id="{{$image->news_images_id}}" >
				<i class="fa fa-trash-o" aria-hidden="true"></i>
				<img src="{{url('/Uploads/news_images/'. $image->image)}}" alt="" class="img-thumbnail img_view" />
			</div>
			@endforeach
		</div>
	</div>
	@endif

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong> Images :</strong>
			{!! Form::file('images[]',  ['multiple' => 'multiple'], array('placeholder' => 'images','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
{!! Form::close() !!}
@endsection
