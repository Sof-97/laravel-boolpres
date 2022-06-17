@extends('layouts.app')

@section('content')
    <div class="container">
        <img src="{{ $post->image }}" alt="{{ $post->title }}">
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>
        @if ($post->category)
            <span class="badge badge-{{ $post->category->color }} p-2">{{ $post->category->label }}</span>
        @else
            <span class="badge badge-secondary p-2">Nessuna categoria</span>
        @endif
        <h4 class="mt-4">Tags:</h4>
            @forelse ($post->tags as $item)
                <span class="badge badge-pill mx-1 p-2" style="background-color: {{$item->color}}">{{$item->label}}</span>
            @empty
                <h5>Non ci sono tag.</h5>
            @endforelse
        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST" class="my-3 delete-form">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">
                Elimina
            </button>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/formConfirm.js') }}"></script>
@endsection
