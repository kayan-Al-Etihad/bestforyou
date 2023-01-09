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

    <div class="row" style="margin: 10%">
        <div class="col-lg-6" style="padding:50px">
            <div class="img">
                <img src="{{ asset('images/logo.png') }}" width="100" height="100" style="margin: auto" alt="">
            </div>
            <div class="conent text-center" style="margin-top: 30px">
                <h1 style="font-size: 25px">Join us</h1>
                <p style="word-break: break-all;font-size:17px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique minima nesciunt obcaecati fugiat aut voluptatum error officia amet accusamus harum illum consectetur doloribus dicta possimus magnam ipsa inventore, accusantium non!</p>
            </div>
        </div>
        <div class="col-lg-6" style="padding:50px">
            <form action="{{ route('join-us.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Your Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Your Name">
                    @error('name')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                    @error('email')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input type="number" name="phone" class="form-control" placeholder="Phone">
                    @error('phone')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">City</label>
                    <select name="city" class="form-control" id="">
                        <option value="اختار مدينة ">اختار مدينة </option>
                        <option value="شرم">شرم</option>
                        <option value="القاهرة">القاهرة</option>
                        <option value="النيل">النيل</option>
                        <option value="النيل">الصعيد</option>
                        <option value="النيل">اسكندريه</option>
                        <option value="النيل">ذهب</option>
                        <option value="النيل">فيوم</option>
                        <option value="النيل">طابا</option>
                    </select>
                    @error('city')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Upload your cv</label>
                    <input type="file" name="cv" id = 'cv' class="form-control" accept=".jpg,.jpeg,.doc,.docx,.pdf">
                    @error('cv')
                        <span class=" invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-dark" value="Send">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
