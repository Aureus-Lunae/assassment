@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Quiz</div>

          <div class="card-body">
            <form method="POST" action="/quizStep2">
              @csrf

              <div class="form-group row">
                <label for="question" class="col-md-4 col-form-label text-md-right">Gebruik je grote aas?</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="question2" id="question2" value="1" required>
                <label class="form-check-label" for="1">Ja</label>
              </div>

              <div class="form-check">
                <input class="form-check-input" type="radio" name="question2" id="question2" value="2" required>
                <label class="form-check-label" for="2">nee</label>
              </div>
              <br />
              <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Volgende vraag
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection
