@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            <div class="col-md-8 d-flex justify-content-center mx-auto my-3">
                <button class="btn btn-primary mx-2">
                    <a class="text-light text-decoration-none" href="{{route('admin.posts.index')}}">
                        Vai ai post
                    </a>
                </button>
                <button class="btn btn-primary mx-2">
                    <a class="text-light text-decoration-none" href="{{route('admin.categories.index')}}">
                        Categorie
                    </a>
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
