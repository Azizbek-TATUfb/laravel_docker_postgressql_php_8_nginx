<?php

?>
@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>User View</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <tr>

                            <th>Full Name</th>
                            <th>{{ $user->fullname }}</th>
                            <th rowspan="3" colspan="2" class="text-center">
                                <img src="{{  !empty($user->photo)?$user->photo:asset('/admin/assets/img/user_logo.png') }}" alt=""
                                     width="50%"
                                     class="img-thumbnail user-photo"></th>
                        </tr>
                        <tr>

                            <th >Email</th>
                            <th >{{ $user->email }}</th>
                        </tr>
                        <tr>
                            <th >Phone</th>
                            <th >{{ $user->phone}}</th>

                        </tr>
                        <tr>
                            <th >Status</th>
                            <th >{{ $user->status }}</th>
                            <th >Created At </th>
                            <th >{{ $user->date }}</th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
