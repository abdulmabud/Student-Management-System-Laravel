<table class="table table-bordered">
    <tr>
        <th>Teacher</th>
        <th class="text-center">Count</th>
    </tr>
    <tr>
        <td>Publish Teacher</td>
        <td class="text-center">{{ $pubTeacher }}</td>
    </tr>
    <tr>
        <td>Unpublish Teacher</td>
        <td class="text-center">{{ $unpubTeacher }}</td>
    </tr>
    <tr>
        <td>Total Teacher</td>
        <td class="text-center">{{ $totalTeacher }}</td>
    </tr>
</table>

<span class="float-right text-primary">Last Update: {{ Carbon\Carbon::now() }}</span> <br>
<span class="float-right text-warning">*Info update from database using ajax</span>
