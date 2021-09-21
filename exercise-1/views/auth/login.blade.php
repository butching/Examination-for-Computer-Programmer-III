@extends(backpack_view('layouts.plain'))

@section('content')
    <div class="row justify-content-center body-bgimage">
        <div class="col-12 col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>{{ trans('backpack::base.login') }}</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <form class="p-t-10" role="form" method="POST" action="{{ route('backpack.auth.login') }}">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend"><span class="input-group-text" title="E-mail"><i class="la la-envelope"></i></span></div>
                                    <input class="form-control{{ $errors->has($username) ? ' is-invalid' : '' }} brown" name="{{ $username }}" value="{{ old($username) }}" id="{{ $username }}" type="text" placeholder="E-mail">
                                    @if ($errors->has($username))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first($username) }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend"><span class="input-group-text" title="Password"><i class="la la-lock"></i></span></div>
                                    <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} brown" type="password" name="password" id="password" placeholder="Password">
                                    <div class="input-group-append"><span class="input-group-text" title="Password"><i id="toggle-password" toggle="#password" class="la la-eye-slash"></i></span></div>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group">
                                <div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> {{ trans('backpack::base.remember_me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row">
                                <div class="col-5">
                                    <button class="btn btn-primary px-4" type="submit">{{ trans('backpack::base.login') }}</button>
                                </div>
                                @if (backpack_users_have_email())
                                <div class="col-7 text-right">
                                    <a href="{{ route('backpack.auth.password.reset') }}" class="btn btn-link px-0">{{ trans('backpack::base.forgot_your_password') }}</a>
                                </div>
                                @endif
                            </div>
                        </form>
                        <div class="col-12">
                            <a href="{{ route('backpack.auth.register') }}" class="btn btn-link active mt-3 d-block d-lg-none">{{ trans('backpack::base.register') }}</a>
                        </div>
                    </div>
                </div>
                
                <div class="card text-white bg-ni-yuri py-5 d-md-down-none" style="width:44%">
                    <div class="card-body align-items-center d-flex justify-content-center">
                        <div class="login_logo">
                            <img src="/images/logo_pf.svg" class="w-100">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
