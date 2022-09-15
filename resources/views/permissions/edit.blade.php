@extends('layouts.master')
@section('css')

@section('title')
    empty
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
        <h3 class="card-title">Permissions</h3>

    </div>
    <div class="card-body py-3">
        <form method="POST" action="{{ route('permissions.update',['permission'=>$permission->id]) }}">
            @csrf
            @method('PUT')
            <div class="mb-10">
            </div>
            <div class="row">
                <div class="mb-10 ">
                    <label for="name_en" class="required form-label">Name in English</label>
                    <input name="name" value="{{$permission->name}}" type="text" class="form-control form-control-solid" id="name_en"
                        aria-describedby="nameHelp" placeholder="Enter permission name in english">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">update</button>
        </form>
    </div>
</div>


<!-- row closed -->
@endsection
@section('js')

@endsection
