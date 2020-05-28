@extends('admin.master')

@section('content')

{{-- <div class="col-12">
    <div class="card">
        <div class="card-content">
            <div class="card-body card-dashboard">
                <h3 class="card-text">لیست محصولات</h3>
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table nowrap scroll-horizontal-vertical dataTable" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 70px;" aria-label="">
                                                ردیف
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 70px;" aria-label="">
                                                تصویر
                                            </th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 172.9px;" aria-sort="ascending" aria-label="">
                                                نام محصول
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 273.583px;" aria-label="">
                                                شناسه محصول
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 127.6px;" aria-label="">
                                                تعداد فروش
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 38.2833px;" aria-label="">
                                                تعداد بازدید
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 102.933px;" aria-label="">
                                                تعداد اشتراک
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 86.1px;" aria-label="">
                                                تعداد کامنت
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 86.1px;" aria-label="">
                                                تعداد کامنت
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 86.1px;" aria-label="">
                                                تعداد کامنت
                                            </th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" style="width: 100.1px;" aria-label="">
                                                عملیات
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($products as $key => $product)
                                                <tr>
                                                        <td scope="row">{{ $key+1 }}</td>

                                                          @foreach($product->images as $k=>$collection)
                                                                        @if(isset($collection->images['images'][$k]['original']))
                                                                        <td class="product-img"><img src="http://127.0.0.1:8000/{{$collection->images['images'][$k]['original']}}" alt="{{$collection->imagesTitle}}" width="100px" height="100px"></td>
                                                                        @elseif(isset($collection->images['images'][$k]['300']))
                                                                        <td class="product-img"><img src="http://127.0.0.1:8000/{{$collection->images['images'][$k]['300']}}" alt="{{$collection->imagesTitle}}" width="100px" height="100px"></td>
                                                                        @else
                                                                        <td class="product-img"><img src="" alt="{{$collection->imagesTitle}}" width="100px" height="100px"></td>
                                                                        @endif
                                                        @endforeach

                                                    <td class="product-name">{{ $product->title }}</td>
                                                    <td class="product-category">Fitness</td>
                                                    <td>
                                                        {{ $product->sku }}
                                                    </td>
                                                    <td>
                                                        <div class="chip chip-success">
                                                            <div class="chip-body">
                                                                <div class="chip-text">{{ $product->salesNumber }}</div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="product-price">{{ $product->viewCount }}</td>
                                                    <td class="product-price">{{ $product->shareCount }}</td>
                                                    <td class="product-price">{{ $product->commentCount }}</td>
                                                    <td class="oprate product-action" data-oprate-id="{{ $product->id }}">
                                                        <a href="{{route('products.edit', $product->id)}}" title="ویرایش اطلاعات محصول" >
                                                            <i class="fa fa-pencil-square-o"></i>
                                                        </a>
                                                        &nbsp;
                                                        <a class="deleteData" title="حذف محصول" data-route="/admin/products/" data-type="DELETE">
                                                            <i class="fa fa-trash-o text-danger"></i>
                                                        </a>
                                                        &nbsp;
                                                        @if ( $product->active )
                                                            <a class="active"  data-route="/admin/ajax/" data-method="activeData" data-type="post">
                                                                <i class="active fa fa-eye-slash text-secondary" title="عدم نمایش محصول"></i>
                                                            </a>
                                                        @else
                                                            <a class="active" data-route="/admin/ajax/" data-method="activeData" data-type="post">
                                                                <i class="active fa fa-eye text-success" title="نمایش محصول"></i>
                                                            </a>
                                                        @endif

                                                    </td>
                                                </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div> --}}
<section id="data-thumb-view" class="data-thumb-view-header">
<div class="table-responsive">
    <table class="table data-thumb-view">
        <thead>
            <tr>
                <th>ردیف</th>
                <th>تصویر</th>
                <th>نام</th>
                <th>CATEGORY</th>
                <th>شناسه کالا</th>
                <th>تعداد فروش</th>
                <th>تعداد بازدید</th>
                <th>تعداد نظرات</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($products as $key => $product)

                <tr>

                    <td>{{ $key+1 }}</td>


                    @foreach($product->images as $k=>$collection)
                                @if(isset($collection->images['images'][$k]['original']))
                                <td class="product-img"><img src="http://127.0.0.1:8000/{{$collection->images['images'][$k]['original']}}" alt="{{$collection->imagesTitle}}" width="100px" height="100px"></td>
                                @elseif(isset($collection->images['images'][$k]['300']))
                                <td class="product-img"><img src="http://127.0.0.1:8000/{{$collection->images['images'][$k]['300']}}" alt="{{$collection->imagesTitle}}" width="100px" height="100px"></td>
                                @else
                                <td class="product-img"><img src="" alt="{{$collection->imagesTitle}}" width="100px" height="100px"></td>
                                @endif
                    @endforeach


                    <td class="product-name">{{ $product->title}}</td>


                    @foreach($product->categories as $k=>$collection)
                    <td class="product-category">{{$collection['name']}}</td>
                    @endforeach


                    <td>  {{ $product->sku }}  </td>


                    <td>
                        <div class="chip chip-warning">
                            <div class="chip-body">
                                <div class="chip-text">{{ $product->salesNumber }}</div>
                            </div>
                        </div>
                    </td>


                    <td class="product-price">{{ $product->viewCount }}</td>


                    <td class="product-price">{{ $product->commentCount }}</td>


                    <td class="oprate product-action" data-oprate-id="{{ $product->id }}">

                            <a href="{{route('products.edit', $product->id)}}" title="ویرایش اطلاعات محصول" >
                                <i class="fa fa-pencil-square-o"></i>
                            </a>
                            &nbsp;
                            <a class="deleteData" title="حذف محصول" data-route="/admin/products/" data-type="DELETE">
                                <i class="fa fa-trash-o text-danger"></i>
                            </a>
                            &nbsp;
                            @if ( $product->active )
                            <a class="active" data-route="/admin/ajax/" data-method="activeData" data-type="post">
                                <i class="active fa fa-eye text-success" title="نمایش محصول"></i>
                            </a>
                            @else
                                <a class="active"  data-route="/admin/ajax/" data-method="activeData" data-type="post">
                                    <i class="active fa fa-eye-slash text-secondary" title="عدم نمایش محصول"></i>
                                </a>
                            @endif
                            &nbsp;
                            @if ($product->values->toArray())
                                <a href="{{url("admin/values/$product->id/edit")}}" title="ویرایش مشخصات محصول" >
                                    <i class="fa fa-wrench text-info"></i>
                                </a>
                            @else
                                <a href="{{url("admin/values/$product->id")}}" title="تعیین مشخصات محصول" >
                                    <i class="fa fa-info-circle text-warning"></i>
                                </a>
                            @endif

                    </td>


                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>



@endsection

