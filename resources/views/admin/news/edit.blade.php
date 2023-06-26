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

            <form action="{{ route('admin.news.update', ['news' => $news->id]) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4> Yangilash</h4>
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
                                            <label for="title_uz">Title</label>
                                            <input type="text" name="title_uz" id="title_uz"
                                                   class="form-control {{ empty($errors->first('title_uz'))?:'is-invalid' }} "
                                                   value="{{ $news->title_uz }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('title_uz') }}
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <label for="excerpt_uz" >Excerpt</label>
                                            <textarea name="excerpt_uz" rows="3" id="excerpt_uz"
                                                      class="form-control  {{ empty($errors->first('excerpt_uz'))?:'is-invalid' }}">{{ $news->excerpt_uz }}</textarea>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('excerpt_uz') }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="content_uz" >Content</label>
                                            <textarea name="content_uz" rows="3" id="content_uz"
                                                      class="form-control ckeditor  {{ empty($errors->first('content_uz'))?:'is-invalid' }}">{{ $news->content_uz }}</textarea>
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
                                            <label for="title_ru">Title</label>
                                            <input type="text" name="title_ru" id="title_ru"
                                                   class="form-control {{ empty($errors->first('title_ru'))?:'is-invalid' }} "
                                                   value="{{ $news->title_ru }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('title_ru') }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="excerpt_ru" >Excerpt</label>
                                            <textarea name="excerpt_ru" rows="3" id="excerpt_ru"
                                                      class="form-control  {{ empty($errors->first('excerpt_ru'))?:'is-invalid' }}">{{ $news->excerpt_ru }}</textarea>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('excerpt_ru') }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="content_ru" >Content</label>
                                            <textarea name="content_ru" rows="3" id="content_ru"
                                                      class="form-control ckeditor  {{ empty($errors->first('content_ru'))?:'is-invalid' }}">{{ $news->content_ru }}</textarea>
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
                                            <label for="title_uz">Title</label>
                                            <input type="text" name="title_en" id="title_en"
                                                   class="form-control {{ empty($errors->first('title_en'))?:'is-invalid' }} "
                                                   value="{{ $news->title_en }}">
                                            <div class="invalid-feedback">
                                                {{ $errors->first('title_en') }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="excerpt_en" >Excerpt</label>
                                            <textarea name="excerpt_en" rows="3" id="excerpt_en"
                                                      class="form-control  {{ empty($errors->first('excerpt_en'))?:'is-invalid' }}">{{ $news->excerpt_en }}</textarea>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('excerpt_en') }}
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="content_en" >Content</label>
                                            <textarea name="content_en" rows="3" id="content_en"
                                                      class="form-control ckeditor  {{ empty($errors->first('content_en'))?:'is-invalid' }}">{{ $news->content_en }}</textarea>
                                            <div class="invalid-feedback">
                                                {{ $errors->first('content_en') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Status</label>
                                    <select name="status" class="form-select form-control form-control-sm  {{ empty($errors->first('status'))?:'is-invalid' }}">
                                        @foreach( StatusHelpers::getStatusList() as $key => $val)
                                            <option value="{{ $key }}" @if($key== $news->status) selected @endif> {{ $val }} </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('status') }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Sana</label>
                                    <div class="input-group ">
                                        <input type="datetime-local" class="form-control  {{ empty($errors->first('date'))?:'is-invalid' }}"
                                               name="date" value="{{ $news->date }}">
                                    </div>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('date') }}
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-12">

                                <div class="row">
                                    <div class="form-group col-9">
                                        <label>Photo</label>
                                        <input type="hidden" value="{{ $news->attachment_id }}" name="attachment_id_old">
                                        <input type="file" name="attachment_id"  class="form-control user-photo   {{ empty($errors->first('attachment_id'))?:'is-invalid' }}">
                                        <div class="">
                                            file: png, jpg, jpeg
                                        </div>
                                        <div class="invalid-feedback">
                                            {{ $errors->first('attachment_id') }}
                                        </div>
                                    </div>
                                    <div class="form-group col-3">
                                            <span  style="position: relative">
                                                 <i class="fa fa-pen" style="position: absolute; right: 3px; margin-top: 3px"></i>
                                                  <img src="{{ !empty($news->attachment)?$news->attachment->path:asset('/admin/assets/img/author_logo.png') }}" alt=""
                                                       width="150px"
                                                       class="img-thumbnail user-photo">
                                            </span>

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
            filebrowserUploadUrl: "{{route('admin.news.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('content_ru', {
            filebrowserUploadUrl: "{{route('admin.news.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });
        CKEDITOR.replace('content_en', {
            filebrowserUploadUrl: "{{route('admin.news.image-upload', ['_token' => csrf_token() ])}}",
            filebrowserUploadMethod: 'form'
        });

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
