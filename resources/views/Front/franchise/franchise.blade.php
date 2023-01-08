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

    <div class="row" style="margin: 10%">
        <h1 style="text-align: center; font-size:40px ;color:black;">حق الامتياز</h1>
        <div class="col-lg-6" style="padding:50px">
            {{-- <div class="img">
                <img src="{{ asset('images/logo.png') }}" width="100" height="100" style="margin: auto" alt="">
            </div> --}}
            <div class="conent text-center" style="margin-top: 30px">
                {{-- <h1 style="font-size: 25px"> franchise</h1> --}}
                <p style="word-break: break-word;;font-size:17px">لعقد الفرنشايز أهمية كبيرة كأداة تساعد على الإنماء
                    الاقتصادي والتجاري، إذ يسـاهم
                    هذا العقد في توفير فرص عمل للأيدي العاملة المحلية وتطويرها، بالإضافة إلى أن لهذا العقـد
                    أهمية كبيرة بالنسبة لأطرافه فهو من جانب يساعد المانح " صاحب المشـروع " علـى توسـيع
                    دائرة نشاطه من خلال منح الطرف الآخر وهو الممنوح له الحق في استغلال المعرفـة الفنيـة
                    والعلامة التجارية الخاصة بمنتجاته، وبهذا فإن المانح يتغلب على تعقيد عملية إدارة فروع جديدة
                    قد تتطلب إدارتها رأس مال كبير، و بنفس الوقت المحافظة على جودة المنتجات التـي ينتجهـا
                    الممنوح له من خلال الرقابة التي يفرضها المانح ما يضمن له المحافظة علـى سـمعة المنـتج
                    الخاص به، بالإضافة إلى الافادة المادية من المبالغ التي تدفع له من قبل الممنوح لـه، بالمقابـل
                    الممنوح له يستفيد من اسم المانح وشهرته وذلك ما يوفر عليه الجهد والوقت ليضـمن فـرص
                    نجاح شبه مؤكدة. </p>
            </div>
        </div>
        <div class="col-lg-6" style="padding:50px">
            <form action="{{ route('franchise.store') }}" method="post">
                @csrf
                <div class="form-group text-right">
                    <label for="">الاسم</label>
                    <input type="text" name="name" class="form-control text-right" placeholder="الاسم">
                    @error('name')
                    <span class=" invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="">البريد الالكتروني</label>
                    <input type="email" name="email" class="form-control text-right" placeholder="البريد الالكتروني">
                    @error('email')
                    <span class=" invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="">رقم الهاتف</label>
                    <input type="number" name="phone" class="form-control text-right" placeholder="رقم الهاتف">
                    @error('phone')
                    <span class=" invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group text-right">
                    <label for="">المدينة</label>
                    <select name="city" class="form-control text-right" id="">
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
                {{-- <div class="form-group text-right">
                    <label for="">السيرة الذاتية</label>
                    <input type="file" name="cv" id='cv' class="form-control text-right"
                        accept=".jpg,.jpeg,.doc,.docx,.pdf">
                    @error('cv')
                    <span class=" invalid-feedback">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div> --}}
                <div class="form-group text-right">
                    <input type="submit" class="btn btn-dark" value="ارسال">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
