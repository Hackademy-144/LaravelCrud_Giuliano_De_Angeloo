<x-layout>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 col-md-4">
                <form enctype="multipart/form-data" method="POST" action="{{ route('article.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Sottotitolo</label>
                        <input type="text" class="form-control @error('subtitle') is-invalid @enderror " name="subtitle">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Inserisci un immagine</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror " name="img">
                    </div>


                    <div class="mb-3 form-label">
                        <textarea name="body" cols="30" rows="10" class="form-control @error('body') is-invalid @enderror">inserisci il testo</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>



</x-layout>
