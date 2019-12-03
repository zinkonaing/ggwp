@extends("layouts.app")
@section("title") Post List @stop
@section("body")
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb" class="bg-white">
                    <ol class="breadcrumb bg-white border border-faded">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('post.index') }}">Post</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Post Detail</span>
                            <div>
                                <a href="{{ route('post.create') }}" class="btn btn-outline-secondary btn-icon btn-sm">
                                    <i class="fa fa-plus"></i>
                                </a>
                                <a href="{{ route('post.index') }}" class="btn btn-outline-secondary btn-icon btn-sm">
                                    <i class="fa fa-list"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="mm">{{ $info->title }}</h4>
                        <hr>
                        <p class="mm-beauty">
                            {{ $info->description }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection