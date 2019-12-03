@extends("layouts.app")
@section("title") Post List @stop
@section("body")
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="bg-white">
                    <ol class="breadcrumb bg-white border border-faded">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Post</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Post List</span>
                            <div>
                                <a href="{{ route('post.create') }}" class="btn btn-outline-secondary btn-icon btn-sm">
                                    <i class="fa fa-plus"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover mb-0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Controls</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $l)
                                <tr>
                                    <td>{{ $l->id }}</td>
                                    <td class="mm">{{ $l->title }}</td>
                                    {{--<td>{{ $categories->find($l->category_id)->title }}</td>--}}
                                    <td>{{ $l->getCategory->title }}</td>
                                    <td>
                                        <a href="{{ route('post.show',$l->id) }}" class="btn btn-outline-info btn-icon btn-sm mb-2">
                                            <i class="fa fa-info-circle"></i>
                                        </a>
                                        <form method="post" class="d-inline-block" action="{{ route('post.destroy',$l->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-icon btn-sm"><i class="fa fa-trash"></i></button>
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