@extends('layouts.admin')
@section('content')
    <!-- Main Content -->
    <div class="row">

        <div class="col-12 col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4 >Роли</h4> &nbsp;&nbsp;&nbsp;
                    <div>
                        <a href="{{ route('admin.role.create') }}" data-modal-header="{{__('Roles create')}}"
                           class="btn btn-success py-2 role-create" style="border-radius: 5px!important;"> <i class="fa fa-plus"> </i></a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-md">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Описание</th>
                                <th>Дата создания</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($roles))
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{ $loop->iteration   }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td>{{ $role->created_at }}</td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{route('admin.role.edit',$role->id )}}"
                                                   class="role-edit" data-modal-header="{{__('Permissions edit')}}" >
                                                    <button class="btn btn-sm py-2   btn-primary " >
                                                        <i class="fas fa-edit"></i></button></a>
                                                <a href="{{route('admin.role.show',$role->id )}}"
                                                   class="role-show" data-modal-header="Показать роль">
                                                    <button class="btn btn-sm py-2   btn-info  mx-2">
                                                        <i class="fas fa-eye"></i></button></a>
                                                <form action="{{route('admin.role.destroy', $role->id)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm py-2  btn-danger" onclick="return confirm('Are you sure ?')"><i class="fas fa-trash"></i></button>
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
                    {{ $roles->links() }}
                </div>
            </div>
        </div>
    </div>

@endsection
{{--<div>--}}
{{--    <!-- Let all your things have their places; let each part of your business have its time. - Benjamin Franklin -->--}}
{{--    <!-- Modal -->--}}
{{--    <div class="modal fade" id="modal-id-role" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content modal-lg">--}}
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
<div class="modal fade bd-example-modal-lg" id="modal-id-role"
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
        $('body').delegate('.role-show', 'click', function (event) {//.role-create, .role-edit,
            event.preventDefault()
            let url = $(this).attr('href');
            console.log(url)
            let modalHeader = $(this).data('modal-header');
            $('#modal-id-role').find('.modal-body').load(url,function (event){
                $(this).parents('#modal-id-role').modal('show');
                $(this).parents('#modal-id-role').find('#exampleModalCenterTitle').html(modalHeader);

            });
        });
    </script>
@endpush
