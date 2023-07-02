@extends('layouts.admin')
@section('content')
    <form action="{{ route('admin.role.store') }}" method="POST">
        @csrf
    <!-- Main Content -->
        <div class="card">
            <div class="card-body">
                <div class="card-body">
                   <div class="row">
                       <div class="col-md-6"> <div class="form-group">
                               <label>{{__('Nomi')}}</label>
                               <input type="text" class="form-control role-name {{ empty($errors->first('name'))?:'is-invalid' }}"
                                      name="name" value="{{ old('name') }}">
                               <div class="invalid-feedback">
                                   {{ $errors->first('name') }}
                               </div>
                           </div>
                       </div>

                       <div class="col-md-6">
                           <div class="form-group">
                               <label>{{__('Izoh')}}</label>
                               <input type="text" class="form-control role-description" name="description">
                           </div>
                       </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <label class="btn btn-success  mr-1 btn-radius-none"
                       for="check-all"><input type="checkbox" id="check-all">&nbsp;&nbsp;Barchasi</label>
                &nbsp;&nbsp;
                <button class="btn btn-primary mr-1 btn-radius-none " type="submit">Save</button>
            </div>
            <div class="card-body">
                    <div class="row">
            @if(!empty($permissionData))
                @foreach($permissionData as $item)
                <div class="col-md-3 col-12 col-sm-6">
                    <div class="permission-item-parent card shadow-sm checkbox" style="min-height: 216px">
                        <div class="card-header bg-info text-white font-size-16">
                            @php
                                $permissionParenName = $item['parent']->description ?? $item['parent']->name;
                                $permissionName = mb_strlen($permissionParenName) >10? substr($permissionParenName,0,10).' ...':$permissionParenName;
                            @endphp
                            <label for="parent-{{$loop->index}}-permission"
                                   data-bs-toggle="tooltip" data-placement="bottom"
                                   title="" data-bs-original-title="{{ $permissionParenName }}"
                                   class="form-check-label permission ml-3">
                                <input type="checkbox"
                                       id="parent-{{$loop->index}}-permission"
                                       class="permission-item form-check-input">

                                {{  $permissionName }}
                            </label>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @if(!empty($item['child']))
                                    @foreach($item['child'] as $child)
                                        <div class="col-md-12 mb-2 ml-3 font-size-16">
                                            {{--{{ Form::checkbox('permission[]',$child->name,false,
                                                ['class' => 'form-check-input']) }}--}}
                                            <label for="parent-{{$loop->parent->index}}-permission-{{ $loop->index }}-item" class="form-check-label">
                                                <input type="checkbox"
                                                       id="parent-{{$loop->parent->index}}-permission-{{ $loop->index }}-item"
                                                       value="{{$child->id}}" class="permission-item-child form-check-input" name="permissions[]" >
                                                {{ $child->description }}
                                            </label>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
    </div>
            </div>
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
