@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="card">
                    <div class="card-header">Traitement du ticket n° {{ $ticket->id }} crée par {{ $ticket->users->name }}, le {{ $ticket->updated_at }}</div>

                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-md-offset-1">
                                {!! Form::open(['method' => 'POST', 'url' => 'traitement/enregistrer', 'class' => 'form-horizontal']) !!}


                                <div class=" btn-group float-right">
                                    {!! Form::reset("Annuler", ['class' => 'btn btn-warning']) !!}
                                    {!! Form::submit("Enregistrer", ['class' => 'btn btn-success']) !!}
                                </div>
                                {!! Form::close() !!}

                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
