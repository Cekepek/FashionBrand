@extends('base')
@section('page-content')
<style>
    body {
        padding: 50px;
    }
</style>
<h2>Daftar Transaksi</h2>
<br>
<br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Tanggal Transaction</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($transaction as $t)
        <tr>
            <td>{{$t->id}}</td>
            <td>{{$t->transaction_date}}</td>
            <td><a href="{{route('transaction.show', $t->id)}}">Lihat Rincian Pembelian</a></td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection
