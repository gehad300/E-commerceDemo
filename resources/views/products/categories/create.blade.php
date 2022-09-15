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
        <h3 class="card-title">Category</h3>

    </div>
    <div class="card-body py-3">
        <form method="POST" action="{{ route('category.store') }}">
            @csrf
            <div class="mb-10">
            </div>
            <div class="row">
                <div class="mb-10 form-check form-switch form-check-custom form-check-solid">
                    <input type="hidden" name="active" value="0">
                    <input class="form-check-input" value="1" name="active" type="checkbox"
                        id="flexSwitchDefault" />
                    <label class="form-check-label" for="flexSwitchDefault">
                        Active
                    </label>
                </div>
                <div class="mb-10 ">
                    <label for="name_en" class="required form-label">Name in English</label>
                    <input name="name[en]" type="text" class="form-control form-control-solid" id="name_en"
                        aria-describedby="nameHelp" placeholder="Enter permission name in english">
                </div>
                <div class="mb-10 ">
                    <label for="name_ar" class="required form-label">Name in Arabic</label>
                    <input name="name[ar]" type="text" class="form-control form-control-solid" id="name_ar"
                        aria-describedby="nameHelp" placeholder="Enter permission name in english">
                </div>
                <div class="mb-10 ">
                    <label for="descroption_en" class="required form-label">description in English</label>
                    <textarea data-kt-autosize="true" name="descroption[en]" class="form-control" aria-label="With textarea"> {{ old("descroption['en']") }}</textarea>
                </div>
                <div class="mb-10 ">
                    <label for="descroption_ar" class="required form-label">description in Arabic</label>
                    <textarea data-kt-autosize="true" name="descroption[ar]" class="form-control" aria-label="With textarea"> {{ old("descroption['ar']") }}</textarea>
                </div>
                <div class="mb-10 ">
                    <label for="parent" class="required form-label">choose _parent Category</label>
                    <select name="parent_id" class="form-select form-select-transparent" data-control="select2"
                        data-placeholder="Select an option">
                        <option></option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


<!-- row closed -->
@endsection
@section('js')

@endsection
