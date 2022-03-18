@extends('layouts.main')

@section('content')
    @forelse($trains as $train)
        <div class="card my-3">
            <div class="card-header">
                Compagnia: <strong>{{ $train->azienda }}</strong>
            </div>
            <div class="card-body">
                <h4>Stazione di Partenza: {{ $train->stazione_di_partenza }}</h4>
                <h4>Stazione di Arrivo: {{ $train->stazione_di_arrivo }}</h4>
                <h5 class="card-title">Codice treno: {{ $train->codice_treno_numero }}</h5>
                <h6>Orario di partenza: {{ $train->orario_di_partenza }}</h6>
                <h6>Orario di arrivo: {{ $train->orario_di_arrivo }}</h6>
                <h6>Carrozza: {{ $train->carrozze }}</h6>
                <h6>In Orario: {{ $train->in_orario }}</h6>
                <h6>Cancellato: {{ $train->cancellato }}</h6>
                <p class="card-text">La ringraziamo per averci scelto.</p>
                {{-- <a href="#" class="btn btn-primary">Più dettagli</a> --}}
            </div>
        </div>
    @empty
        <h2>Non ci sono treni</h2>
    @endforelse
@endsection
