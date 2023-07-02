<?php

?>
@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>User Update</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.user.update', ['user' => $user->id]) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" name="fullname"
                                           class="form-control {{ empty($errors->first('fullname'))?:'is-invalid' }} "
                                           value="{{ $user->fullname }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('fullname') }}
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label>Phone Number (US Format)</label>
                                    <div class="input-group ">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-phone"></i>
                                            </div>
                                        </div>
                                        <input type="text" class="form-control phone-number   {{ empty($errors->first('phone'))?:'is-invalid' }}"
                                               name="phone" value="{{ $user->phone }}">
                                    </div>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email"  class="form-control   {{ empty($errors->first('email'))?:'is-invalid' }}"
                                           value="{{ $user->email }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="name"  class="form-control   {{ empty($errors->first('name'))?:'is-invalid' }}"
                                           value="{{ $user->name }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>New Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password" name="new_password"
                                               disabled
                                               class="form-control pwstrength   {{ empty($errors->first('new_password'))?:'is-invalid' }}"
                                               data-indicator="pwindicator">

                                        <div class="input-group-prepend">
                                            <div class="input-group-text password-new-value" data-hidden="1">
                                                <i class="fas fa-eye-slash"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('new_password') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password" disabled
                                               class="form-control pwstrength   {{ empty($errors->first('confirm_password'))?:'is-invalid' }}"
                                               name="confirm_password"
                                               data-indicator="pwindicator">
                                    </div>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('confirm_password') }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">

                                <div class="form-group">
                                    <label>Photo</label>
                                    <input type="file" name="photo"  value="{{ $user->photo }}"
                                           class="form-control user-photo   {{ empty($errors->first('photo'))?:'is-invalid' }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('photo') }}
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <span  style="position: relative">
                                         <i class="fa fa-pen" style="position: absolute; right: -2px; margin-top: -2px; color:#b255ea"></i>
                                         <img src="{{ $user->photo?:asset('/admin/assets/img/user_logo.png') }}" alt=""
                                              width="150px"
                                              class="img-thumbnail user-photo">
                                    </span>

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"> Save </button>
                        </div>
                    </form>
                </div>
            </div>
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
