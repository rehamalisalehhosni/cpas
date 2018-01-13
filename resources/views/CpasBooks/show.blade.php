@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                        <h2> Show Books</h2>
                </div>
                <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('cpasBooks.index') }}"> Back</a>
                </div>
        </div>
</div>
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>Title:</strong>
                        {{ $item->title }}
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>Author:</strong>
                        {{ $item->author }}
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>Price:</strong>
                        {{ $item->price }}
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>Pages no.:</strong>
                        {{ $item->no_pages }}
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>publish date:</strong>
                        {{ $item->publication_date }}
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>Subject:</strong>
                        {{ $item->subject }}
                </div>
        </div>
</div>
@endsection
