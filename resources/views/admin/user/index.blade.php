<?php
use \App\Helpers\StatusHelpers;
?>
@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Users</h4>
                    <div>
                        <a href="{{ route('admin.user.create') }}" class="btn btn-success" style="border-radius: 5px!important;"> <i class="fa fa-plus"> </i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th style="background: #caf5d4">№</th>
                                <th style="background: #caf5d4">Photo</th>
                                <th style="background: #caf5d4">Name</th>
                                <th style="background: #caf5d4">Full Name</th>
                                <th style="background: #caf5d4">Email</th>
                                <th style="background: #caf5d4">Phone</th>
                                <th style="background: #caf5d4">Created At</th>
                                <th style="background: #caf5d4">Status</th>
                                <th style="background: #caf5d4">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="{{  !empty($user->photo)?$user->photo:asset('/admin/assets/img/user_logo.png') }}" alt=""
                                                 width="50px"
                                                 class="img-thumbnail user-photo"></td>
                                        <td> {{ $user->name }}</td>
                                        <td> {{ $user->fullname }}</td>
                                        <td> {{ $user->email }}</td>
                                        <td> {{ $user->phone }}</td>
                                        <td> {{ date('H:i / d.m.Y', strtotime($user->created_at)) }}</td>
                                        <td>
                                            <div class="badge badge-success">{{ StatusHelpers::getStatusLabel($user->status) }}</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                            <a href="{{ route('admin.user.edit',['user' => $user->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                            <a href="{{ route('admin.user.show',['user' => $user->id]) }}" class="btn btn-sm btn-info mx-2"><i class="fa fa-eye"></i></a>
                                            <form action="{{route('admin.user.destroy', $user->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i></button>
                                            </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-end">
                    {{ $users->links('vendor.pagination.costum-pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
