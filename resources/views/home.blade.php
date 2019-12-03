@extends('layouts.app')
@section("title") Dashboard @stop
@section('body')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <nav aria-label="breadcrumb" class="bg-white">
                <ol class="breadcrumb bg-white border border-faded">
                    <li class="breadcrumb-item active" aria-current="page">Home</li>
                </ol>
            </nav>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
