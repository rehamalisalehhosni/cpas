@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Create New Projects</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('projects.index') }}"> Back</a>
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
{!! Form::open(array('route' => 'projects.store','method'=>'POST','novalidate' => 'novalidate','files' => true)) !!}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Title:</strong>
			{!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group ">
			<strong>Description:</strong>
			{!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control tinymce ','style'=>'height:100px')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group ">
			<strong>latitude:</strong>
			{!! Form::text('lat', null, array('placeholder' => 'Latitude','class' => 'form-control  ')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group ">
			<strong>longitude:</strong>
			{!! Form::text('long', null, array('placeholder' => 'longitude','class' => 'form-control  ')) !!}
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
			<strong> Projects Category :</strong>
			{!! Form::select('projectsCategory', $projectsCategory, null,['class' => 'form-control']) !!}
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
