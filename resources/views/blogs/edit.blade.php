@extends('layouts.master')
@section('css')

@section('title')
    Blog
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
        <h3 class="card-title">Blog</h3>

    </div>
    <div class="card-body py-3">
        <form method="POST" action="{{ route('blogs.update', ['blog' => $blog->id]) }}">
            @csrf
            @method('PUT')
            <div class="mb-10">
            </div>
            <div class="row">

                <div class="mb-10 ">
                    <label for="title" class="required form-label">Title</label>
                    <input type="text" name="title" value="{{ $blog->title }}" class="form-control" />

                </div>

                <div class="mb-10 ">
                    <label for="description" class="required form-label">Description</label>
                    <textarea data-kt-autosize="true" name="description" class="form-control"
                        aria-label="With textarea">{{ $blog->description }}</textarea>

                </div>
            </div>
            <button type="submit" class="btn btn-primary">update Blog</button>
        </form>
    </div>
</div>


<!-- row closed -->
@endsection
@section('js')

@endsection
