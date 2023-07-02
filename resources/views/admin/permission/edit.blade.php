{{--@extends('layouts.admin')--}}
{{--@section('content')--}}
    <!-- Main Content -->
    <div class="card">
        <div class="card-body">
        <form action="{{ route('admin.permission.update',['permission'=> $permission->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label>Имя</label>
                    <input type="text" class="form-control" name="name" value="{{ $permission->name }}">
                </div>
                <div class="form-group">
                    <label>Описание</label>
                    <input type="text"  class="form-control" name="description" value="{{$permission->description }}">
                </div>
            </div>
            <div class="card-footer text-end">
                <button class="btn btn-primary mr-1" type="submit">@lang('Save')</button>
            </div>
        </form>
        </div>
    </div>
{{--@endsection--}}
