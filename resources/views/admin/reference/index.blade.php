<?php
?>
@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>{{ $name }}</h4>
                    <div>
                        <a href="{{ route('admin.reference.type') }}" class="btn btn-info back-url" style="border-radius: 5px!important;"> <i class="fa fa-arrow-left"> </i></a>
                        <a href="{{ route('admin.reference.create', ['type' => $type, 'name' => $name]) }}" class="btn btn-success" style="border-radius: 5px!important;"> <i class="fa fa-plus"> </i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th style="background: #caf5d4">№</th>
                                <th style="background: #caf5d4">Tilte Uz</th>
                                <th style="background: #caf5d4">Tilte Ru</th>
                                <th style="background: #caf5d4">Tilte En</th>
                                <th style="background: #caf5d4">Holati</th>
                                <th style="background: #caf5d4">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($references as $reference)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $reference->title_uz }}</td>
                                    <td> {{ $reference->title_ru }}</td>
                                    <td> {{ $reference->title_en }}</td>
                                    <td>
                                        <div class="badge badge-success">{{ \App\Helpers\StatusHelpers::getStatusLabel($reference->status) }}</div>

                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.reference.edit',['reference' => $reference->id, 'name' => $name]) }}" class="btn btn-sm btn-primary mx-2"><i class="fa fa-pen"></i></a>
{{--                                            <a href="{{ route('admin.reference.show',['reference' => $reference->id,  'name' => $name]) }}" class="btn btn-sm btn-info mx-2"><i class="fa fa-eye"></i></a>--}}
                                            <form action="{{route('admin.reference.destroy', $reference->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="name" value="{{ $name }}">
                                                <input type="hidden" name="type" value="{{ $reference->references_type_id }}">
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
                    {{ $references->links('vendor.pagination.costum-pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
