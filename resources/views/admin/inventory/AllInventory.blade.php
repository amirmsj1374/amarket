@extends('admin.master')

@section('content')
<section id="data-thumb-view" class="data-thumb-view-header">
<div class="table-responsive">
    <table class="table data-thumb-view">
        <thead>
            <tr>
                <th>ردیف</th>
                <th>تصویر</th>
                <th>نام</th>
                <th>دسته بندی</th>
                <th>شناسه کالا</th>
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
             
                    <td class="oprate product-action" data-oprate-id="{{ $product->id }}">
                           
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
                            <a href="{{url("admin/inventory/$product->id")}}" title="مشخصات محصول" >
                                <i class="fa fa-wrench text-info"></i>
                            </a>

                    </td>

                    
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</section>   

     

@endsection

