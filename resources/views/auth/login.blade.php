@extends('layouts.web')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 top30">
                    <div class="form" >
                      <form class="login-form" method="POST" action="{{ url('/login') }}">
                      <div class="wv-button-group">
                          <button class="wv-button wv-button--facebook"><i class="fa fa-facebook"></i><span>Facebook</span></button>
                          <button class="wv-button wv-button--google"><i class="fa fa-google"></i><span>Google</span></button>
                              </div>

                         {{ csrf_field() }}
                         <div class="input-text-register form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                          <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                             <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
                          </div>
                               @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        <div class="input-text-register form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <div class="input-group">
                                  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-circle-o" aria-hidden="true"></i></span>
                                <input id="password" type="password" class="form-control" name="password">
                              </div>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                        <button class="login">Đăng Nhập</button>
                        <p class="message">Chưa đăng ký? <a href="{{ URL::to('/register') }}">Tạo tài khoản</a></p>
                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Quên mật khẩu?</a>
                      </form>
                    </div>
    </div>
</div>
@endsection
