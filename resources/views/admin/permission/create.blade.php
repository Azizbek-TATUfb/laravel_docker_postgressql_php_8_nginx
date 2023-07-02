{{--@extends('layouts.admin')--}}
{{--@section('content')--}}
    <!-- Main Content -->
                    <div class="card">
                        <div class="card-body">
                        <form action="{{ route('admin.permission.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                               <div class="row">
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <label>Имя</label>
                                           <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                                       </div>
                                   </div>
                                   <div class="col-md-6">
                                       <div class="form-group">
                                           <label>Описание</label>
                                           <input type="text" class="form-control" name="description"  value="{{ old('description') }}">
                                       </div>
                                   </div>
                               </div>
                                <div class="row border-bottom">
                                    <div class="col-md-12">
                                        <h5>Элемент разрешения</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <label>Имя</label>
                                    </div>
                                    <div class="col-md-5">
                                        <label>Описание</label>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="col-md-1">
                                            <span class="btn btn-success py-2 add-row my-1"><i class="fa fa-plus"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="permission-item mt-1">
                                    @php
                                        $actions = ['index', 'create', 'edit', 'show', 'update', 'destroy']
//                                    @endphp
                                    @foreach($actions as $action)
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" value="{{ $action }}"
                                                           name="Permission[{{ $loop->index }}][name]">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">

                                                    <input type="text" class="form-control" value="{{ $action }}"
                                                           name="Permission[{{ $loop->index }}][description]" >
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <span class="btn btn-danger remove-row py-2  my-1 ml-2"><i class="fa fa-minus"></i></span>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
{{--@endsection--}}
{{--@push('script_one')--}}
    <script>
        $('body').delegate('.remove-row','click', function (event) {
            event.preventDefault();
            let thisRow = $(this).parents('.row');
            let permissionItem = $(this).parents('.permission-item');
            thisRow.remove();
        })
        $('body').delegate('.add-row','click', function (event) {
            event.preventDefault();
            let PermissionItemLength = ($('.permission-item').children().length)*1;
            $('.permission-item').append(`
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control"
                               name="Permission[${PermissionItemLength}][name]">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">

                        <input type="text" class="form-control"
                               name="Permission[${PermissionItemLength}][description]" >
                    </div>
                </div>
                <div class="col-md-1">
                    <span class="btn btn-danger remove-row py-2  my-1 ml-2"><i class="fa fa-minus"></i></span>
                </div>
            </div>
            `);
        })
    </script>
{{--@endpush--}}
