<?php

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

        <form action="{{ route('admin.category.store') }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('POST')
            <div class="card">
                <div class="card-header">
                    <h4>Category Create</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="slug_uz">Slug</label>
                                <input type="text" name="slug_uz" id="slug_uz"
                                       class="form-control {{ empty($errors->first('slug_uz'))?:'is-invalid' }} "
                                       value="{{ old('slug_uz') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('slug_uz') }}
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="name_uz">Name</label>
                                <input type="text" name="name_uz" id="name_uz"
                                       class="form-control {{ empty($errors->first('name_uz'))?:'is-invalid' }} "
                                       value="{{ old('name_uz') }}">
                                <div class="invalid-feedback">
                                    {{ $errors->first('name_uz') }}
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </form>
        </div>
    </div>
@endsection
