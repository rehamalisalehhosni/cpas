@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                        <h2> Show Alambnaaa Indexing</h2>
                </div>
                <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('alambnaaaIndexing.index') }}"> Back</a>
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
                        <strong>Year From:</strong>
                        {{ $item->year_from }}
                </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>Year To:</strong>
                        {{ $item->year_to }}
                </div>
        </div>
</div>
@endsection
