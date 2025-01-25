@extends('master.db_master')

@section('dynblock')

<div class="container mt-3">
  <h2  style="text-align:center;">Sign Up</h2>
  <p>This is the Data of the user who [Sign Up] in the admin page:</p>
  <table class="container" border="1">
        <thead>
            <tr>
                <th style="text-align:center;"><h5 style="text-align:center;">ID</h5></th>
                
                <th style="text-align:center;"><h5 style="text-align:center;">Email</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Password</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Name</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Phone</h5></th>
 
                <th style="text-align:center;"><h5 style="text-align:center;">Ban</h5></th>
            </tr>
        </thead>

        <tbody>

      @foreach ($v_show as $info)
      <tr>

        <td> <p style="text-align:center;"> {{ $info->id }} </p></td>

        <td> <p style="text-align:center;"> {{ $info->Email}} </p></td>
        <td> <p style="text-align:center;"> {{ $info->Password }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->Name }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->Contact_number}} </p></td>
        
        <td> <p style="text-align:center;"> <a href="/delete/{{ $info->id }}">Ban</a> </p></td>
      </tr>
      @endforeach
           
        </tbody>
    </table>    
</html>
@stop