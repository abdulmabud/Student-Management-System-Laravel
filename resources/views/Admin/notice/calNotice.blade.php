<table class="table table-bordered">
    <tr>
        <th>Department</th>
        <th>Total</th>
    </tr>
    @foreach ($depts as $item=>$count)
    <tr>
        <td> {{ $item }}</td>
        <td>{{ $count }}</td>
    </tr>
    @endforeach
    <tr>
        <td>Total Notice</td>
        <td>{{ $totalNotice }}</td>
    </tr>
</table>

<span class="float-right text-primary">Last Update: {{ Carbon\Carbon::now() }}</span> <br>
<span class="float-right text-warning">*Info update from database using ajax</span>
