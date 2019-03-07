@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">TopDopper Reviews</div>

                <div class="card-body">
                    Is de TopDopper is Top? Of vind je het een flop? Laat hier je review achter.
                    <br /><br />
                    <a href='/reviews/create' type="button" class="btn btn-primary">Review TopDopper</a>
                </div>
            </div>

            @foreach($reviews as $review)
            <br />
            <div class="card">
                <div class="card-header">{{ $review->user->FullName }}<br />
                {{ date('d-m-Y', strtotime($review->created_at)) }}</div>

                <div class="card-body">
                    {!! nl2br(e($review->review)) !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
