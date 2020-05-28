@component('admin.layouts.conntentComponent')
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">ویژگی ها</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('attribute.store')}}" method="post">
                              @csrf
                                <div class="form-body">
                                                <div class="row">

                                                        <div class="col-md-3 col-12 mt-2">
                                                            <fieldset class="form-group">
                                                                    <label for="attribute">نام ویژگی</label>
                                                                    <input type="text" id="attribute"
                                                                        class="form-control @error('attribute') is-invalid @enderror"
                                                                        name="attribute" placeholder="ویژگی" required>
                                                                    @error('category')
                                                                        <span class="invalid-feedback" role="alert">
                                                                            <strong>{{$message}}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-md-3 col-12 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="category_id">انتخاب دسته</label>
                                                                    <select name="category_id"
                                                                            class="select2 max-length form-control  @error('category') is-invalid @enderror"
                                                                            id="category_id" required>
                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                    @error('category_id')
                                                                    <span class="invalid-feedback" role="alert">
                                                                            <strong>{{$message}}</strong>
                                                                        </span>
                                                                    @enderror
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-md-3 col-12 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="type">همگروهی</label>
                                                                <select class="form-control" name="attrsprent" id="attrsprent">
                                                                    <option value="0">بدون زیرمجموعه</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>

                                                        <div class="col-md-3 col-12 mt-2">
                                                            <fieldset class="form-group">
                                                                <label for="type">نوع ویژگی</label>
                                                                <select name="type" class="form-control" required>
                                                                    <option value="brief">مختصر</option>
                                                                    <option value="interpretive">توضیحی</option>
                                                                    <option value="Selected">انتخابی</option>
                                                                    <option value="option">زیرمجموعه</option>
                                                                </select>
                                                            </fieldset>
                                                        </div>
                                                </div>


                                                <div class="row">

                                                        <div class="col-md-2 col-12 mt-5">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <div class="col-md-4">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" name="IsActive" id="IsActive">
                                                                                <label class="custom-control-label" for="IsActive">وضعیت</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2 col-12 mt-5">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <div class="col-md-4">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" name="price" id="price">
                                                                                <label class="custom-control-label" for="price">قیمت</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2 col-12 mt-5">
                                                            <div class="form-group">
                                                                <div class="col-md-12">
                                                                    <div class="col-md-4">
                                                                        <fieldset>
                                                                            <div class="custom-control custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" name="qty" id="qty">
                                                                                <label class="custom-control-label" for="qty">موجودی</label>
                                                                            </div>
                                                                        </fieldset>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                </div>

                                                &nbsp;

                                        <div class="row">
                                            <div class="col-md-2">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">ثبت</button>
                                            </div>
                                        </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endcomponent

