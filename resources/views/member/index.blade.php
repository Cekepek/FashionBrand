@extends('base')
@section('page-content')
<h1>
    Daftar Membership
</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>
          <a href="#" class="btn btn-warning btn-xs">Ubah</a>
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
