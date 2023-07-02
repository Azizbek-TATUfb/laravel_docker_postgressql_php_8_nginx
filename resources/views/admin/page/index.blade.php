<?php
    use App\Helpers\StatusHelpers;
?>
@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Sahifa</h4>
                    <div>
                        <a href="{{ route('admin.page.create') }}" class="btn btn-success" style="border-radius: 5px!important;"> <i class="fa fa-plus"> </i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <th style="background: #caf5d4">№</th>
                                <th style="background: #caf5d4">Title</th>
                                <th style="background: #caf5d4">Yaratilgan Vaqt</th>
                                <th style="background: #caf5d4">Status</th>
                                <th style="background: #caf5d4">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pages as $page)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td> {{ $page->title_uz }}</td>
                                    <td> {{ date('H:i / d.m.Y', strtotime($page->created_at)) }}</td>
                                    <td>
                                        <div class="badge badge-success">{{ StatusHelpers::getStatusLabel($page->status) }}</div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.page.edit',['page' => $page->id]) }}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i></a>
                                            <a href="{{ route('admin.page.show',['page' => $page->id]) }}" class="btn btn-sm btn-info mx-2"><i class="fa fa-eye"></i></a>
                                            <form action="{{route('admin.page.destroy', $page->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                <tr >
                                    <td colspan="5" style="overflow: scroll; "> {!! $page->content_uz !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer text-end">
                    {{ $pages->links('vendor.pagination.costum-pagination') }}
                </div>
            </div>
        </div>
    </div>
@endsection
