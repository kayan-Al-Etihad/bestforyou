@extends('layout.admin.app')
@section('content')



<div class="container-fluid page__heading-container">
    <div class="page__heading">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                <li class="breadcrumb-item">UI Components</li>
                <li class="breadcrumb-item active"
                    aria-current="page">Add Products</li>
            </ol>
        </nav>

        <h1 class="m-0">Add Products</h1>
    </div>
</div>

<div class="container-fluid page__container">



    <div class="card card-form">
        <div class="row no-gutters">
            {{-- ========================add Products=============================== --}}
            <form method="post" action="{{ route('product.store') }}" id="product_form" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="row">
                   <div class="col-xs-12 col-md-12 col-lg-12">
                      <div class="form-group col-md-6 col-lg-6 col-xs-12">
                         <label class="control-label no-padding-right" for="product_name"> Product Name </label>
                         <div class="clearfix">
                            <input placeholder="Product Name" name="product_name" value="{{ old('product_name') }}"
                               id="product_name" class="form-control" type="text">
                         </div>
                      </div>
                      <div class="form-group col-md-6 col-lg-6 col-xs-12">
                         <label class="control-label no-padding-right" for="product_type"> Product type </label>
                         <div class="clearfix">
                               <select name="product_type" class="form-control"  id="">
                                <option value="">Choose type</option>
                                <option value="best-seller">best-seller</option>
                                <option value="special-product">special-product</option>
                                <option value="none">none</option>
                               </select>
                         </div>
                      </div>
                      <div class="form-group col-md-6 col-lg-6 col-xs-12">
                         <label class="control-label no-padding-right" for="made_in"> Made IN: </label>
                         <div class="clearfix">
                            <input placeholder="Made IN" name="made_in" value="{{ old('made_in') }}" id="made_in"
                               class="form-control" type="text">
                         </div>
                      </div>
                      {{-- ===================== product ranking ======================= --}}
                      {{-- <div class="form-group col-md-6 col-lg-6 col-xs-12">
                         <label class=" control-label no-padding-right" for="brand_id">Choose your product ranking</label>
                         <div class="clearfix">
                            <select name="product_ranking" id="product_ranking" class="form-control">
                               <option value="" disabled selected>Choose your product ranking</option>
                               @foreach ($product_ranking as $ranking)
                                  <option {{ old('product_ranking') == $ranking->id ? 'selected' : '' }}
                                     value="{{ $ranking->id }}">{{ $ranking->product_ranking }}</option>
                               @endforeach
                            </select>
                         </div>
                      </div> --}}
                      {{-- =====================End product ranking ======================= --}}
                      <div class="form-group col-md-6 col-lg-6 col-xs-12">
                         <label class=" control-label no-padding-right" for="brand_id">Choose your brands</label>
                         <div class="clearfix">
                            <select name="brand_id" id="brand_id" class="form-control">
                               <option value="" disabled selected>Choose your brands</option>
                               @foreach ($brands as $brand)
                                  <option {{ old('brand_id') == $brand->brand_id ? 'selected' : '' }}
                                     value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                               @endforeach
                            </select>
                         </div>
                      </div>
                      <div class="form-group col-md-6 col-lg-6 col-xs-12">
                         <label class=" control-label no-padding-right" for="category_id">Choose your Category</label>
                         <div class="clearfix">
                            <select name="category_id" id="category_id" class="form-control">
                               <option value="" disabled selected>Choose your Category</option>
                               @foreach ($categories as $category)
                                     <optgroup label="{{ $category->category_name }}">
                                        <option value="{{ $category->category_id }}">{{ $category->category_name }}</option>
                                        <option>
                                            @if ($category->parent_id != null)
                                                <span>
                                                    Parent: {{ !$category->parent_id ? '--'.$category->parent->category_name : $category->parent->category_name }}
                                                </span>
                                            @endif
                                        </option>
                                      </optgroup>
                               @endforeach
                            </select>
                         </div>
                      </div>
                      <div class="form-group col-md-6 col-lg-6 col-xs-12">
                         <div class="clearfix">
                            <input type="hidden" name="product_id" value="">
                         </div>
                      </div>
                      <div class="form-group col-md-6 col-lg-6  col-xs-12">
                         <label class=" control-label no-padding-right" for="product_slug"> Product Slug </label>
                         <div class="clearfix">
                            <input placeholder="Product Slug" id="product_slug" name="product_slug"
                               value="{{ old('product_slug') }}" class="form-control" type="text">
                         </div>
                      </div>
                   </div>

                   <div class="form-group col-xs-12 col-md-12 col-lg-12">
                      <div class="form-group col-xs-6 col-md-6 col-lg-3">
                         <label class=" control-label no-padding-right" for="sale_price"> Sell Price </label>
                         <div class="clearfix">
                            <input placeholder="Sell Price" name="sale_price" value="{{ old('sale_price') }}"
                               id="sale_price" class="form-control" min="0" type="number">
                         </div>
                      </div>
                      <div class="form-group col-xs-6 col-md-6 col-lg-3">
                         <label class=" control-label no-padding-right" for="buy_price"> Buy Price </label>
                         <div class="clearfix">
                            <input placeholder="Buy Price" name="buy_price" value="{{ old('buy_price') }}" id="buy_price"
                               class="form-control" min="0" type="number">
                         </div>
                      </div>
                      <div class="form-group col-xs-6 col-md-6 col-lg-3">
                         <label class=" control-label no-padding-right" for="quantity">Quantity</label>
                         <div class="clearfix">
                            <input placeholder="Quantity" type="number" value="{{ old('quantity') }}" min="0"
                               name="quantity" class="form-control" id="quantity">
                         </div>
                      </div>
                      <div class="form-group col-xs-6 col-md-6 col-lg-3">
                         <label class=" control-label no-padding-right" for="quantity">sku</label>
                         <div class="clearfix">
                            <input placeholder="sku" type="number" value="{{ old('quantity') }}" min="0"
                               name="sku" class="form-control" id="sku">
                         </div>
                      </div>
                      <div class="form-group col-xs-6 col-md-6 col-lg-3">
                         <label for="weight">Weight</label>
                         <div class="clearfix">
                            <input placeholder="weight" type="number" value="{{ old('weight') }}" min="0"
                               name="weight" class="form-control" id="weight">
                         </div>
                      </div>
                   </div>
                   <div class="col-xs-12 form-group col-md-12 col-lg-10" style="margin: 1%">
                      <label for="description">Description</label>
                      <div class="clearfix">
                         <textarea id="description" rows="6" class="form-control" name="description">{{ old('description') }}</textarea>
                      </div>
                   </div>
                   <div class="form-group col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <div class="center col-xs-6 col-sm-6 col-lg-8 col-md-6">

                         <div class="form-group {{ $errors->has('cover') ? 'has-error' : '' }}">
                            <label class="bolder bigger-110 " for="brand_image">Cover</label>

                            <input type="file" name="cover" class="form-control" id="cover">

                            <span class="text-danger">{{ $errors->first('cover') }}</span>
                         </div>
                         <img id="show_image" src="" alt="" width="200" height="100"
                            class="img-responsive img-thumbnail">
                      </div>

                      <div class="col-sm-6 col-md-6 col-lg-3 col-xs-12">

                         <label hidden>
                            <h4>Available ? </h4>
                            <input type="checkbox" name="status" id="status" onclick="showMe()"
                               class="ace ace-switch ace-switch-5" {{ old('status') == 'on' ? 'checked' : '' }} checked>
                            <span class="lbl"></span>
                         </label>
                         <br>
                         {{-- <label><h4>Discount ?</h4>
                         <input type="checkbox" name="is_off" id="is_off" onclick="showDiscount()"
                                 class="ace ace-switch ace-switch-5" {{ old('is_off') == 'on' ? 'checked' :'' }}>
                         <span class="lbl"></span>
                     </label> --}}
                         {{-- <div class="form-group">
                         <label class="" for="has_size">
                             <h4>Has Size ? </h4>
                             <input type="checkbox" name="has_size" id="has_size"
                                     class="ace ace-switch ace-switch-5 form-control"
                                     {{ old('has_size') == 'on' ? 'checked': '' }}>
                             <span class="lbl"></span>
                         </label>
                     </div> --}}
                      </div>

                      <div class="col-sm-6 col-lg-6 col-md-6 col-xs-12">
                         <div class="available0" style="display:none ">
                            <label for="data_available"><b>Available Date</b></label>
                            <input id="data_available" name="data_available" class="form-control"
                               value="{{ old('data_available') }}" type="date" />
                         </div>

                         <div class="div-discount" style="display:none ">
                            <label for="off_price"><b>Amount of Discount:</b></label>
                            <input id="off_price" name="off_price" class="form-control" min="0"
                               value="{{ old('off_price', 0) }}" type="number">
                         </div>
                      </div>

                   </div>
                   <hr>
                   <div class="form-group" style="margin: 3%">
                      <div class="btn-group btn-group-justified">
                         <div class="btn-group">
                            <input type="submit" class="btn btn-info" value="SAVE">
                         </div>
                         <div class="btn-group">
                            <a class="btn btn-danger" href="{{ route('product.index') }}" onclick="history.back()">BACK</a>
                         </div>
                      </div>
                   </div>

                </div>
             </form>
             {{-- ======================== End add Products=============================== --}}
             @if (\Session::has('success'))
                <div class="alert alert-success">
                   <ul>
                      <li>{!! \Session::get('success') !!}</li>
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
