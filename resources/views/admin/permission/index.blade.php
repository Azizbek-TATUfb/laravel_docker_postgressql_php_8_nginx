@extends('layouts.admin')
@section('content')
    <!-- Main Content -->
    <div class="row">

        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 >Permission</h4>&nbsp;&nbsp;&nbsp;
                    <div>
                        <a href="{{ route('admin.permission.create') }}" data-modal-header="Разрешение на создание}"
                           style="border-radius: 5px!important;"
                           class="btn btn-success py-2 permission-create"> <i class="fa fa-plus"> </i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Nomi</th>
                                <th>Izoh</th>
                                <th>Created At</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($permissions))
                                @foreach($permissions as $permission)
                                    <tr>
                                        <td>{{ $loop->iteration   }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>{{ $permission->description }}</td>
                                        <td>{{ $permission->created_at }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('admin.permission.edit',$permission->id )}}"
                                                   class="permission-edit" data-modal-header="Права доступа" >
                                                    <button class="btn btn-sm  py-2  btn-primary " >
                                                        <i class="fas fa-edit"></i></button></a>
                                                <a href="{{route('admin.permission.show',$permission->id )}}"
                                                   class="permission-show" data-modal-header="Показать разрешение">
                                                    <button class="btn btn-sm  py-2  btn-info  mx-2">
                                                        <i class="fas fa-eye"></i></button></a>
                                                <form action="{{route('admin.permission.destroy', $permission->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm  py-2  btn-danger" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>

                        </table>
                    </div>
                </div>
                <div class="card-footer text-end">
                    {{ $permissions->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
{{--<div>--}}
{{--    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->--}}
{{--    <!-- Modal -->--}}
{{--    <div class="modal" id="modal-id-permission" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--        <div class=" modal-dialog-centered" role="document" style="width: 800px!important;margin:auto">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-header">--}}
{{--                    <h5 class="modal-title" id="exampleModalCenterTitle">...</h5>--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times;</span>--}}
{{--                    </button>--}}
{{--                </div>--}}
{{--                <div class="modal-body">--}}
{{--                </div>--}}
{{--                <div class="modal-footer">--}}
{{--                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>--}}
{{--                    <button type="button" class="btn btn-primary">Save changes</button>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="modal fade bd-example-modal-lg" id="modal-id-permission"
     tabindex="-1" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
        </div>
    </div>
</div>
@push('script')
    <script>
        $('body').delegate('.permission-create, .permission-edit, .permission-show', 'click', function (event) {
            event.preventDefault()
            let url = $(this).attr('href');
            console.log(url)
            let modalHeader = $(this).data('modal-header');
            $('#modal-id-permission').find('.modal-body').load(url,function (event){
                $(this).parents('#modal-id-permission').modal('show');
                $(this).parents('#modal-id-permission').find('#exampleModalCenterTitle').html(modalHeader);
            });
        });
    </script>
@endpush
