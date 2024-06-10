<x-layout>



    <div class="container mt-5">
        <div class="row justify-content-evenly">
            @foreach ($articles as $article)
                <div class="col-4 ">
                    <div class="card m-5" style="width: 18rem;">
                        <img src="{{ Storage::url($article->img) }}" class="card-img-top" alt="..." height="260">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article->title }}</h5>
                            <p class="card-text">{{ $article->subtitle }}</p>
                            <p class="card-text text-truncate">{{ $article->body }}</p>
                            <p class="card-text text-small"> Caricato il: {{ $article->created_at->format('d/m/y') }}
                            </p>
                            <a href="{{ route('article.show', compact('article')) }}"
                                class="btn btn-primary">Dettaglio</a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>




</x-layout>
