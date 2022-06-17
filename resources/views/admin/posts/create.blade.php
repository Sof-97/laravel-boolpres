@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Titolo del post">
            </div>

            <div class="form-group">
                <label for="category">Scegli una categoria:</label>
                <select name="category_id" id="category_id">
                    <option value="">Nessuna categoria</option>
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->label }}</option>
                    @endforeach
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
                        @if (in_array($item->id, old('tags', []))) checked @endif
                        >
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <label for="content" class="my-3">Contenuto</label>
                <textarea class="form-control" name="content" id="content" style="width: 100%" rows="10"
                    placeholder="Contenuto del post"></textarea>
            </div>

            {{-- <div class="form-group">
                <label for="image">Immagine del post</label>
                <input type="url" class="form-control" name="image" id="image" placeholder="url dell'immagine">
            </div> --}}

            <div class="form-group">
                <label for="image">Carica un'immagine:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success my-3">Crea</button>
            </div>
        </form>
    </div>
@endsection
