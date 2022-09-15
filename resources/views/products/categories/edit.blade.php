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
        <form method="POST" action="{{ route('category.update', ['category' => $category->id]) }}">
            @csrf
            @method('put')
            <div class="mb-10">
            </div>
            <div class="row">
                    @if ($category->active=='1')
                    <div class=" mb-10 form-check form-switch form-check-custom form-check-solid">
                        <input type="hidden" name="active" value="0">
                        <input class="form-check-input" type="checkbox" value="1" id="flexSwitchChecked" checked="checked" />
                        <label class="form-check-label" for="flexSwitchChecked">
                            Checked switch
                        </label>
                    </div>
                    @elseif ($category->active=='0')
                    <div class=" mb-10 form-check form-switch form-check-custom form-check-solid">
                        <input type="hidden" name="active" value="1">
                        <input class="form-check-input" type="checkbox" value="0" id="flexSwitchDefault"/>
                        <label class="form-check-label" for="flexSwitchDefault">
                          active
                        </label>
                    </div>
                    @endif

                <div class="mb-10 ">
                    <label for="name_en" class="required form-label">Name in English</label>
                    <input value="{{ $category->getTranslations('name', ['en'])['en'] }}" name="name[en]" type="text"
                        class="form-control form-control-solid" id="name_en" aria-describedby="nameHelp"
                        placeholder="Enter permission name in english">
                </div>
                <div class="mb-10 ">
                    <label for="name_ar" class="required form-label">Name in Arabic</label>
                    <input value="{{ $category->getTranslations('name', ['ar'])['ar'] }}" name="name[ar]" type="text"
                        class="form-control form-control-solid" id="name_ar" aria-describedby="nameHelp"
                        placeholder="Enter permission name in english">
                </div>
                <div class="mb-10 ">
                    <label for="descroption_en" class="required form-label">description in English</label>
                    <textarea data-kt-autosize="true" value="{{ $category->getTranslations('descroption', ['en'])['en'] }}"
                        name="descroption[en]" class="form-control" aria-label="With textarea">{{ $category->getTranslations('descroption', ['en'])['en'] }}</textarea>
                </div>
                <div class="mb-10 ">
                    <label for="descroption_ar" class="required form-label">description in Arabic</label>
                    <textarea data-kt-autosize="true" name="descroption[ar]" class="form-control" aria-label="With textarea"> {{ $category->getTranslations('descroption', ['ar'])['ar'] }}</textarea>
                </div>
                <div class="mb-10 ">
                    <label for="parent" class="required form-label">choose _parent Category</label>
                    <select name="parent_id" class="form-select form-select-transparent" data-control="select2"
                        data-placeholder="Select an option">
                        <option ></option>
                        @foreach ($categories as $categor)
                            <option value="{{ $categor->id }}"
                                {{ $categor->id == $category->parent?->id ? 'selected' : '' }}>{{ $categor->name }}</<
                                    /option>
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
