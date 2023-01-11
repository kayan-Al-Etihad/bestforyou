@extends('layout.admin.app')
@section('content')

<div class="container-fluid page__heading-container">
    <div class="page__heading">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#"><i class="material-icons icon-20pt">home</i></a></li>
                <li class="breadcrumb-item">UI Components</li>
                <li class="breadcrumb-item active"
                    aria-current="page">Tables</li>
            </ol>
        </nav>

        <h1 class="m-0">Category</h1>
    </div>
</div>



<div class="container-fluid page__container">
    <div class="card">

        <div class="table-responsive">

            <table class="table mb-0 thead-border-top-0 table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th >Created at</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody class="list"
                       id="products">
                    @foreach($categories as $category)

                    <tr>
                        <td >{{ $category->category_name }}</td>
                        <td >{{ $category->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="" class="btn  btn-dark mx-1 mt-3">Edit</a>
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
