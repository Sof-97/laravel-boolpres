@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('deleted'))
            <div class="alert alert-danger">
                {{ session('deleted') }}
            </div>
        @elseif (session('modified'))
            <div class="alert alert-success">
                {{ session('modified') }}
            </div>
        @endif
        <div class="d-flex align-items-end flex-column">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-success tet-light text-decoration-none my-2">
                Crea un nuovo post!
            </a>
        </div>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">
                        Title
                    </th>
                    <th scope="col">
                        Category
                    </th>
                    <th scope="col">
                        Content
                    </th>
                    <th scope="col">
                        Image
                    </th>
                    <th scope="col">
                        Slug
                    </th>
                    <th scope="col">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse ($posts as $item)
                    <tr>
                        <td>{{ $item->title }}</td>
                        <td>
                            @if ($item->category)
                                <span
                                    class="badge badge-{{ $item->category->color }} p-2">{{ $item->category->label }}</span>
                            @else
                                <span class="badge badge-secondary p-2">Nessuna categoria</span>
                            @endif
                        </td>
                        <td>
                            <p>
                                {{ $item->content }}
                            </p>
                        </td>
                        <td>
                            <img src="{{ asset("storage/$item->image") }}" style="width: 100px">
                            <img src="{{ $item->image }}"  style="width: 100px">
                        </td>
                        <td>{{ $item->slug }}</td>
                        <td>
                            <a class="btn btn-primary " href="{{ route('admin.posts.show', $item->id) }}">Visualizza</a>
                            <a href=" {{ route('admin.posts.edit', $item->id) }} " class="btn btn-warning my-3">
                                Modifica
                            </a>
                            <form action="{{ route('admin.posts.destroy', $item->id) }}" method="POST"
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
                    <h2>Non ci sono post.</h2>
                @endforelse
            </tbody>
        </table>

        {{-- @if ($posts->hasPages())
        <div class="d-flex justify-content-center">
            {{$posts->links()}}
        </div>
        @endif --}}
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/formConfirm.js') }}"></script>
@endsection
