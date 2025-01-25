@extends('master.db_master')

@section('dynblock')


<div class="container mt-3">
  <h2  style="text-align:center;">Tour Package</h2>
  <p>This is the Tour Package table of the admin page:</p>
  <table class="container" border="1">
        <thead>
            <tr>
                <th>
                    <h5 style="text-align:center;" >ID</h5>
                </th>
                <th>
                    <h5 style="text-align:center;">Country</h5>
                </th>
                <th>
                    <h5 style="text-align:center;">Day</h5>
                </th>
                <th>
                    <h5 style="text-align:center;">Description</h5>
                </th>
                <th>
                    <h5 style="text-align:center;">Price</h5>
                </th>
                <th>
                    <h5 style="text-align:center;">Picture</h5>
                </th>
                <th>
                    <h5 style="text-align:center;">Edit|Delete</h5>
                </th>
            </tr>
        </thead>

        <tbody>

      @foreach ($v_show as $info)
      <tr>

        <td> <p style="text-align:center;"> {{ $info->id }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->country }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->day }} </p></td>
        <td> <p style="text-align:center;"> {{ $info->description}} </p></td>
        <td> <p style="text-align:center;"> $ {{ $info->price }} </p></td>
        <td> <p style="text-align:center;">  {{ $info->picture }} </p></td>


        <td> <p style="text-align:center;"> <a href="{{ url('editpackage/'. $info->id)}}"> Edit |</a>
            <a href="{{ url('deletepackage/'. $info->id)}}">Delete</a> </p></td>
            <td> </td>
      </tr>
      @endforeach
           
        </tbody>
    </table>    
</html>
@stop
