@extends("layouts.app")

@section("page-title", "Comics")


@section("main-content")
<div class="container">
    <div class="row py-5 text-center">
        <div class="col-12">
            <a href="{{ route("comics.create")}}" class="btn btn-primary"> Aggiungi Fumetto </a>
        </div>
    </div>
    <div class="row g-5">
        @forelse ($comics as $comic)
        <div class="col-3">
            <div class="card">
                <div class="card-image">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                </div>
                <div class="card-body">
                    <p class="card-title fw-bold">{{ $comic->title }}</p>
                    <p class="card-text text-truncate">{{ $comic->description }}</p>
                </div>
                <div class="card-bottom p-2 d-flex justify-content-between border-top">
                    <a href="{{ route("comics.show", $comic->id) }}" class="btn btn-primary"> Dettagli </a>
                    <a href="{{ route("comics.edit", $comic->id) }}" class="btn btn-warning"> Modifica </a>
                    <form action="{{ route("comics.delete", $comic->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method("DELETE")

                        <button type="submit" class="btn btn-danger">
                            Elimina
                        </button>

                    </form>
                </div>
            </div>
        </div>

        @empty

        @endforelse
    </div>
</div>
@endsection
