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
                        <th>slug</th>
                        <th>Parent category</th>
                        <th >Created at</th>
                        <th >Action</th>
                    </tr>
                </thead>
                <tbody class="list"
                       id="products">
                    @foreach($categories as $category)

                    <tr>
                        <td >{{ $category->category_name }}</td>
                        <td >{{ $category->category_slug }}</td>
                        <td >
                            @if ($category->parent_id != null)
                            {{ !$category->parent_id ? '--'.$category->category_name : $category->category_name }}
                            @endif
                        </td>
                        <td >{{ $category->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="{{ route('category.edit', $category->category_id) }}" class="btn  btn-dark mx-1">Edit</a>
                            <div class="btn-group">
                                <form action="{{ route('category.destroy', $category->category_id) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                   <button class="btn btn-xs btn-danger delete_me" data-id="{{ $category->category_id }}">
                                      <i class="ace-icon fa fa-trash-o bigger-120">Delete</i></i>
                                   </button>
                                </form>
                             </div>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>
        </div>

        @if (\Session::has('message'))
        <div class="alert alert-success">
           <ul>
              <li>{!! \Session::get('message') !!}</li>
           </ul>
        </div>
     @endif

    </div>
</div>

</div>

@endsection
