@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example Tutorial</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('urls.create') }}"> Create RSS Source</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>S.No</th>
            <th>RSS Name</th>
            <th>RSS Url</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($rssSources as $rssSource)
            <tr>
                <td>{{ $rssSource->id }}</td>
                <td>{{ $rssSource->name }}</td>
                <td>{{ $rssSource->url }}</td>

                <td>
                    <form action="{{ route('urls.destroy',$rssSource->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('urls.edit',$rssSource->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $rssSources->links() !!}
</div>

@endsection




{{--@section('content')--}}
{{--    <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('URLs') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}

{{--                            <div class="d-grid gap-2 d-md-block">--}}
{{--                                <a class="btn btn-primary" href="{{ url('/urls/create') }}" role="button">Add new url</a>--}}
{{--                            </div>--}}

{{--                            <table class="table">--}}
{{--                                <thead>--}}
{{--                                <tr>--}}
{{--                                    <th scope="col">#</th>--}}
{{--                                    <th scope="col">Name</th>--}}
{{--                                    <th scope="col">Url</th>--}}
{{--                                    <th scope="col">Actions</th>--}}
{{--                                </tr>--}}
{{--                                </thead>--}}
{{--                                <tbody>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">1</th>--}}
{{--                                    <td>Mark</td>--}}
{{--                                    <td>https://www.pascallandau.com/feed.xml </td>--}}
{{--                                    <td>--}}
{{--                                        <div class="d-grid gap-2 d-md-block">--}}
{{--                                            <a class="btn btn-primary" href="{{ url('/urls/1/edit') }}" role="button">Edit</a>--}}
{{--                                            <a class="btn btn-primary" href="#" role="button">Delete</a>--}}

{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row">2</th>--}}
{{--                                    <td>Jacob</td>--}}
{{--                                    <td>https://www.pascallandau.com/feed.xml </td>--}}
{{--                                    <td>--}}
{{--                                        <div class="d-grid gap-2 d-md-block">--}}
{{--                                            <a class="btn btn-primary" href="#" role="button">Edit</a>--}}
{{--                                            <a class="btn btn-primary" href="#" role="button">Delete</a>--}}
{{--                                        </div>--}}
{{--                                    </td>--}}
{{--                                </tr>--}}

{{--                                </tbody>--}}
{{--                            </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--@endsection--}}
