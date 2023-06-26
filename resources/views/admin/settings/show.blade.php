<?php

?>
@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Bo'lim</h4>
                    <div>
                        <a href="#" class="btn btn-info back-url" style="border-radius: 5px!important;"> <i class="fa fa-arrow-left"> </i></a>
                    </div>
                </div>
                <div class="card-body">
                    @if(!empty($category))
                        <table class="table table-striped table-bordered">
                            <tr>

                                <th>Slug Uz</th>
                                <th>{{ $category->slug_uz }}</th>
                            </tr>
                            <tr>

                                <th >Name UZ</th>
                                <th >{{ $category->name_uz }}</th>
                            </tr>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
