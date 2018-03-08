<table class="table table-striped table-bordered table-hover">
    <tr>
        <td>Date création</td>
        <td>Message</td>
        <td>Priorite</td>
        <td>Etat</td>
        <td>Date consultation</td>
    </tr>
    @foreach($tickets as $ticket)
        <tr>
            <td>{{ $ticket->created_at }}</td>
            <td>{{ $ticket->message }}</td>
            <td>{{ $ticket->priorites->nom }}</td>
            <td>{{ $ticket->etat }}</td>
            <td>{{ $ticket->updated_at }}</td>

        </tr>
    @endforeach
</table>