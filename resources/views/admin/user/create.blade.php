<?php
use App\Helpers\StatusHelpers;
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
                    <h4>User Create</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.user.store') }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="fullname">Full Name</label>
                                    <input type="text" name="fullname" id="fullname"
                                           class="form-control {{ empty($errors->first('fullname'))?:'is-invalid' }} "
                                    value="{{ old('fullname') }}">
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
                                              name="phone" value="{{ old('phone') }}">
                                    </div>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('phone') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email"  class="form-control   {{ empty($errors->first('email'))?:'is-invalid' }}"
                                           value="{{ old('email') }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Status <code></code></label>
                                    <select name="status" class="form-select form-control form-control-sm  {{ empty($errors->first('email'))?:'is-invalid' }}">
                                        @foreach( StatusHelpers::getStatusList() as $key => $val)
                                            <option value="{{ $key }}" @if($key== @old('status')) selected @endif> {{ $val }} </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('status') }}
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="name"  class="form-control   {{ empty($errors->first('name'))?:'is-invalid' }}"
                                           value="{{ old('name') }}">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('name') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fas fa-lock"></i>
                                            </div>
                                        </div>
                                        <input type="password" name="password"
                                               class="form-control pwstrength   {{ empty($errors->first('password'))?:'is-invalid' }}"
                                               data-indicator="pwindicator">
                                    </div>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
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
                                        <input type="password" class="form-control pwstrength   {{ empty($errors->first('confirm_password'))?:'is-invalid' }}"
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
