@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
                <div class="card-header">Système de gestion de tickets</div>

                <div class="card-body">
                    @if(Auth::user()->role=='admin')
                    @include('ticket.admin')
                    @else
                    @include('ticket.user')
                    @endif


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
