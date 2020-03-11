@extends('templates.default')
@section('content')
    <h3>Воити на сайт </h3>
    <div class="row">
        <div class="col-lg-4 mx-auto">
            <form method="post" action="{{route('auth.signin')}}" novalidate>
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
                <div class="custom-control custom-checkbox mb-3">
                    <input type="checkbox" name="remember" class="custom-control-input" id="remember">
                    <label class="custom-control-label" for="remember">Запомнить меня</label>
                </div>

                <button type="submit" class="btn btn-primary">Войти</button>
            </form>
        </div>
    </div>
@endsection

