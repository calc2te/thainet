@extends('_layouts.master')

@section('style')
@endsection

@section('content')
    <div class="container">
        <div class="col-12">
            @for ($i = 0; $i < 10; $i++)
                <div class="event-banner mb-4">
                    <img src="{{ asset('images/event/banner1.jpg') }}" class="img-fluid" alt="Responsive image">
                </div>
            @endfor
        </div>
    </div>
@endsection

@section('script')
@endsection
