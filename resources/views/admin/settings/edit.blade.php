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

            <form action="{{ route('admin.settings.update', $setting->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header">
                        <h4>Update</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="name_uz">Name Uz</label>
                                    <input type="text" name="name_uz" id="name_uz"
                                           class="form-control {{ empty($errors->first('name_uz'))?:'is-invalid' }} "
                                           value="{{ $setting->name_uz }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name_uz') }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="name_ru">Name Ru</label>
                                    <input type="text" name="name_ru" id="name_ru"
                                           class="form-control {{ empty($errors->first('name_ru'))?:'is-invalid' }} "
                                           value="{{ $setting->name_ru }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name_ru') }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="name_en">Name En</label>
                                    <input type="text" name="name_en" id="name_en"
                                           class="form-control {{ empty($errors->first('name_en'))?:'is-invalid' }} "
                                           value="{{ $setting->name_en }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name_en') }}
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="key">Key</label>
                                    <input type="text" name="key" id="key"
                                           class="form-control {{ empty($errors->first('key'))?:'is-invalid' }} "
                                           value="{{ $setting->key }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('key') }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" name="link" id="link"
                                           class="form-control {{ empty($errors->first('link'))?:'is-invalid' }} "
                                           value="{{ $setting->link }}" min="1">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('link') }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Status <code></code></label>
                                    <select name="status" class="form-select form-control form-control-sm  {{ empty($errors->first('status'))?:'is-invalid' }}">
                                        @foreach( StatusHelpers::getStatusList() as $key => $val)
                                            <option value="{{ $key }}" @if($key== $setting->status) selected @endif> {{ $val }} </option>
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
                                    <label>Attachment</label>
                                    <input type="file" name="attachment_id"  value="{{ $setting->attachment_id }}"
                                           class="form-control user-photo   {{ empty($errors->first('attachment_id'))?:'is-invalid' }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('attachment_id') }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <span  style="position: relative">
                                         <i class="fa fa-pen" style="position: absolute; right: -2px; margin-top: -2px; color:#b255ea"></i>
                                         <img src="{{ $setting->attachment->path??asset('/admin/assets/img/user_logo.png') }}" alt=""
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
            if (imgInput.files && imgInput.files[0]) {
                const reader = new FileReader();
                reader.onload = (e) => {
                    imgEl.src = e.target.result;
                }
                reader.readAsDataURL(imgInput.files[0]);
            }
        })

        let newPassword = document.querySelector('.password-new-value');
        newPassword.addEventListener('click', function(){
            if($(this).data('hidden') == '1'){
                $(this).data('hidden',0);
                $(this).data('hidden',0);
                $(this).parents('.input-group').find('input[type="password"]').prop('disabled',false)
                $(this).parents('form').find('input[name="confirm_password"]').prop('disabled',false)
            }else{
                $(this).data('hidden',1);
                $(this).parents('.input-group').find('input[type="password"]').prop('disabled',true)
                $(this).parents('form').find('input[name="confirm_password"]').prop('disabled',true)
            }
        })
    </script>
@endpush
