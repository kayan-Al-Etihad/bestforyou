@extends('layout.front.index')
@section('title')
Franchise
@endsection

@section('content')
<div class="container">






    @if ($message = Session::get('status'))
    <div class="alert alert-success alert-block text-right">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if (app()->getLocale() == "en")
    <div class="row" style="margin: 10%">
        <h1 style="text-align: center; font-size:40px ;color:black;">@lang('auth.franchiser_title')</h1>
        <div class="col-lg-6" style="padding:50px">
            {{-- <div class="img">
                <img src="{{ asset('images/logo.png') }}" width="100" height="100" style="margin: auto" alt="">
            </div> --}}
            @if(app()->getLocale() == 'ar')
            <div class="conent text-right" style="margin-top: 30px">
                {{-- <h1 style="font-size: 25px"> franchise</h1> --}}
                <p style="word-break: break-word;;font-size:17px">
                    @lang('auth.franchiser_description').
                </p>
            </div>
            @else
            <div class="conent" style="margin-top: 30px">
                {{-- <h1 style="font-size: 25px"> franchise</h1> --}}
                <p style="word-break: break-word;;font-size:17px">
                    @lang('auth.franchiser_description').
                </p>
            </div>
            @endif
        </div>
        <div class="col-lg-6" style="padding:50px">
            <form action="{{ route('franchise.store') }}" method="post">
                @csrf
                <div class="form-group text-right">
                    <label for="">@lang('auth.input_name')</label>
                    <input type="text" name="name" class="form-control text-right" placeholder="@lang('auth.input_name')">
                    @error('name')
                    <span class=" invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="">@lang('auth.input_email')</label>
                    <input type="email" name="email" class="form-control text-right" placeholder="@lang('auth.input_email')">
                    @error('email')
                    <span class=" invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="">@lang('auth.input_phone')</label>
                    <input type="number" name="phone" class="form-control text-right" placeholder="@lang('auth.input_phone')">
                    @error('phone')
                    <span class=" invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="">@lang('auth.input_city')</label>
                    <select name="city" class="form-control text-right" id="">
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
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-dark" value="@lang('auth.input_submit')">
                </div>
            </form>
        </div>
    </div>
    @endif
    @if (app()->getLocale() == "ar")
    <div dir="rtl" class="row" style="margin: 10%">
        <h1 style="text-align: center; font-size:40px ;color:black;">@lang('auth.franchiser_title')</h1>
        <div class="col-lg-6" style="padding:50px">
            <form action="{{ route('franchise.store') }}" method="post">
                @csrf
                <div class="form-group text-right">
                    <label for="">@lang('auth.input_name')</label>
                    <input type="text" name="name" class="form-control text-right" placeholder="@lang('auth.input_name')">
                    @error('name')
                    <span class=" invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="">@lang('auth.input_email')</label>
                    <input type="email" name="email" class="form-control text-right" placeholder="@lang('auth.input_email')">
                    @error('email')
                    <span class=" invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="">@lang('auth.input_phone')</label>
                    <input type="number" name="phone" class="form-control text-right" placeholder="@lang('auth.input_phone')">
                    @error('phone')
                    <span class=" invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="">@lang('auth.input_city')</label>
                    <select name="city" class="form-control text-right" id="">
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
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-dark" value="@lang('auth.input_submit')">
                </div>
            </form>
        </div>
        <div class="col-lg-6" style="padding:50px">
            {{-- <div class="img">
                <img src="{{ asset('images/logo.png') }}" width="100" height="100" style="margin: auto" alt="">
            </div> --}}
            @if(app()->getLocale() == 'ar')
            <div class="conent text-right" style="margin-top: 30px">
                {{-- <h1 style="font-size: 25px"> franchise</h1> --}}
                <p style="word-break: break-word;;font-size:17px">
                    @lang('auth.franchiser_description').
                </p>
            </div>
            @else
            <div class="conent" style="margin-top: 30px">
                {{-- <h1 style="font-size: 25px"> franchise</h1> --}}
                <p style="word-break: break-word;;font-size:17px">
                    @lang('auth.franchiser_description').
                </p>
            </div>
            @endif
        </div>
    </div>
    @endif
</div>
@endsection
