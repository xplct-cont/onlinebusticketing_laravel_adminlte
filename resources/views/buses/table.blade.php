<div class="table-responsive">
    <table class="table table-striped" id="buses-table" style="background-color:Gainsboro;">
        <thead class="bg-dark">
            <tr>
        <th>Bus Name</th>
        <th>Maximum Seats</th>
        <th>Plate No</th>
        <th>Franchise No</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($buses as $buses)
            <tr>
                <td>{{ $buses->bus_name }}</td>
            <td>{{ $buses->maximum_seats }}</td>
            <td>{{ $buses->plate_no }}</td>
            <td>{{ $buses->franchise_no }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['buses.destroy', $buses->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('buses.show', [$buses->id]) }}" class='btn btn-default btn-xs' style="background-color:#5bc0de;">
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('buses.edit', [$buses->id]) }}" class='btn btn-default btn-xs' style="background-color: #f0ad4e;">
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
