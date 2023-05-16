
<x-main>

@forelse ( $corsiPresenti['corsi'] as $corsoSingolo)
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$corsoSingolo['nome-corso']}}</h5>
      <p class="card-text">Insegnante: {{$corsoSingolo['docente']}}</p>
      <a href="#" class="btn btn-primary">Dettaglio corso</a>
    </div>
  </div>
  @empty 
@endforelse

</x-main>