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

            <form action="{{ route('admin.page.update', ['page' => $page->id]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4>Sahifa o'zgartirish</h4>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="uzbekcha-tab2" data-bs-toggle="tab" href="#uzbekcha" role="tab" aria-controls="uzbekcha" aria-selected="true">O'zbekcha</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="ruscha-tab2" data-bs-toggle="tab" href="#ruscha" role="tab" aria-controls="ruscha" aria-selected="false">Russian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="inglishcha-tab2" data-bs-toggle="tab" href="#inglishcha" role="tab" aria-controls="inglishcha" aria-selected="false">English</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-bordered" id="myTab3Content">
                            <div class="tab-pane fade  active show" id="uzbekcha" role="tabpanel" aria-labelledby="uzbekcha-tab2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="slug_uz">Slug</label>
                                            <input type="text" name="slug_uz" id="slug_uz"
                                                   class="form-control {{ empty($errors->first('slug_uz'))?:'is-invalid' }} "
                                                   value="{{ $page->slug_uz }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('slug_uz') }}
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="title_uz">Title</label>
                                            <input type="text" name="title_uz" id="title_uz"
                                                   class="form-control {{ empty($errors->first('title_uz'))?:'is-invalid' }} "
                                                   value="{{ $page->title_uz }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('title_uz') }}
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="content_uz" >Content</label>
                                            <textarea name="content_uz" rows="3" id="content_uz"
                                                      class="form-control ckeditor  {{ empty($errors->first('content_uz'))?:'is-invalid' }}">{{ $page->content_uz }}</textarea>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('content_uz') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ruscha" role="tabpanel" aria-labelledby="ruscha-tab2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="slug_ru">Slug</label>
                                            <input type="text" name="slug_ru" id="slug_ru"
                                                   class="form-control {{ empty($errors->first('slug_ru'))?:'is-invalid' }} "
                                                   value="{{ $page->slug_ru }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('slug_ru') }}
                                            </div>

                                        </div>

                                        <div class="form-group">
                                            <label for="title_ru">Title</label>
                                            <input type="text" name="title_ru" id="title_ru"
                                                   class="form-control {{ empty($errors->first('title_ru'))?:'is-invalid' }} "
                                                   value="{{ $page->title_ru }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('title_ru') }}
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="content_ru" >Content</label>
                                            <textarea name="content_ru" rows="3" id="content_ru"
                                                      class="form-control ckeditor  {{ empty($errors->first('content_ru'))?:'is-invalid' }}">{{ $page->content_ru }}</textarea>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('content_ru') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="inglishcha" role="tabpanel" aria-labelledby="inglishcha-tab2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="slug_en">Slug</label>
                                            <input type="text" name="slug_en" id="slug_en"
                                                   class="form-control {{ empty($errors->first('slug_en'))?:'is-invalid' }} "
                                                   value="{{ $page->slug_en }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('slug_en') }}
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="title_uz">Title</label>
                                            <input type="text" name="title_en" id="title_en"
                                                   class="form-control {{ empty($errors->first('title_en'))?:'is-invalid' }} "
                                                   value="{{ $page->title_en }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('title_en') }}
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="content_en" >Content</label>
                                            <textarea name="content_en" rows="3" id="content_en"
                                                      class="form-control ckeditor  {{ empty($errors->first('content_en'))?:'is-invalid' }}">{{ $page->content_en }}</textarea>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('content_en') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col">
                                <div class="form-group">
                                    <label for="slug_uz">Key</label>
                                    <input type="text" name="key" id="key"
                                           class="form-control {{ empty($errors->first('key'))?:'is-invalid' }} "
                                           value="{{ $page->key }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('key') }}
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-select form-control form-control-sm  {{ empty($errors->first('status'))?:'is-invalid' }}">
                                        @foreach( StatusHelpers::getStatusList() as $key => $val)
                                            <option value="{{ $key }}" @if($key== $page->status) selected @endif> {{ $val }} </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('status') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"> Save </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@push('script_one')
    <script src="{{ asset('admin/standard-ckeditor/ckeditor.js') }}"></script>
@endpush
@push('script')
    <script>
        // $('.ckeditor').ckeditor();
        CKEDITOR.replace('content_uz', {
            filebrowserUploadUrl: "{{route('admin.page.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('content_ru', {
            filebrowserUploadUrl: "{{route('admin.page.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('content_en', {
            filebrowserUploadUrl: "{{route('admin.page.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
    </script>
@endpush
