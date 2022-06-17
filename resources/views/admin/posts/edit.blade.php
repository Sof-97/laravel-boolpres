@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $post->title)}}">
            </div>

            <div class="form-group">
                <label for="category">Scegli una categoria:</label>
                <select name="category_id" id="category_id">
                    <option value="{{old('category', $post->category_id)}}">Non modificare</option>
                    @foreach ($categories as $item)
                    <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
                    <option value="">Nessuna categoria</option>
                </select>
            </div>

            <div class="form-group">
                @foreach ($tags as $item)
                    <div class="form-check form-check-inline">
                        <label 
                            class="form-check-label"
                            for="tag-{{ $item->id }}-{{ $item->label }}">
                            {{ $item->label }}
                        </label>
                        <input 
                        class="form-check-input ml-1 mr-4" 
                        type="checkbox" 
                        id="tag-{{ $item->id }}-{{ $item->label }}" 
                        value="{{ $item->id }}"
                        name="tags[]"
                        @if (in_array($item->id, old('tags', $post_tags_id ))) checked @endif
                        >
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <label for="content" class="my-3">Contenuto</label>
                <textarea class="form-control" name="content" id="content"style="width: 100%" rows="10" >{{old('content', $post->content)}}</textarea>
            </div>
            <div class="form-group">
                <label for="image">Immagine del post</label>
                <input type="url" class="form-control" name="image" id="image" value="{{old('image', $post->image)}}" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success my-3">Modifica</button>
            </div>
        </form>
    </div>
@endsection
