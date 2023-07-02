<?php
use App\Helpers\StatusHelpers;
?>
@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <h4>Sahifa - {{ $page->title_uz }}</h4>
                        <div>
                            <a href="#" class="btn btn-info back-url" style="border-radius: 5px!important;"> <i class="fa fa-arrow-left"> </i></a>
                        </div>
                    </div>
                    <div class="card-body">
                        <ul class="nav nav-tabs" id="myTab2" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="uzbekcha-tab2" data-bs-toggle="tab" href="#uzbekcha" role="tab" aria-controls="uzbekcha" aria-selected="true">O'zbekcha</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " id="ruscha-tab2" data-bs-toggle="tab" href="#ruscha" role="tab" aria-controls="ruscha" aria-selected="false">Russian</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="inglishcha-tab2" data-bs-toggle="tab" href="#inglishcha" role="tab" aria-controls="inglishcha" aria-selected="false">English</a>
                            </li>
                        </ul>
                        <div class="tab-content tab-bordered" id="myTab3Content">
                            <div class="tab-pane fade  active show" id="uzbekcha" role="tabpanel" aria-labelledby="uzbekcha-tab2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td>Slug: <b>{!! $page->slug_uz !!}</b></td>
                                                    <td>Title: <b>{!! $page->title_uz !!}</b></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">
                                                        {!! $page->content_uz!!}
                                                    </th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="ruscha" role="tabpanel" aria-labelledby="ruscha-tab2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td>Slug: <b>{!! $page->slug_ru !!}</b></td>
                                                    <td>Title: <b>{!! $page->title_ru !!}</b></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">
                                                        {!! $page->content_ru!!}
                                                    </th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="inglishcha" role="tabpanel" aria-labelledby="inglishcha-tab2">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="table-responsive">
                                            <table class="table table-striped table-bordered">
                                                <tr>
                                                    <td>Slug: <b>{!! $page->slug_en !!}</b></td>
                                                    <td>Title: <b>{!! $page->title_en !!}</b></td>
                                                </tr>
                                                <tr>
                                                    <th colspan="2">
                                                        {!! $page->content_en!!}
                                                    </th>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <tr>
                                            <td>Key: <b>{!! $page->key !!}</b></td>
                                            <td>Status: <div class="badge badge-success">{{ StatusHelpers::getStatusLabel($page->status) }}</div></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection
