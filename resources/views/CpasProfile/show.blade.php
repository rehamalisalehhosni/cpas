@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                        <h2> Show Cpas Profile</h2>
                </div>
                <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('cpasProfile.index') }}"> Back</a>
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
                        <strong>Sort:</strong>
                        {{ $item->sort }}
                </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                        <strong>description:</strong>
                        {{ $item->description }}
                </div>
        </div>
</div>
@endsection
