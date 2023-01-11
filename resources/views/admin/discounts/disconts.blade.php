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
                    <li class="breadcrumb-item active">Discounts</li>
                </ol>
            </nav>
            <h1 class="m-0">Discounts</h1>
        </div>
    </div>
</div>

<div class="container-fluid page__container">
    <div class="card">

        <div class="table-responsive">

            <table class="table mb-0 thead-border-top-0 table-striped">
                <thead>
                    <tr>
                        <th >Imagee</th>
                        <th >Created at</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody class="list"
                       id="products">
                    @foreach($images as $image)

                    <tr>
                        <td >
                            <img src="../../../images/{{ $image->image }}" width="200" height="200" alt="">
                        </td>
                        <td >{{ $image->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('discounts.edit', $image->id) }}" class="btn btn-dark mx-1 mt-3">
                                Edit
                            </a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>



    </div>
</div>

</div>



 @endsection
