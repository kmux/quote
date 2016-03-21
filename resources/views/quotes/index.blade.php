@extends('layouts.app')

@section('content')
    @if (! $quotes->isEmpty())
        @foreach($quotes as $quote)
            <div class="row quote">
                <div class="col-md-3">
                    <span class="date">{{ date('M d, Y', strtotime($quote->created_at)) }}</span>
                    <a href="#" class="user">{{ $quote->username }}</a>
                </div>
                <div class="col-md-9 title">
                    {{ $quote->title }}
                </div>
            </div>
        @endforeach
    @else
        <div class="col-md-12 text-center">
            <h3>There are no quotes yet!</h3>
            <p>Use the form below to add new quotes.</p>
        </div>
    @endif
    <div class="col-md-12 text-center">
        {!! $quotes->render() !!}
    </div>
@stop