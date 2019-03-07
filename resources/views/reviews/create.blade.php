@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Review TopDopper</div>

          <div class="card-body">
            <form method="POST" action="/reviews">
              @csrf

              <div class="col-md-6">
                <label for="question" class="col-md-4 col-form-label text-md-right">Review:</label>
              </div>

              <div class="col-md-6">
                 <textarea class="form-control" id="review" name="review" rows="8"></textarea>
              </div>
              <br />
              <div class="col-md-6">
                  <button type="submit" class="btn btn-primary">
                    Submit
                  </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection