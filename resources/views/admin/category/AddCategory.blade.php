@component('admin.layouts.conntentComponent')
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">اضافه کردن دسته بندی</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal" action="{{route('category.store')}}" method="post">
                                @csrf
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4 col-12 mb-3">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>نام دسته</span>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="category" class="form-control @error('category') is-invalid @enderror" name="category" placeholder="دسته بندی" required>
                                                    @error('category')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <div class="form-group row">
                                                <div class="col-md-4">
                                                    <span>لیست دسته ها</span>
                                                </div>
                                                <div class="col-md-8 form-group">
                                                    <select name="parent" class="select2 max-length form-control  @error('category') is-invalid @enderror" id="parent">
                                                        <option value="none">بدون زیرمجموعه</option>

                                                            @foreach($categories as $category)
                                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                            @endforeach
                                                     </select>
                                                    @error('parent')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{$message}}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-12 mb-3">
                                            <div class="form-group row">
                                                <div class="col-md-12">
                                                    <div class="col-md-4">
                                                        <fieldset>
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="custom-control-input" checked="" name="IsActive" id="customCheck1">
                                                                <label class="custom-control-label" for="customCheck1">وضعیت</label>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                                <button type="submit" class="btn btn-primary mr-1 mb-1 waves-effect waves-light">Submit</button>
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
