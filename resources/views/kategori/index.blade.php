@extends('base')
@section('page-content')
<h1>
    Daftar Category
</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($data as $cat)
      <tr>
        <td>{{ $cat->id }}</td>
        <td>{{ $cat->name }}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection
