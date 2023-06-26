<?php
?>
@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <a href="#" class="btn btn-info back-url" style="border-radius: 5px!important;"> <i class="fa fa-arrow-left"> </i></a>
                        <a href="{{ route('admin.settings.create') }}" class="btn btn-success" style="border-radius: 5px!important;"> <i class="fa fa-plus"> </i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th style="background: #caf5d4">№</th>
                                <th style="background: #caf5d4">Nomi Uz</th>
                                <th style="background: #caf5d4">Nomi Ru</th>
                                <th style="background: #caf5d4">Nomi En</th>
                                <th style="background: #caf5d4">Key</th>
                                <th style="background: #caf5d4">Link</th>
                                <th style="background: #caf5d4">Holati</th>
                                <th style="background: #caf5d4">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($settings as $setting)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $setting->name_uz }}</td>
                                    <td> {{ $setting->name_ru }}</td>
                                    <td> {{ $setting->name_en }}</td>
                                    <td> {{ $setting->key }}</td>
                                    <td> {{ $setting->link }}</td>
                                    <td>
                                        <div class="badge badge-success">{{ \App\Helpers\StatusHelpers::getStatusLabel($setting->status) }}</div>

                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.settings.edit',$setting->id) }}" class="btn btn-sm btn-primary mx-2"><i class="fa fa-pen"></i></a>
                                            <a href="{{ route('admin.settings.show',$setting->id) }}" class="btn btn-sm btn-info mx-2"><i class="fa fa-eye"></i></a>
                                            <form action="{{route('admin.settings.destroy', $setting->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $setting->id }}">
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
                    {{ $settings->links('vendor.pagination.costum-pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
