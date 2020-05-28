@component('admin.layouts.conntentComponent')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">دسته بندی محصول</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <a href="{{Route('category.create')}}" id="addRow"
                           class="btn btn-primary mb-2 text-white text-right"><i class="feather icon-plus"></i>اضافه
                            دسته بندی</a>
                        <div class="table-responsive">
                            <table class="table add-rows text-center">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>نام دسته</th>
                                    <th>مسیر</th>
                                    <th>فعال و غیرفعال</th>
                                    <th>وضعیت</th>
                                    <th>حذف</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($nodes  as $key => $category)
                                    <tr>
                                        <td>{{$key+1}}</td>

                                        <td>{{$category->name}}</td>

                                        <td>
                                            @foreach($category->ancestors as $item)
                                                {{$item->name}},
                                            @endforeach
                                        </td>

                                        <td>
                                            @if($category->IsActive ==1)
                                                فعال
                                            @else
                                                غیرفعال
                                            @endif
                                        </td>
                                        <td></td>
                                        <td class="oprate" data-oprate-id="{{ $category->id }}" >
                                            <a href="" title="ویرایش اطلاعات محصول" >
                                                <i class="fa fa-pencil-square-o"></i>
                                            </a>
                                            &nbsp;
                                            <a class="deleteData" title="حذف محصول" data-route="/admin/category/" data-type="DELETE">
                                                <i class="fa fa-trash-o text-danger"></i>
                                            </a>
                                            &nbsp;
                                            @if ( $category->IsActive )
                                                <a class="active"  data-route="/admin/ajax/" data-method="category" data-type="post">
                                                    <i class="active fa fa-eye-slash text-secondary" title="عدم نمایش محصول"></i>
                                                 </a>
                                            @else
                                                <a class="active" data-route="/admin/ajax/" data-method="category" data-type="post">
                                                    <i class="active fa fa-eye text-success" title="نمایش محصول"></i>
                                                </a>
                                            @endif
    
                                        </td>
                                        
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                    <th>#</th>
                                    <th>نام دسته</th>
                                    <th>مسیر</th>
                                    <th>فعال و غیرفعال</th>
                                    <th>وضعیت</th>
                                    <th>حذف</th>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endcomponent
