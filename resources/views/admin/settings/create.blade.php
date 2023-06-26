<?php
use App\Helpers\StatusHelpers;
?>
@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        <form action="{{ route('admin.settings.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')
            <div class="card">
                <div class="card-header">
                    <h4> Create</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="name_uz">Name Uz</label>
                                <input type="text" name="name_uz" id="name_uz"
                                       class="form-control {{ empty($errors->first('name_uz'))?:'is-invalid' }} "
                                       value="{{ old('name_uz') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('name_uz') }}
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="name_ru">Name Ru</label>
                                <input type="text" name="name_ru" id="name_ru"
                                       class="form-control {{ empty($errors->first('name_ru'))?:'is-invalid' }} "
                                       value="{{ old('name_ru') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('name_ru') }}
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="name_en">Name En</label>
                                <input type="text" name="name_en" id="name_en"
                                       class="form-control {{ empty($errors->first('name_en'))?:'is-invalid' }} "
                                       value="{{ old('name_en') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('name_en') }}
                                </div>

                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="key">Key</label>
                                <input type="text" name="Key" id="key"
                                       class="form-control {{ empty($errors->first('key'))?:'is-invalid' }} "
                                       value="{{ old('key') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('key') }}
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="sort">Link</label>
                                <input type="text" name="link" id="link"
                                       class="form-control {{ empty($errors->first('link'))?:'is-invalid' }} "
                                       value="{{ old('link') }}" min="1">
                                <div class="invalid-feedback">
                                    {{ $errors->first('link') }}
                                </div>

                            </div>
                            <div class="form-group">
                                <label>Status <code></code></label>
                                <select name="status" class="form-select form-control form-control-sm  {{ empty($errors->first('status'))?:'is-invalid' }}">
                                    @foreach( StatusHelpers::getStatusList() as $key => $val)
                                        <option value="{{ $key }}" @if($key== @old('status')) selected @endif> {{ $val }} </option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback">
                                    {{ $errors->first('status') }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <div class="form-group">
                                <label>Photo</label>
                                <input type="file" name="photo"  class="form-control user-photo   {{ empty($errors->first('photo'))?:'is-invalid' }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('photo') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                    <span  style="position: relative">
                                         <i class="fa fa-pen" style="position: absolute; right: 3px; margin-top: 3px"></i>
                                         <img src="{{ asset('/admin/assets/img/user_logo.png') }}" alt=""
                                              width="150px"
                                              class="img-thumbnail user-photo">
                                    </span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary"> Saqlash </button>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>
@endsection
@push('script')
    <script>
        const imgInput = document.querySelector('input.user-photo')
        const imgEl = document.querySelector('img.user-photo')
        imgInput.addEventListener('change', () => {
            console.log(imgInput);
            if (imgInput.files && imgInput.files[0]) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    imgEl.src = e.target.result;
                }
                reader.readAsDataURL(imgInput.files[0]);
            }
        })
    </script>
@endpush
