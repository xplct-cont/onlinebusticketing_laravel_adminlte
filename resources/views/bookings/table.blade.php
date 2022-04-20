<div class="table-responsive">
    <table class="table table-striped" id="bookings-table" style="background-color:Gainsboro;">
        <thead class="bg-dark">
            <tr>
                <th>Operator</th>
        <th>Bus Name</th>
        <th>Point Of Origin</th>
        <th>Start Time</th>
        <th>Destination</th>
        <th>Drop Time</th>
        <th>Ticket No</th>
        <th>Passenger Name</th>
        <th>Age</th>
        <th>Contact No</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bookings as $bookings)
            <tr>
                <td>{{ $bookings->operator }}</td>
            <td>{{ $bookings->bus_name }}</td>
            <td>{{ $bookings->point_of_origin }}</td>
            <td>{{ $bookings->start_time }}</td>
            <td>{{ $bookings->destination }}</td>
            <td>{{ $bookings->drop_time }}</td>
            <td>{{ $bookings->ticket_no }}</td>
            <td>{{ $bookings->passenger_name }}</td>
            <td>{{ $bookings->age }}</td>
            <td>{{ $bookings->contact_no }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['bookings.destroy', $bookings->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bookings.show', [$bookings->id]) }}" class='btn btn-default btn-xs' style="background-color:#5bc0de;">
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('bookings.edit', [$bookings->id]) }}" class='btn btn-default btn-xs' style="background-color: #f0ad4e;">
                            <i class="fas fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
