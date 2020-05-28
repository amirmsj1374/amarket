@component('admin.layouts.conntentComponent')
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">موجودی کالا</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="{{route('inventory.store')}}" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-4 col-12 mb-3">
                                        <div class="form-group row">
                                            <div class="col-md-4">
                                                <span>لیست دسته ها</span>
                                            </div>
                                            <div class="col-md-8 form-group">
                                                <select name="categoryId"
                                                        class="select2 max-length form-control  @error('categoryId') is-invalid @enderror"
                                                        id="parent">
                                                    {{-- @foreach($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach --}}
                                                </select>
                                                @error('categoryId')
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
                                                <span>ویژگی</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="attribute"
                                                       class="form-control @error('attribute') is-invalid @enderror"
                                                       name="attribute" placeholder="ویژگی" required>
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
                                    <div class="col-md-12">
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

