@extends('layout.front.index')
@section('title')
   Log In
@endsection
@section('content')
    @if (app()->getLocale() == "ar")
    <div class="container login" style=";margin=50% !important;" dir="rtl">
        <div class="row" style="margin=150px 0 !important;display:flex;align-items:center">
            <div class="col-lg-6">
                <div class="img">
                    <img src="{{ 'images/posts/login.png' }}"alt="logo_v2.png">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
               <div class="login-form-box">
                  {{-- <p>
                     If you have an account with us, please log in.
                  </p> --}}
                  <form method="POST" action="{{ route('login') }}">
                     @csrf
                     <!-- SET THIS EMPTY INPUT FORM MORE SECURITY  -->
                        <input type="hidden" name="input" value="">
                     <div class="form-group  w-100">
                        <div class="input-group w-100 @error('email') has-error @enderror" style="width: 100%">
                           {{-- <span class="input-group-addon">
                              <span class="icon icon-person_outline"></span>
                           </span> --}}
                           <label for="">@lang('auth.input_email')</label>
                           <input id="email" type="email" class="form-control w-100" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                           @error('email')
                           <span class="form-control-hint" role="alert">
                              <strong>{{ $message }}</strong></span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-group @error('password') is-invalid @enderror" style="width: 100%">
                        <div class="input-group">
                           {{-- <span class="input-group-addon">
                              <span class="icon icon-lock_outline"></span>
                           </span> --}}
                           <label for="">@lang('auth.input_password')</label>
                              <input id="password" type="password" class="form-control " name="password" placeholder="Password" required autocomplete="current-password">

                              @error('password')
                              <span class="form-control-hint" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                              @enderror

                        </div>
                     </div>
                     <div class="row" style="margin-top:20px">
                        <div class="col-md-12 col-lg-3" style="float:right">
                           <button type="submit" class="btn" onclick="document.getElementById('form-returning').submit();">
                              @lang('auth.input_signIn')
                           </button>
                           {{-- <div class="checkbox-group pull-right" style="margin-top:20px">
                              <input type="checkbox" class="form-check" name="remember" id="checkBox2" {{ old('remember') ? 'checked' : '' }}>
                              <label for="checkBox2"> --}}
                                 {{-- <span class="check"></span>
                                 <span class="box"></span> --}}
                                 {{-- Remember me
                              </label> --}}
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-9" style="float:right" dir="ltr">
                           <ul class="additional-links">
                              <li>
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       {{ __('Forgot Your Password?') }}
                                    </a>
                                 @endif
                              </li>

                           </ul>

                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
       </div>
       @else
       <div class="container login" style=";margin=50% !important;">
        <div class="row" style="margin=150px 0 !important;display:flex;align-items:center">
            <div class="col-lg-6">
                <div class="img">
                    <img src="{{ 'images/posts/login.jpg' }}" alt="test.png">
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
               <div class="login-form-box">
                  {{-- <p>
                     If you have an account with us, please log in.
                  </p> --}}
                  <form method="POST" action="{{ route('login') }}">
                     @csrf
                     <!-- SET THIS EMPTY INPUT FORM MORE SECURITY  -->
                        <input type="hidden" name="input" value="">
                     <div class="form-group  w-100">
                        <div class="input-group w-100 @error('email') has-error @enderror" style="width: 100%">
                           {{-- <span class="input-group-addon">
                              <span class="icon icon-person_outline"></span>
                           </span> --}}
                           <label for="">@lang('auth.input_email')</label>
                           <input id="email" type="email" class="form-control w-100" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                           @error('email')
                           <span class="form-control-hint" role="alert">
                              <strong>{{ $message }}</strong></span>
                           @enderror
                        </div>
                     </div>
                     <div class="form-group @error('password') is-invalid @enderror" style="width: 100%">
                        <div class="input-group">
                           {{-- <span class="input-group-addon">
                              <span class="icon icon-lock_outline"></span>
                           </span> --}}
                           <label for="">@lang('auth.input_password')</label>
                              <input id="password" type="password" class="form-control " name="password" placeholder="Password" required autocomplete="current-password">

                              @error('password')
                              <span class="form-control-hint" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                              @enderror

                        </div>
                     </div>
                     <div class="row" style="margin-top:20px">
                        <div class="col-md-12 col-lg-3">
                           <button type="submit" class="btn" onclick="document.getElementById('form-returning').submit();">
                              @lang('auth.input_signIn')
                           </button>
                           {{-- <div class="checkbox-group pull-right" style="margin-top:20px">
                              <input type="checkbox" class="form-check" name="remember" id="checkBox2" {{ old('remember') ? 'checked' : '' }}>
                              <label for="checkBox2"> --}}
                                 {{-- <span class="check"></span>
                                 <span class="box"></span> --}}
                                 {{-- Remember me
                              </label>
                           </div> --}}
                        </div>
                        <div class="col-md-12 col-lg-9">
                           <ul class="additional-links">
                              <li>
                                 @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                       {{ __('Forgot Your Password?') }}
                                    </a>
                                 @endif
                              </li>

                           </ul>

                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
       </div>
    @endif
@endsection
