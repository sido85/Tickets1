<table class="table table-striped table-bordered table-hover">
    <tr>

        <td>Priorite</td>
        <td>Etat</td>
        <td>Utilisateur</td>
        <td>Actions</td>
    </tr>
    @foreach($tickets as $ticket)
        <tr>

            <td>{{ $ticket->priorites->nom }}</td>
            <td>{{ $ticket->etat }}</td>
            <td>{{ $ticket->users->name }}</td>
            <td><a href="{{ url('ticket/'.$ticket->id.'/consulter') }}" class="btn btn-info">Consulter</a> </td>
        </tr>
    @endforeach
</table>
{{ $tickets->render() }}