<table class="table table-bordered">
    <tr>
        <th>Book</th>
        <th class="text-center">Count</th>
    </tr>
    @foreach ($categories as $item=>$count)
    <tr>
        <td> {{ $item }}</td>
        <td class="text-center">{{ $count }}</td>
    </tr>
    @endforeach

    <tr>
        <td>Total Book</td>
        <td class="text-center">{{ $totalBook }}</td>
    </tr>
</table>

<span class="float-right text-primary">Last Update: {{ Carbon\Carbon::now() }}</span> <br>
<span class="float-right text-warning">*Info update from database using ajax</span>
