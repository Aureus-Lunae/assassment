@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">TopDobber</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-md-6 offset-md-4">
                        De inline dobber waarmee je zelfs haaien kan vangen!
                    </div>
                    <div class="col-md-6 offset-md-4">
                        <a href='/quiz' type="button" class="btn btn-primary">Doe de quiz en win!</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection