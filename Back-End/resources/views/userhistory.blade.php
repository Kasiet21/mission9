

@extends('master.db_master')

@section('dynblock')

<div class="container mt-3">
  <h2  style="text-align:center;">Booking</h2>
  <p>This is the Data of the user who [Booking Our Package] in the admin page:</p>
  <table class="container" border="1">
        <thead>
            <tr>
                <th style="text-align:center;"><h5 style="text-align:center;">ID</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Username</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Email</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Start Date</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Country</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Amount People</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Request</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Action</h5></th>
            </tr>
        </thead>

        <tbody>

      @foreach ($v_show as $info)
      <tr>

        <td> <p style="text-align:center;"> {{ $info->id }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->name }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->email }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->start }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->country }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->amount }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->s_request }} </p></td>
        <td> <p style="text-align:center;"> <a href="/userhistory_edits/{{ $info->id }}">|Edit|</a> </p></td>
      </tr>
      @endforeach
           
        </tbody>
    </table>    
</html>
@stop