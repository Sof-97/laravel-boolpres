@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="label">Label</label>
                <input type="text" class="form-control" id="label" name="label" placeholder="Label">
            </div>

            <div class="form-group">
                <label for="category">Scegli un colore:</label>
                <select name="color" id="color" class="form-control">
                    <option value="secondary">Secondary</option>
                    <option value="success">Success</option>
                    <option value="primary">Primary</option>
                    <option value="danger">Danger</option>
                    <option value="warning">Warning</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success my-3">Crea</button>
            </div>
        </form>
    </div>
@endsection
