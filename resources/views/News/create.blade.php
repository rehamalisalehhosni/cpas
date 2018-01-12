@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Create New News</h2>
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
{!! Form::open(array('route' => 'news.store','method'=>'POST','novalidate' => 'novalidate','files' => true)) !!}
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
		<div class="form-group ">
			<strong>Description:</strong>
			{!! Form::textarea('text', null, array('placeholder' => 'Description','class' => 'form-control tinymce ','style'=>'height:100px')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Main Image :</strong>
			{!! Form::file('main_image', null, array('placeholder' => 'Main Image','class' => 'form-control')) !!}
		</div>
	</div>
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
