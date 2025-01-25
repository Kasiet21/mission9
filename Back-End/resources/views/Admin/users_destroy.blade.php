@extends('master.db_master')

@section('dynblock')


<h1>Users</h1>
<a class="btn btn-primary" href="/admin/users_destroy">Create new user</a>
<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Password</th>
      <th>Contact_number</th>
      <th>Email</th>
      <th>Created</th>
      <th>Updated</th>
      <th>Operations</th>
    </tr>
  </thead>
  <tbody>

    @foreach($v_show  as $user)
    <tr>
      <td>{{ $user->id }}</td>
      <td>{{ $user->Name }}</td>
      <td>{{ $user->Password }}</td>
      <td>{{ $user->Email}}</td>
      <td>{{ $user->status == 1 ? 'Active' : 'Not active' }}</td>
      <td>{{ $user->created_at->diffForHumans() }}</td>
      <td>{{ $user->updated_at->diffForHumans() }}</td>
      <td>
        <form action="{{ route('sign_up', $user->id) }}" method="POST">
          <a href="{{ route('sign_in', $user->id) }}" class="btn btn-primary">Edit</a>
          @csrf
          @method('DELETE')
          <button onclick="return confirm('Are you sure you want to delete this user?')" type="submit" class="btn btn-danger">
            Delete
          </button>
        </form>
      </td>
    </tr>
    @endforeach
   
  </tbody>
</table>
@endsection