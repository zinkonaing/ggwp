@extends("layouts.app")
@section("title") Category List @stop
@section("body")
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="bg-white">
                    <ol class="breadcrumb bg-white border border-faded">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">Category List</div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Controls</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $l)
                                <tr>
                                    <td>{{ $l->id }}</td>
                                    <td>{{ $l->title }}</td>
                                    <td>
                                        <a href="{{ route('category.edit',$l->id) }}" class="btn btn-info"><i class="fa fa-pencil"></i></a>
                                        <form method="post" class="d-inline" action="{{ route('category.destroy',$l->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    @endsection
