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
                        <a href="{{ route('admin.news.create') }}" class="btn btn-success" style="border-radius: 5px!important;"> <i class="fa fa-plus"> </i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th style="background: #caf5d4">№</th>
                                <th style="background: #caf5d4">Title Uz</th>
                                <th style="background: #caf5d4">Title Ru</th>
                                <th style="background: #caf5d4">Title En</th>
                                <th style="background: #caf5d4">Holati</th>
                                <th style="background: #caf5d4">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news as $new)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $new->title_uz }}</td>
                                    <td> {{ $new->title_ru }}</td>
                                    <td> {{ $new->title_en }}</td>
                                    <td>
                                        <div class="badge badge-success">{{ \App\Helpers\StatusHelpers::getStatusLabel($new->status) }}</div>

                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.news.edit',$new->id) }}" class="btn btn-sm btn-primary mx-2"><i class="fa fa-pen"></i></a>
{{--                                            <a href="{{ route('admin.news.show',$new->id) }}" class="btn btn-sm btn-info mx-2"><i class="fa fa-eye"></i></a>--}}
                                            <form action="{{route('admin.news.destroy', $new->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <input type="hidden" name="id" value="{{ $new->id }}">
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
                    {{ $news->links('vendor.pagination.costum-pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
