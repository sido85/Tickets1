@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-0">
                <div class="card">
                    <div class="card-header">Fiche ticket n° {{ $ticket->id }}</div>

                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-md-offset-1">
                                <table class="table table-striped">
                                    <tr>
                                        <td>Message</td>
                                        <td>{{ $ticket->message }}</td>
                                    </tr>
                                    <tr>
                                        <td>Priorité</td>
                                        <td>{{ $ticket->priorites->nom }}</td>
                                    </tr>
                                    <tr>
                                        <td>Etat</td>
                                        <td>{{ $ticket->etat }}</td>
                                    </tr>
                                    <tr>
                                        <td>Crée le :</td>
                                        <td>{{ $ticket->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Utilisateur :</td>
                                        <td>{{ $ticket->users->name }}</td>
                                    </tr>
                                </table>
                                <a href="{{ url('ticket/'.$ticket->id.'/traiter') }}" class="btn btn-primary">Traiter</a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
