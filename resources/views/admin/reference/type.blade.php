<?php
?>
@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Qo'shimcha</h4>
                    <div>
{{--                        <a href="{{ route('admin.reference.create-type') }}" class="btn btn-success" style="border-radius: 5px!important;"> <i class="fa fa-plus"> </i></a>--}}
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
                                <th style="background: #caf5d4">Holati</th>
                                <th style="background: #caf5d4">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($referencesTypes as $referencesType)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $referencesType->name_uz }}</td>
                                    <td> {{ $referencesType->name_ru }}</td>
                                    <td> {{ $referencesType->name_en }}</td>
                                    <td>
                                        <div class="badge badge-success">{{ \App\Helpers\StatusHelpers::getStatusLabel($referencesType->status) }}</div>

                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.reference.index',['type' => $referencesType->id, 'name' => $referencesType->name_uz]) }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add</a>
{{--                                            <a href="{{ route('admin.category.show',['type' => $referencesType->id]) }}" class="btn btn-sm btn-info mx-2"><i class="fa fa-eye"></i></a>--}}
                                            {{--<form action="{{route('admin.category.destroy', $referencesType->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i></button>
                                            </form>--}}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-end">
{{--                    {{ $referencesTypes->links('vendor.pagination.costum-pagination') }}--}}
                </div>
            </div>
        </div>
    </div>
@endsection
