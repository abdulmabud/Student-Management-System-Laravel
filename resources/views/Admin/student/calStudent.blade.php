<table class="table table-bordered">
    <tr>
        <th>Class</th>
        <th>Student</th>
        <th>Available</th>
        <th>Total</th>
    </tr>
    @foreach ($classes as $class)
    <tr>
    <td>{{ $class->className}}</td>
    <td>{{ $class->totalSeat - $class->availableSeat}}</td>
    <td>{{ $class->availableSeat }}</td>
    <td>{{ $class->totalSeat }}</td>
    </tr>
    @endforeach
    
</table>
<table class="table table-bordered">
    <tr>
        <td>Total Student</td>
        <td>{{ $totalStudent }}</td>
    </tr>
</table>
<span class="float-right text-primary">Last Update: {{ Carbon\Carbon::now() }}</span> <br>
<span class="float-right text-warning">*Info update from database using ajax</span>