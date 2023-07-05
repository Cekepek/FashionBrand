@extends('base')
@section('product')
<h1>
    Daftar Produk
</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nama</th>
        <th scope="col">Dimensi</th>
        <th scope="col">Harga</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($prods as $prod)
      <tr>
        <td>{{ $prod->id }}</td>
        <td>{{ $prod->name }}</td>
        <td>{{ $prod->dimension }}</td>
        <td>Rp. {{ $prod->price }}</td>
        <!-- <td>
            <a class = "btn btn-success" href="#showphoto_{{$prod->id}}" data-toggle = "modal">Show Photo</a>
            <div class="modal fade" id="showphoto_{{$prod->id}}" tabindex="-1" role="basic" aria-hidden="true">
                <div class="modal-dialog">
                   <div class="modal-content">
                      <div class="modal-header">
                         <h4 class="modal-title">{{$prod->nama}}</h4>
                      </div>
                      <div class="modal-body">
                         <img src={{asset('image/'.$prod->id.'.jpeg')}} height='200px' />
                      </div>
                  <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                   </div>
                </div>
            </div>
        </td> -->
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection