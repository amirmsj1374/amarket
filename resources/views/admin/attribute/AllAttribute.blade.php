@component('admin.layouts.conntentComponent')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="col-md-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <form action="{{Route('attribute.index')}}">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>انتخاب دسته بندی</span>
                                                </div>

                                                    <div class="col-md-6">
                                                        <select name="PAttribute"
                                                            class="form-control-sm form-control select2"
                                                            id="SelectAttribute">
                                                            <option value=""></option>
                                                            @foreach($categories as $category)
                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <button id="target" type="submit" class="btn btn-flickr">انتخاب</button>
                                                    </div>
                                               </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-content">
            <div class="card-body">
                <a href="{{Route('attribute.create')}}" id="addRow" class="btn btn-primary mb-2 text-white text-right"><i
                        class="feather icon-plus"></i>اضافه
                    ویژگی</a>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body card-dashboard">
                                    <div class="table-responsive">

                                        <table id="TblAttribute" class="table zero-configuration text-center">
                                            <thead>
                                                <tr>
                                                    <th>ردیف</th>
                                                    <th>نام</th>
                                                    <th>نوع</th>
                                                    <th>قیمت</th>
                                                    <th>موجودی</th>
                                                    <th>عملیات</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbattrs">
                                                @isset($attrs)
                                                        @foreach ($attrs as $item)
                                                                <tr>
                                                                    @if($item->parent_id ==0)
                                                                        <td>{{$loop->iteration}}</td>

                                                                        <td>{{$item->name}}</td>

                                                                        <td>{{__($item->type)}}</td>

                                                                        <td>{{$item->price ? $price="on" : $price="off"}}</td>

                                                                        <td>{{$item->qty ? $qty="on" : $qty="off"}}</td>

                                                                        <td class="oprate" data-oprate-id="{{ $item->id }}" >
                                                                            <a href="" title="ویرایش اطلاعات محصول" >
                                                                                <i class="fa fa-pencil-square-o"></i>
                                                                            </a>
                                                                            &nbsp;
                                                                            <a class="deleteData" title="حذف محصول" data-route="/admin/attribute/" data-type="DELETE">
                                                                                <i class="fa fa-trash-o text-danger"></i>
                                                                            </a>
                                                                            &nbsp;
                                                                            @if ( $item->IsActive )
                                                                            <a class="active" data-route="/admin/ajax/" data-method="category" data-type="post">
                                                                                <i class="active fa fa-eye text-success" title="نمایش محصول"></i>
                                                                            </a>
                                                                            @else
                                                                                <a class="active"  data-route="/admin/ajax/" data-method="attrs" data-type="post">
                                                                                    <i class="active fa fa-eye-slash text-secondary" title="عدم نمایش محصول"></i>
                                                                                </a>
                                                                            @endif
                                                                            &nbsp;
                                                                            @if ($item->type == 'Selected')
                                                                                @if ($item->selects)
                                                                                    <a href="{{url("admin/selects/$item->id/edit")}}" title="ویرایش گزینه ها" >
                                                                                        <i class="fa fa-pencil text-success"></i>
                                                                                    </a>
                                                                                @else
                                                                                    <a href="{{url("admin/selects/$item->id")}}" title="تعیین گزینه ها" >
                                                                                        <i class="fa fa-info-circle text-warning"></i>
                                                                                    </a>
                                                                                @endif
                                                                            @endif
                                                                        </td>
                                                                        @endif
                                                                </tr>
                                                        @endforeach
                                                @endisset
                                            </tbody>
                                            <tfoot>

                                                <tr>
                                                    <th>ردیف</th>
                                                    <th>نام</th>
                                                    <th>نوع</th>
                                                    <th>قیمت</th>
                                                    <th>موجودی</th>
                                                    <th>عملیات</th>
                                                </tr>
                                            </tfoot>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endcomponent
