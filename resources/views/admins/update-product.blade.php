@extends('home')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Update Product</div>
                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="/update-product" enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <input type="hidden" name="id" value="{{$product->id}}">

                            <div class="form-group">
                                {{--<label for="image" class="col-md-4 control-label">Profile Picture</label>--}}

                                <div class="col-md-6">
                                    <input id="image" type="file" class="form-control" name="image" required>

                                    @if ($errors->has('image'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">
                                <label for="brand" class="col-md-4 control-label">Brand</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="brand" value="{{ old('brand') }}" required>

                                    @if ($errors->has('brand'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('brand') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            {{--<div class="form-group{{ $errors->has('brand') ? ' has-error' : '' }}">--}}
                                {{--<label for="brand" class="col-md-4 control-label">Brand</label>--}}

                                {{--<div class="col-md-6">--}}
                                    {{--<input type="button" class="form-control btn btn-secondary dropdown-toggle" name="brand" value="{{ old('brand') }}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" required>--}}

                                    {{--@foreach($brands as $brand)--}}
                                        {{--<div class="dropdown-menu" aria-labelledby="brand">--}}
                                            {{--<a class="dropdown-item">{{ $brand->name }}</a>--}}
                                        {{--</div>--}}
                                    {{--@endforeach--}}

                                    {{--@if ($errors->has('brand'))--}}
                                        {{--<span class="help-block">--}}
                                        {{--<strong>{{ $errors->first('brand') }}</strong>--}}
                                    {{--</span>--}}
                                    {{--@endif--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Description</label>

                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" value="{{ old('description') }}" required autofocus>

                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                                    <div class="form-group col-md-4 pr-1">
                                        <input type="text" class="form-control" name="price" placeholder="Price">
                                        <span class="fas fa-dollar-sign position-absolute icon-position"></span>
                                    </div>

                                    <div class="form-group col-md-4 pl-1 pr-1">
                                        <input type="text" class="form-control" name="discount" placeholder="Discount">
                                    </div>

                                    <div class="form-group col-md-4 pl-1">
                                        <input type="text" class="form-control" name="stock" placeholder="Stock">
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-danger btn-block" value="update product">
                            {{--<div class="form-group">--}}
                                {{--<div class="col-md-6 col-md-offset-4">--}}
                                    {{--<button type="submit" class="btn btn-primary">--}}
                                        {{--Update Product--}}
                                    {{--</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
