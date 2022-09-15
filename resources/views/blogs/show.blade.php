@extends('layouts.master')
@section('css')

@section('title')
    show Blogs
@stop
@endsection

@section('page-header')
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <p><strong>Opps Something went wrong</strong></p>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<!-- row -->
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">{{ $blog->title }}</h3>
        <div class="card-toolbar">
            <button type="button" class="btn btn-sm btn-light">
                Action
            </button>
        </div>
    </div>
    <div class="card-body">
        {{ $blog->description }}
    </div>
    <div class="card-footer">
        {{$blog->created_at}}
    </div>
</div>



<!-- row closed -->
@endsection
@section('js')

@endsection
