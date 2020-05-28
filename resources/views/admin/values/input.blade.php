@component('admin.layouts.conntentComponent')

<form action="{{url("admin/values/$id")}}" method="post" enctype="multipart/form-data">

    @csrf

    @if ($attributes[0]->value['value'])
        @method('PUT')
    @endif


    <div class="card">
        <div class="card-header">
           <h5>نام محصول :  {{$categories['title']}}</h5>
          </div>
        <div class="card-title">

        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($attributes as $key=>$attribute)
                @if($attribute->IsActive)
                    @if ($attribute['type'] == 'brief')
                        <div class="col-md-4">
                            <fieldset class="form-group">
                                <label for="{{$attribute['id']}}">{{$attribute['name']}}</label>
                                <input type="text" name="{{$attribute['id']}}" id="{{$attribute['id']}}" class="form-control" placeholder="{{$attribute['name']}}" value="{{$attribute->value['value'] ?? old($attribute['id'])}}">
                            </fieldset>
                        </div>

                    <hr class="col-md-12">

                    @elseif ($attribute['type'] == 'interpretive')
                        <div class="col-12 mt-2">
                            <fieldset class="form-group">
                                <label for="{{$attribute['id']}}">{{$attribute['name']}}</label>
                                <textarea class="description form-control" name="{{$attribute['id']}}" id="{{$attribute['id']}}" placeholder="{{$attribute['name']}}" rows="3" style="height: 124px;" required>{{$attribute->value['value'] ?? old($attribute['id'])}}</textarea>
                            </fieldset>
                        </div>

                    <hr class="col-md-12">

                    @elseif($attribute['type'] =='Selected')

                        <div class="col-md-4 form-group mt-2">
                            <label for="{{$attribute['id']}}">{{$attribute['name']}}</label>
                            <select class="select2 form-control select2-hidden-accessible" name="{{$attribute['id']}}"  data-select2-id="7" tabindex="-1" aria-hidden="true">
                                @foreach(ShowOption($attribute['id']) as $item)
                                  <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('caregory')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                            @enderror
                        </div>
                    @endif
                @endif
            @endforeach
                <input type="hidden" name="product_id" id="product_id" class="form-control" value="{{$id}}">
                <hr class="col-md-12 ">
                <div class="col-sm-6 col-md-2 ">
                    <button class="btn  bg-gradient-primary " type="submit"><i class="feather icon-check"></i> تایید </button>
                </div>
            </div>
        </div>
    </div>


</form>

@endcomponent
