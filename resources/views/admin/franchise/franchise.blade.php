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
                    <li class="breadcrumb-item active">Franchise</li>
                </ol>
            </nav>
            <h1 class="m-0">Franchise Messages</h1>
        </div>
    </div>
</div>

<div class="container-fluid page__container">
    <div class="card">

        <div class="table-responsive">

            <table class="table mb-0 thead-border-top-0 table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th >Email</th>
                        <th >Phone</th>
                        <th >City</th>
                        <th >Created at</th>
                    </tr>
                </thead>
                <tbody class="list"
                       id="products">
                    @foreach($messages as $message)

                    <tr>
                        <td >{{ $message->name }}</td>
                        <td >

                           {{ $message->email }}

                        </td>

                        <td >{{ $message->phone }}</td>
                        <td>
                            <div >{{ $message->city }}</div>
                        </td>
                        <td >{{ $message->created_at->diffForHumans() }}</td>
                        <td>


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
