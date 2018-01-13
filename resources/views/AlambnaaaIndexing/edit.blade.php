@extends('layouts.admin')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Edit New Alambnaaa Indexing</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('alambnaaaIndexing.index') }}"> Back</a>
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
{!! Form::model($item, ['method' => 'PATCH','novalidate' => 'novalidate','files' => true,'route' => ['alambnaaaIndexing.update', $item->alambnaaa_indexing_id]]) !!}
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Title:</strong>
			{!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Year From:</strong>
			{!! Form::text('year_from', null, array('placeholder' => 'Year From','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Year To:</strong>
			{!! Form::text('year_to', null, array('placeholder' => 'Year To','class' => 'form-control')) !!}
		</div>
	</div>
	@if ($item->file)
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<a href="{{url('/Uploads/alambnaaaindexing/files/'. $item->file)}}" download >Download</a>
		</div>
	</div>
	@endif
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>  File  :</strong>
			{!! Form::file('file',null, array('placeholder' => ' File','class' => 'form-control')) !!}
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Submit</button>
	</div>
</div>
{!! Form::close() !!}
@endsection
