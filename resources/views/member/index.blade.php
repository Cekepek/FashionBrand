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
                <th>Status</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    @if ($user->member == 'true')
                        <td>Membership</td>
                    @else
                        <td>Tidak Membership</td>
                    @endif
                    <td>
                        <form action="{{route("member.update", $user->id)}}" method="post">
                            @method("PUT")
                            @csrf
                            <input class="btn btn-warning btn-xs" type="submit" value="Ubah">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
