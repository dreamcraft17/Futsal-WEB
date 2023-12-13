@extends('layouts/app')

@section('title', 'Home')

<style>
    .card-img-top {
        width: 100%;
        height: 13rem;
    }
</style>


@section('content')

<div class="container my-5 ">
    <div class="row">
        @foreach($arenas as $arena)
        <div class="col-lg-4 mb-5">
            <div class="card" style="width: 18rem;">
                @if($arena->image)
                <img src="{{ $arena->image }}" class="card-img-top" alt="...">
                @endif
                <div class="card-body">
                    <h5 class="card-title">Nomor Lapangan : {{ $arena->number }}</h5>
                    <p class="card-text">Harga : Rp{{ number_format($arena->price,2,',','.') }} / Jam</p>
                    <a href="{{ route('booking', ['number' => $arena->number])  }}" class="btn btn-primary">Booking</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container">
    <div class="card">
        <div class="card-header">
            Jadwal Booking Lapangan
        </div>

        <div class="card-body">
            <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

            <div id='calendar'></div>
        </div>
    </div>
</div>

@endsection