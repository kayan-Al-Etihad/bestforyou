@extends('layout.admin.app')
@section('content')



<div class="container-fluid page__heading-container">
    <div class="page__heading">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                <li class="breadcrumb-item">Discount</li>
                <li class="breadcrumb-item active"
                    aria-current="page">Edit Discount images</li>
            </ol>
        </nav>

        <h1 class="m-0">Add Products</h1>
    </div>
</div>

<div class="container-fluid page__container">



    <div class="card card-form">
        <div class="row no-gutters">
            {{-- ========================add Products=============================== --}}
            <form method="post" action="/admin/discounts/{{ $discount->id }}" id="product_form" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="row">
                   <div class="col-xs-12 col-md-12 col-lg-12">
                      <div class="form-group col-md-6 col-lg-6 col-xs-12">
                         <label class="control-label no-padding-right" for="discount_image"> Product Name </label>
                         <div class="clearfix">
                               <img src="/images/{{ $discount->image }}" width="200" height="200" alt="{{ $discount->image }}">

                               <input name="image" type="file" class="form-control"
                               required value="{{ old('image', optional($discount ?? null)->image) }}">

                               <input name="id" type="hidden" class="form-control mt-3"
                                value="{{ $discount->id }}">

                               @error('image')
                                   <span class="invalid-feedback">
                                      <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                         </div>
                      </div>
                   </div>
                   <hr>
                   <div class="form-group" style="margin: 3%">
                      <div class="btn-group btn-group-justified">
                         <div class="btn-group">
                            <input type="submit" class="btn btn-info" value="Edit">
                         </div>
                         <div class="btn-group">
                            <a class="btn btn-danger" onclick="history.back()">BACK</a>
                         </div>
                      </div>
                   </div>

                </div>
            </form>
             {{-- ======================== End add Products=============================== --}}
             @if (\Session::has('message'))
                <div class="alert alert-success">
                   <ul>
                      <li>{!! \Session::get('message') !!}</li>
                   </ul>
                </div>
             @endif

        </div>
    </div>



    <!-- <div class="card card-form">
<div class="row no-gutters">
<div class="col-lg-4 card-body">
<p><strong class="headings-color">Basic Information</strong></p>
<p class="text-muted">Edit your account details and settings.</p>
</div>
<div class="col-lg-8 card-form__body card-body">

</div>
</div>
</div> -->
</div>

</div>


@endsection
