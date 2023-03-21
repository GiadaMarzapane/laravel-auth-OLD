@extends('layouts.admin')

@section('content')
<div class="container-fluid mt-4">
    <div class="row justify-content-center">
        <div class="col">
            <h2 class="mb-4">
                Aggiungi nuovo viaggio
            </h2>
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                {{-- INPUT PER TITLE --}}
                <div class="mb-4">
                    <label for="title" class="form-label">Ttitolo viaggio:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="text"
                    class="form-control"
                    id="title"
                    name="title"
                    maxlength="100"
                    placeholder="Inserisci titolo..."
                    aria-describedby="titleHelp"
                    required>
                    <div id="titleHelp" class="form-text">
                        <span class="text-danger">*</span> Campo obbligatorio
                    </div>
                </div>
                {{-- INPUT PER DATE --}}
                <div class="mb-4">
                    <label for="date" class="form-label">Anno viaggio:
                        <span class="text-danger">*</span>
                    </label>
                    <input type="number"
                    class="form-control"
                    id="date"
                    name="date"
                    placeholder="Inserisci anno..."
                    aria-describedby="dateHelp"
                    required>
                    <div id="dateHelp" class="form-text">
                        <span class="text-danger">*</span> Campo obbligatorio
                    </div>
                </div>
                {{-- INPUT PER CONTENT --}}
                <div class="mb-4">
                    <label for="content" class="form-label">Descrizione viaggio:
                        <span class="text-danger">*</span>
                    </label>
                    <textarea name="content"
                    class="form-control"
                    id="content"
                    rows="3"
                    aria-describedby="contentHelp"
                    placeholder="Inserisci descrizione..."
                    required></textarea>
                    <div id="contentHelp" class="form-text">
                        <span class="text-danger">*</span> Campo obbligatorio
                    </div>
                </div>
                {{-- INPUT PER PHOTO_LINK --}}
                <div class="mb-4">
                    <label for="title" class="form-label">
                        Link foto:
                    </label>
                    <input type="text"
                    class="form-control"
                    id="phpto_link"
                    name="phpto_link"
                    placeholder="Inserisci link...">
                </div>

                {{-- --------------------FINE INPUT-------------------- --}}

                <button type="submit" class="btn btn-success">Crea viaggio</button>
            </form>
        </div>
    </div>
</div>
@endsection