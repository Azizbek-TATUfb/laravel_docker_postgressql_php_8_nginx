{{--@extends('layouts.admin')--}}
{{--@section('content')--}}
    <div class="card">
        <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">Имя</th> <td>{{$permission->name}}</td>
            </tr>
            <tr>
                <th scope="col">Описание)</th> <td> {{ $permission->description }}</td>
            </tr>
            <tr>
                <th scope="col">Дата создания</th> <td> {{ $permission->created_at}}</td>
            </tr>
            </thead>
        </table>
        </div>
    </div>
{{--@endsection--}}
