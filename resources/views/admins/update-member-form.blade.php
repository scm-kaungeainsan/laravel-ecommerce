@extends('home')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12"></div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <form method="post" action="{{ route('update-user-profile') }}" class="form-container" enctype="multipart/form-data">
                    {{csrf_field()}}

                    <h1>Update Profile</h1>

                    <input type="hidden" name="id" value="{{ $user->id }}">

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
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="image" class="col-md-4 control-label">Profile Picture</label>

                        <div class="col-md-6">
                            <input id="image" type="file" class="form-control" name="image" required>

                            @if ($errors->has('image'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gender" class="col-md-4 control-label">Gender</label>
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" value="male">Male
                                <input class="form-check-input" type="radio" name="gender" value="female">Female
                            </div>


                            @if ($errors->has('gender'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                            @endif
                        </div>


                    </div>


                    <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                        <label for="dob" class="col-md-4 control-label">Date of Birth</label>

                        <div class="col-md-6">
                            <input id="dob" type="date" class="form-control" name="dob" value="{{ old('dob') }}" required autofocus>

                            @if ($errors->has('dob'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('dob') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="address" class="col-md-4 control-label">Address</label>

                        <div class="col-md-6">
                            <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                            @if ($errors->has('address'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>
                    {{--<td><a href="/update/{{$user->id}}">--}}
                    {{--<button>Update</button>--}}
                    {{--</a>--}}
                    {{--</td>--}}
                    <input type="submit" class="btn btn-danger btn-block" value="EDIT PROFILE">
                </form>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>

@endsection
