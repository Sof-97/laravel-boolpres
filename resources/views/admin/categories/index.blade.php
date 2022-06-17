@extends('layouts.app')
@section('content')
    <div class="container">
        @if (session('deleted'))
            <div class="alert alert-danger">
                {{ session('deleted') }}
            </div>
        @elseif (session('edited'))
            <div class="alert alert-success">
                {{ session('edited') }}
            </div>
        @elseif (session('created'))
        <div class="alert alert-success">
            {{ session('created') }}
        </div>
        @endif
        <h2>Categorie</h2>
        <div class="d-flex align-items-end flex-column">
            <a href="{{ route('admin.categories.create') }}" class="btn btn-success tet-light text-decoration-none my-2">
                Crea una nuova categoria
            </a>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">
                        Label
                    </th>
                    <th scope="col">
                        Color
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $item)
                    <tr>
                        <td>
                            <h4>
                                {{ $item->label }}
                            </h4>
                        </td>
                        <td>
                            <span class="badge badge-pill badge-{{ $item->color }} px-4 py-3">
                                {{ $item->color }}
                            </span>
                        </td>
                        <td>
                            <a class="btn btn-primary "
                                href="{{ route('admin.categories.show', $item->id) }}">Visualizza</a>
                            <a href=" {{ route('admin.categories.edit', $item->id) }} " class="btn btn-warning my-3">
                                Modifica
                            </a>
                            <form action="{{ route('admin.categories.destroy', $item->id) }}" method="POST"
                                class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">
                                    Elimina
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <h2>Non ci sono categorie.</h2>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/formConfirm.js') }}"></script>
@endsection
