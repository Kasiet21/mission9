@extends('master.db_master')

@section('dynblock')

</br>
<div class="container mt-3">
  <h2  style="text-align:center;" class="text-success">User Comment</h2>
  <p >This is the comment of the user from all the package of front_end page in the admin page:</p>
  </br>
  <table class="container" border="1">
        <thead>
            <tr>
                <th style="text-align:center;"><h5 style="text-align:center;">ID</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Name</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Email</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Website</h5></th>
                <th style="text-align:center;"><h5 style="text-align:center;">Message</h5></th>

            </tr>
        </thead>

        <tbody>

      @foreach  ($v_show as $info)
      <tr>

        <td> <p style="text-align:center;"> {{ $info->id }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->name }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->email }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->website}} </p></td>
        <td> <p style="text-align:center;"> {{ $info->message}} </p></td>
    
      </tr>
      @endforeach
           
        </tbody>
    </table>    

</html>
@stop
