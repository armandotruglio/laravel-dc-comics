@extends("layouts.app")

@section("page-title", "Inserisci Nuovo Fumetto")

@section("main-content")
<div class="container">
    @if  ($errors->any())
        <div class="row">
            <div class="col-12 alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    <div class="row justify-content-around">
        <form class="col-12 col-md-6 card m-3" method="POST" action="{{ route("comics.store") }}">
            @csrf

            <h1 class="mb-3">
                Aggiungi un fumetto:
            </h1>
            <div class="mb-3">
                <label for="comic-title" class="form-label">Titolo:</label>
                <input type="text" class="form-control" id="comic-title" name="title">
            </div>
            <div class="mb-3">
                <label for="comic-description" class="form-label">Descrizione:</label>
                <input type="text" class="form-control" id="comic-description" name="description">
            </div>
            <div class="mb-3">
                <label for="comic-thumb" class="form-label">Copertina:</label>
                <input type="text" class="form-control" id="comic-thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="comic-price" class="form-label">Prezzo:</label>
                <input type="text" class="form-control" id="comic-price" name="price">
            </div>
            <div class="mb-3">
                <label for="comic-series" class="form-label">Serie:</label>
                <input type="text" class="form-control" id="comic-series" name="series">
            </div>
            <div class="mb-3">
                <label for="comic-sale-date" class="form-label">Data Vendita:</label>
                <input type="text" class="form-control" id="comic-sale_-ate" name="sale_date">
            </div>
            <div class="mb-3">
                <label for="comic-type" class="form-label">Tipo:</label>
                <input type="text" class="form-control" id="comic-type" name="type">
            </div>
            <div class="mb-3">
                <label for="comic-artists" class="form-label">Artista:</label>
                <input type="text" class="form-control" id="comic-artists" name="artists">
            </div>
            <div class="mb-3">
                <label for="comic-writers" class="form-label">Scrittore:</label>
                <input type="text" class="form-control" id="comic-writers" name="writers">
            </div>
            <div class="mb-3 d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary me-3">
                    Aggiungi
                </button>
                <button type="reset" class="btn btn-warning me-3">
                    Reset
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
