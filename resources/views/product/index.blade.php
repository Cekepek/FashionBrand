@extends('base')

@section('page-content')
    <div class="flex-card">
        @foreach ($products as $p)
            <div class="card">
                <img src="{{ $p->image }}" alt="Sample Image" height="300px">
                <h2>{{ $p->name }}</h2>
                <p>{{ $p->brands->name }}</p>
                <p>Rp. {{$p->price}}</p>
                <div class="kat-sty">
                    @foreach ($p->categories as $c)
                        <a href="*#"><span class="tag tag-kat-functions tag-sm">{{$c->name}}</span></a>
                    @endforeach
                </div>
                <br><br>
                <a class="a-styling" href="*" target="_blank">Add To Cart</a>
            </div>
        @endforeach
    </div>
@endsection
