@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Resultaat</div>
          <div class="card-body">    
            @if ($win == true)
              Gefeliciteerd, je maakt een kans op een TopDobber. Vergeet niet de adres gegevens in te profiel te zetten om hem opgestuurd te krijgen.
            @else
              Helaas, een TopDobber is niets voor jou. Deze dobber is speciaal gemaakt voor dieper water.
            @endif
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
