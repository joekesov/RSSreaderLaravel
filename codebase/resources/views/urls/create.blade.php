@extends('layouts.app')

@section('content')
<div class="container mt-2">
    @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
    @endif
    <form action="{{ route('urls.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputName" class="col-form-label">RSS Name:</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputName" class="form-control" aria-describedby="nameHelpInline">
            </div>
            @error('name')
            <div class="col-auto">
                <span id="nameHelpInline" class="form-text">
                  {{ $message }}
                </span>
            </div>
            @enderror
        </div>

        <div class="row g-3 align-items-center">
            <div class="col-auto">
                <label for="inputUrl" class="col-form-label">RSS URL:</label>
            </div>
            <div class="col-auto">
                <input type="text" id="inputUrl" class="form-control" aria-describedby="urlHelpInline">
            </div>
            @error('url')
            <div class="col-auto">
                <span id="urlHelpInline" class="form-text">
                  {{ $message }}
                </span>
            </div>
            @enderror
        </div>

{{--    ------------------------------------------------------}}

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mb-2">
                <h2>Add RSS url</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('urls.index') }}"> Back</a>
            </div>
        </div>
    </div>


        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>RSS Name:</strong>
                    <input type="text" name="url" class="form-control" placeholder="RSS url">
                    @error('url')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <button type="submit" class="btn btn-primary ml-3">Submit</button>
        </div>
    </form>
</div>
@endsection
