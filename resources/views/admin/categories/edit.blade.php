@extends('layouts.app')
@section('content')
<div class="container">
    <form action="{{ route('admin.categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="label">Label</label>
            <input type="text" class="form-control" id="label" name="label" value="{{old('label', $category->label)}}">
        </div>

        <div class="form-group">
            <label for="category">Scegli un colore:</label>
            <select name="color" id="color">
                <option value="{{old('color', $category->color)}}">Non modificare</option>
                <option value="secondary">Secondary</option>
                <option value="primary">primary</option>
                <option value="danger">danger</option>
                <option value="warning">warning</option>
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success my-3">Crea</button>
        </div>
    </form>
</div>
@endsection