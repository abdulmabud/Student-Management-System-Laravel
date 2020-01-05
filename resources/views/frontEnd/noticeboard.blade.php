@extends('master')

@section('title')
    {{ $notice->subject }}
@endsection

@section('content')
    <div class="container" style="margin-top: 100px;">
        <h3 class="text-center text-primary">Noticeboard</h3>
        <table class="table table-bordered w-75" style="margin: 50px auto">
            <tr>
                <td>Data: {{ \Carbon\Carbon::parse($notice->created_at)->format('d-M-Y') }}</td>
            </tr>
            <tr>
                <td style="font-weight: bold;">Subject: {{ $notice->subject }}</td>
            </tr>
            <tr>
                 <td>{{ $notice->description }}</td>
            
            </tr>
        </table>
    </div>
@endsection