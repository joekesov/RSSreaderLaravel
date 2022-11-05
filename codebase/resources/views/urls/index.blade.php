@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('URLs') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class="d-grid gap-2 d-md-block">
                                <a class="btn btn-primary" href="{{ url('/urls/create') }}" role="button">Add new url</a>
                            </div>

                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>https://www.pascallandau.com/feed.xml </td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <a class="btn btn-primary" href="{{ url('/urls/1/edit') }}" role="button">Edit</a>
                                            <a class="btn btn-primary" href="#" role="button">Delete</a>

                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>https://www.pascallandau.com/feed.xml </td>
                                    <td>
                                        <div class="d-grid gap-2 d-md-block">
                                            <a class="btn btn-primary" href="#" role="button">Edit</a>
                                            <a class="btn btn-primary" href="#" role="button">Delete</a>
                                        </div>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
