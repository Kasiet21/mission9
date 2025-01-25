@extends('master.db_master')

@section('dynblock')

<div class="container mt-3">
  <h2  style="text-align:center;">Tour Package</h2>
  <p>This is the Data of the user who [sign in] in the admin page:</p>
  <table class="container" border="1">
        <thead>
            <tr>
                <th style="text-align:center;"><h5 style="text-align:center;">ID</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Name</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Password</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Phone</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Email</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Ban</h5></th>
            </tr>
        </thead>

        <tbody>

      @foreach ($v_show as $users)
      <tr>

        <td> <p style="text-align:center;"> {{ $users->id }} </p></td>
        <td> <p style="text-align:center;"> {{ $users->Name }} </p></td>
        <td> <p style="text-align:center;"> {{ $users->Password }} </p></td>
        <td> <p style="text-align:center;"> {{ $users->Contact_number}} </p></td>
        <td> <p style="text-align:center;"> {{ $users->Email}} </p></td>
        <td> <p style="text-align:center;"> <a href="/delete/{{ $users->id }}">Ban</a> </p></td>
      </tr>
      @endforeach
           
        </tbody>
    </table>    
</html>
@stop