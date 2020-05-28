@extends('admin.master')

@section('script')
    <script src="{{asset("ckeditor/ckeditor.js")}}"></script>
    <script>
        CKEDITOR.replace('body' , {
            filebrowserUploadUrl : '/admin/panel/upload-image',
            filebrowserImageUploadUrl : '/admin/panel/upload-image',
        });
    </script>
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
        <div class="row">
            <p class="info mt-3 col-12 calibri h2">مشخصات محصول</p>
            <hr class="col-12">

            <form action="{{url("admin/products/$product->id")}}" method="post" enctype="multipart/form-data">

                    @csrf

                    @if($product->id)
                        {{method_field("PUT")}}
                    @endif

                <div class="row mt-3">
                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label for="title">نام محصول</label>
                            <input type="text" name="title" id="title" class="title form-control" placeholder="نام" value="{{$product->title ?? old('title')}}" required>
                        </fieldset>
                    </div>

                    <div class="col-md-4 form-group mt-2">
                        <select class="select2 form-control select2-hidden-accessible @error('category') is-invalid   @enderror" name="caregory_id"  data-select2-id="7" tabindex="-1" aria-hidden="true">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                        @error('caregory')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="col-md-4">
                        <fieldset class="form-group">
                            <label for="sku">شناسه محصول</label>
                            <input type="text" name="sku" id="sku" class="sku form-control" placeholder="شناسه" value="{{$product->sku ?? old('sku')}}" required>
                        </fieldset>
                    </div>


                    <div class="col-md-4 mt-1">
                        <fieldset class="form-group">
                            <label for="tags">تگ ها</label>
                            <input type="text" name="tags" id="tags" class="tags form-control" value="{{$product->tags ?? old('tags')}}" placeholder="تگ" required>
                        </fieldset>
                    </div>

                    <hr class="col-md-12">

                    <div class="col-12 mt-2">
                        <fieldset class="form-group">
                            <label for="description">توضیحات کوتاه</label>
                            <textarea class="description form-control" name="description" id="description" rows="3" style="height: 124px;" required>{{$product->description ?? old('description')}}</textarea>
                        </fieldset>
                    </div>

                    <div class="col-12">
                        <fieldset class="form-group">
                            <label for="body">متن کامل</label>
                            <textarea class="body form-control" name="body" id="body" rows="3" style="height: 124px;" required>{{$product->body ?? old('body')}}</textarea>
                        </fieldset>
                    </div>

                    <div class="col-md-3 mt-2">
                        <fieldset>
                            <div class="vs-checkbox-con vs-checkbox-success">
                                <input type="hidden" name="active" value="0">
                                <input type="checkbox" name="active" @if ($product->active) checked @endif value="1">
                                <span class="vs-checkbox">
                                    <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                    </span>
                                </span>
                                <span class="lead">نمایش محصول</span>
                            </div>
                        </fieldset>
                    </div>

                    <p class="info mt-4 col-12 h2 calibri">تصویر محصول</p>

                    <hr class="col-12">

                    <div class="col-md-6 mt-2">
                        <fieldset class="form-group">
                            <label for="images">تصویر محصول</label>
                            <div class="custom-file">
                                <input type="file" name="images[]" class="custom-file-input" id="images" multiple>
                                <label class="custom-file-label" for="images">انتخاب کنید</label>
                            </div>
                        </fieldset>
                    </div>

                    <div class="col-md-6 mt-2">
                        <fieldset class="form-group">
                            <label for="imagesTitle">عنوان تصاویر</label>
                            <input type="text" name="imagesTitle" id="imagesTitle" class="imagesTitle form-control" value="{{$images[0]['imagesTitle'] ?? old('imagesTitle')}}" placeholder="عنوان تصویر" required>
                        </fieldset>
                    </div>

                    <div class="col-md-12">
                        <fieldset class="form-group">
                            <label for="note">توضیحات تصاویر</label>
                            <textarea class="note form-control" name="note" id="note" rows="3" style="height: 124px;" required>{{$images[0]['note'] ?? old('note')}}</textarea>
                        </fieldset>
                    </div>
                </div>
        </div>
    </div>
        <hr class="col-md-12">

        @isset($images)
        <div class="card">
            <div class="card-header" data-action="close">
                <h4 class="info mt-4 col-12 h2 calibri">تصاویر برای محصول</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    @foreach ($images as $image)
                        @foreach ($image['images'] as $img)
                            @foreach ($img as $item)
                                @foreach ($item as $key => $i)
                                    <div class="col-md-4 col-6 user-latest-img delete-parent-image" data-id="{{$product->id}}" data-file-name="{{$i}}">
                                        {{$key}}
                                        <a href="{{asset($i)}}" target="_blank">
                                            <img src="{{asset("$i")}}" class="img-fluid rounded-sm" alt="تصاویر محصول">
                                            <a title="حذف" class="btn btn-icon btn-sm bg-gradient-danger mr-1 mb-1 waves-effect waves-light delete-photo"
                                            data-route="/admin/ajax/" data-method="deleteImage" data-type="post">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </a>
                                    </div>
                                @endforeach
                            @endforeach
                        @endforeach
                    @endforeach

                </div>
            </div>
        </div>

        <hr class="col-md-12">

        @endisset
        <div class="card">
            <div class="card-footer">
                <div class="col-md-2  mt-3">
                    <button class="btn bg-gradient-primary waves-effect waves-light" type="submit"><i class="feather icon-check"></i> تایید </button>
                </div>
            </div>
        </div>
    </div>
</form>


@endsection
