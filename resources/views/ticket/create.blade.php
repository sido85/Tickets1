@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="card">
                    <div class="card-header">Création de nouveau tickets</div>

                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-md-offset-1">
                                {!! Form::open(['method' => 'POST', 'url' => 'ticket/enregistrer', 'class' => 'form-horizontal']) !!}
                                <div class="form-group{{ $errors->has('message') ? 'has-error' : '' }}">
                                    {!! Form::label('message', 'votre message :') !!}
                                    {!! Form::textarea('message', null, [ 'class' => 'form-control', 'required' => 'required'])!!}
                                    <small class="text-danger">{{ $errors->first('message') }}</small>

                                </div>

                                <div class="form-group{{ $errors->has('priorites_id') ? 'has-error' : '' }}">
                                    {!! Form::label('priorites_id', 'input label') !!}
                                    {!! Form::select('priorites_id', $priorites, null, [ 'class' => 'form-control', 'required' => 'required'])!!}
                                    <small class="text-danger">{{ $errors->first('priorites_id') }}</small>

                                </div>

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
