@extends('templates.default')
@section('content')
    <h3>Registration</h3>
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <form method="post" action="{{route('auth.signup')}}" novalidate>
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}"
                           id="email" placeholder="enter email"
                           value="{{Request::old('email') ? : ''}}">

                    @if($errors->has('email'))
                        <span class="help-block text-danger">
                            {{$errors->first('email')}}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="username">Login</label>
                    <input type="text" name="username" class="form-control {{$errors->has('username') ? 'is-invalid' : ''}}"
                           id="username" placeholder="enter nick name"
                           value="{{Request::old('username') ? : ''}}">

                    @if($errors->has('username'))
                        <span class="help-block text-danger">
                             {{$errors->first('username')}}
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password"
                           class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="password"
                           placeholder="min 6 characters">

                    @if($errors->has('password'))
                        <span class="help-block text-danger">
                            {{$errors->first('password')}}
                         </span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>
    </div>
@endsection
