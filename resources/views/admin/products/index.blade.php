@extends('layout.admin.app')
@section('title')
   @lang('models/products.plural') @lang('ext.list')
@stop
@section('content')


<div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-center">
        <div class="flex">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                    <li class="breadcrumb-item active">Products</li>
                </ol>
            </nav>
            <h1 class="m-0">Products</h1>
        </div>
    </div>
</div>

<div class="container-fluid page__container">
    <div class="card">

        <div class="table-responsive">
            <table class="table mb-0 thead-border-top-0 table-striped">
                <thead>
                    <tr>



                        <th style="width: 30px;"
                        class="text-center">#ID</th>
                        <th>Product</th>
                        <th>Name</th>
                        {{-- <th class="text-center">Stock</th> --}}
                        <th class="">Category</th>
                        <th class="text-right">Price</th>
                        <th class="text-right">Product Type</th>
                        <th class="text-right">operatins</th>
                        {{-- <th style="width: 100px; text-align: right;">
                            <div class="dropdown pull-right">
                                <a href="#"
                                   data-toggle="dropdown"
                                   class="dropdown-toggle">Bulk</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="javascript:void(0)"
                                       class="dropdown-item"><i class="material-icons icon-18pt mr-1">work</i> Set Price</a>
                                    <a href="javascript:void(0)"
                                       class="dropdown-item"><i class="material-icons icon-18pt mr-1">archive</i> Archive</a>
                                </div>
                            </div>
                        </th> --}}
                    </tr>
                </thead>
                <tbody class="list"
                       id="products">

                 @foreach ($products as $product )



                    <tr>

                        <td>
                            <div class="badge badge-soft-dark">{{ $product->product_id }}</div>
                        </td>
                        <td>
                            <img src="{{ $product->cover}}"
                                 alt="product"
                                 style="width:35px"
                                 class="rounded mr-2">
                            <a href="#"></a>
                        </td>
                        {{-- <td style="width: 120px;"
                            class="text-center">
                            10 items</td> --}}
                        <td >{{ $product->product_name }}</td>
                        <td style="width:200px">

                            <a href="#">{{ $product->product_slug }}</a>

                        </td>

                        <td class="text-right">{{ $product->buy_price }}</td>
                        <td class="text-right">{{ $product->product_type }}</td>
                        <td class="text-right"><a href="{{route('product.edit',$product->product_id)}}"
                               class="btn btn-sm btn-primary">EDIT</td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="card-body text-right">
            {{ $products->links() }}
            {{-- 15 <span class="text-muted">of 25</span> <a href="#"
               class="text-muted-light"><i class="material-icons ml-1">arrow_forward</i></a> --}}
        </div>

    </div>
</div>

</div>



 @endsection
