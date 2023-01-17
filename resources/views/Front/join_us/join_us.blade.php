@extends('layout.front.index')
@section('title')
Join us
@endsection

@section('content')
<div class="container">






    @if ($message = Session::get('status'))
    <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if (app()->getLocale() == "en")
    <div class="row" style="margin: 10%">
        <div class="col-lg-6" style="padding:50px">
            <div class="img">
                <img src="{{ asset('images/logo.png') }}" width="100" height="100" style="margin: auto" alt="">
            </div>
            <div class="conent text-center" style="margin-top: 30px">
                <h1 style="font-size: 25px">@lang('auth.join_us_title')</h1>
                <p style="word-break: break-all;font-size:17px">@lang('auth.join_us_description')</p>
            </div>
        </div>
        <div class="col-lg-6" style="padding:50px">
            <form action="{{ route('join-us.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="">@lang('auth.input_name')</label>
                    <input type="text" name="name" class="form-control" placeholder="@lang('auth.input_name')">
                    @error('name')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">@lang('auth.input_email')</label>
                    <input type="email" name="email" class="form-control" placeholder="@lang('auth.join_us_title')">
                    @error('email')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">@lang('auth.input_phone')</label>
                    <input type="number" name="phone" class="form-control" placeholder="@lang('auth.input_phone')">
                    @error('phone')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">@lang('auth.input_city')</label>
                    <select name="city" class="form-control" id="">
                        <option value="اختار مدينة ">@lang('auth.input_select')</option>
                        <option value="@lang('auth.input_select_option1')">@lang('auth.input_select_option1')</option>
                        <option value="@lang('auth.input_select_option2')">@lang('auth.input_select_option2')</option>
                        <option value="@lang('auth.input_select_option3')">@lang('auth.input_select_option3')</option>
                        <option value="@lang('auth.input_select_option4')">@lang('auth.input_select_option4')</option>
                        <option value="@lang('auth.input_select_option5')">@lang('auth.input_select_option5')</option>
                        <option value="@lang('auth.input_select_option6')">@lang('auth.input_select_option6')</option>
                    </select>
                    @error('city')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">@lang('auth.input_cv')</label>
                    <input type="file" name="cv" id = 'cv' class="form-control" accept=".jpg,.jpeg,.doc,.docx,.pdf">
                    @error('cv')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-dark" value="@lang('auth.input_submit')">
                </div>
            </form>
        </div>
    </div>
    @endif
    @if (app()->getLocale() == "ar")
    <div dir="rtl" class="row" style="margin: 10%">
        <div class="col-lg-6" style="padding:50px">
            <form action="{{ route('join-us.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">@lang('auth.input_name')</label>
                    <input type="text" name="name" class="form-control" placeholder="@lang('auth.input_name')">
                    @error('name')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">@lang('auth.input_email')</label>
                    <input type="email" name="email" class="form-control" placeholder="@lang('auth.join_us_title')">
                    @error('email')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">@lang('auth.input_phone')</label>
                    <input type="number" name="phone" class="form-control" placeholder="@lang('auth.input_phone')">
                    @error('phone')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">@lang('auth.input_city')</label>
                    <select name="city" class="form-control" id="">
                        <option value="اختار مدينة ">@lang('auth.input_select')</option>
                        <option value="@lang('auth.input_select_option1')">@lang('auth.input_select_option1')</option>
                        <option value="@lang('auth.input_select_option2')">@lang('auth.input_select_option2')</option>
                        <option value="@lang('auth.input_select_option3')">@lang('auth.input_select_option3')</option>
                        <option value="@lang('auth.input_select_option4')">@lang('auth.input_select_option4')</option>
                        <option value="@lang('auth.input_select_option5')">@lang('auth.input_select_option5')</option>
                        <option value="@lang('auth.input_select_option6')">@lang('auth.input_select_option6')</option>
                    </select>
                    @error('city')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">@lang('auth.input_cv')</label>
                    <input type="file" name="cv" id = 'cv' class="form-control" accept=".jpg,.jpeg,.doc,.docx,.pdf">
                    @error('cv')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-dark" value="@lang('auth.input_submit')">
                </div>
            </form>
        </div>
        <div class="col-lg-6" style="padding:50px">
            <div class="img">
                <img src="{{ asset('images/logo.png') }}" width="100" height="100" style="margin: auto" alt="">
            </div>
            <div class="conent text-center" style="margin-top: 30px">
                <h1 style="font-size: 25px">@lang('auth.join_us_title')</h1>
                <p style="word-break: break-all;font-size:17px">@lang('auth.join_us_description')</p>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection
