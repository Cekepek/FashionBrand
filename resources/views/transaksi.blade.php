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
            <td><a href="#">Lihat Rincian Pembelian</a></td>
        </tr>
        @endforeach
        <tr>
            <td>1</td>
            <td>2020-07-20 00:00:00</td>
            <td><a href="#"><span>Lihat Rincian Pembelian</span></a></td>

        </tr>
        <tr>
            <td>1</td>
            <td>2020-07-20 00:00:00</td>
            <td><a href="#"><span>Lihat Rincian Pembelian</span></a></td>

        </tr>
        <tr>
            <td>1</td>
            <td>2020-07-20 00:00:00</td>
            <td><a href="#"><span>Lihat Rincian Pembelian</span></a></td>

        </tr>
    </tbody>

</table>
@endsection
