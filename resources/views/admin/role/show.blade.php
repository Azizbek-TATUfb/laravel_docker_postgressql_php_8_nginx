{{--@extends('layouts.admin')--}}
{{--@section('content')--}}
    <div class="card">
        <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th scope="col">Имя</th> <td>{{$role->name}}</td>
            </tr>
            <tr>
                <th scope="col">Описание</th> <td> {{ $role->description }}</td>
            </tr>
            <tr>
                <th scope="col">Дата создания</th> <td> {{ $role->created_at}}</td>
            </tr>
            </thead>
        </table>
        </div>
    </div>
{{--@endsection--}}
