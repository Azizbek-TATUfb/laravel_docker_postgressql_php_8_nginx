@extends('layouts.admin')
@section('content')
    <!-- Main Content -->
    <form action="{{ route('admin.role.update',['role'=> $role->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <!-- Main Content -->
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"> <div class="form-group">
                                <label>Имя</label>
                                <input type="text" class="form-control role-name" name="name" value="{{ $role->name }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Описание</label>
                                <input type="text" class="form-control role-description"
                                       value="{{ $role->description }}"
                                       name="description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <label class="btn btn-success mr-1 mt-1"
               style="    margin-top: 6px!important;"
               for="check-all"><input type="checkbox" id="check-all">&nbsp;&nbsp;Все</label>
        <button class="btn btn-primary mr-1" type="submit">Сохранять</button>
        <div class="row">

{{--            <?php--}}
{{--            echo "<pre>";--}}
{{--            print_r($role->permissions);--}}
{{--            echo "</pre>";exit();--}}
{{--            ?>--}}
            @if(!empty($permissionData))
                @foreach($permissionData as $item)
                    @php
                    $checkedParend = '';
                    $checkedAllItem = &$checkedParend;
                    $childCount = count($item['child']);
                    $itemChildIndex = 0;
                    @endphp
                    <div class="col-md-3">
                        <div class="permission-item-parent card shadow-sm checkbox" style="min-height: 216px">
                            <div class="card-header bg-info text-white font-size-16">
                                <label for="parent-{{$loop->index}}-permission" class="form-check-label permission ml-3">
                                    <input type="checkbox"
                                           id="parent-{{$loop->index}}-permission"
                                           {{ $checkedParend }}
                                           class="permission-item form-check-input">
                                    {{  $item['parent']->description ?? $item['parent']->name }}
                                </label>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if(!empty($item['child']))
                                        @foreach($item['child'] as $child)
                                            <div class="col-md-12 mb-2 ml-3 font-size-16">
                                                @php
                                                    $checked = '';
                                                    if (in_array($child->id, $getRoleHasPermission)){
                                                        $checked = 'checked';
//                                                        $itemChildIndex++;
                                                    }
                                                @endphp
                                                <label for="parent-{{$loop->parent->index}}-permission-{{ $loop->index }}-item" class="form-check-label">
                                                    <input type="checkbox"
                                                           {{ $checked }}
                                                           id="parent-{{$loop->parent->index}}-permission-{{ $loop->index }}-item"
                                                           value="{{$child->id}}" class="permission-item-child form-check-input" name="permissions[]" >
                                                    {{ $child->description }}
                                                </label>
                                            </div>
                                        @endforeach
                                            @php
                                                if ($itemChildIndex == $childCount){
                                                    $checkedAllItem = 'checked';
                                                }
                                            @endphp
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </form>
@endsection
@push('script')
    <script>
        $('body').delegate('#check-all','click',function (event){
            // event.preventDefault();\
            let permissionItem = $('.permission-item');
            if (this.checked){
                permissionItem.each((index, item) => {
                    $(item).prop('checked',true);
                    $(item).parents('.permission-item-parent').find('.permission-item-child').prop('checked',true);
                    // $(item).click()
                })
            }else{
                permissionItem.each((index, item) => {
                    $(item).prop('checked',false);
                    $(item).parents('.permission-item-parent').find('.permission-item-child').prop('checked',false);
                    // $(item).click();
                })
            }
        })
        $('body').delegate('.permission-item','click',function (event){
            // event.preventDefault();
            if ($(this).is(':checked')){
                $(this).parents('.permission-item-parent').find('.permission-item-child').prop('checked',true);
            }else{
                $(this).parents('.permission-item-parent').find('.permission-item-child').prop('checked',false)
            }
        })
    </script>
@endpush
