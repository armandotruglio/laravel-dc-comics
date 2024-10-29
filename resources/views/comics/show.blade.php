@extends("layouts.app")

@section("page-title", "{{$comic->title}}")

@section("main-content")
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5 text-center">
            <div class="card">
                    <div class="card-image">
                        <img src="{{ $comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"] }}">
                    </div>
                    <div class="card-body">
                        <p class="card-title fw-bold">{{ $comic["title"] }}</p>
                        <p class="card-text">{{ $comic["description"] }}</p>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
