@extends('base')

@section('page-content')
    @can('akses')
        <a href="{{ route('product.create') }}" class="btn btn-success">+ New Product</a>
    @endcan
    <div class="flex-card">
        @foreach ($products as $p)
            <div class="card">
                <img src="/images/{{ $p->image }}" alt="Sample Image" height="250px">
                <h2>{{ $p->name }}</h2>
                <p>{{ $p->brands->name }}</p>
                <p>Rp. {{ $p->price }}</p>
                <div class="kat-sty">
                    @foreach ($p->categories as $c)
                        <a href="*#"><span class="tag tag-kat-functions tag-sm">{{ $c->name }}</span></a>
                    @endforeach
                </div>
                <br><br>
                <a class="a-styling buy-btn" data-id="{{ $p->id }}" href="#">Add To Cart</a>
            </div>
        @endforeach
    </div>
@endsection

@section('jQuery')
    <script>
        $(document).ready(function() {
            $(".buy-btn").on('click', function() {
                let id = $(this).attr("data-id");
                $.post("{{ url('/product/addcart') }}/" + id, {
                        _token: "{{ csrf_token() }}"
                    },
                    function(data) {
                        if (data.status == "oke") {
                            alert(data.message);
                        }
                    }
                )
            });
        });
    </script>
@endsection
