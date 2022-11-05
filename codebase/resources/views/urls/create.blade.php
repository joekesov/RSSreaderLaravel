@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add new Url') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form method="POST" action="/urls">
                                @csrf
                                <div class="mb-3">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-2">
                                            <label for="inputName" class="col-form-label">Name</label>
                                        </div>
                                        <div class="col-md-3">
                                            <input type="text" id="inputName" class="form-control" aria-describedby="nameHelpInline">
                                        </div>
                                        <div class="col-auto">
                                            <span id="nameHelpInline" class="form-text">
                                              Must be 8-20 characters long.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="row g-3 align-items-center">
                                        <div class="col-md-2">
                                            <label for="inputName" class="col-form-label">URL</label>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" id="inputName" class="form-control" aria-describedby="nameHelpInline">
                                        </div>
                                        <div class="col-auto">
                                            <span id="nameHelpInline" class="form-text">
                                              Must be 8-20 characters long.
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3 form-check">

                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
