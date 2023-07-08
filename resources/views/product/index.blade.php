@extends('base')

@section('page-content')
    <div class="flex-card">
        @foreach ($products as $p)
            <div class="card">
                <img src="{{ $p->image }}" alt="Sample Image">
                <h2>{{ $p->name }}</h2>
                <p>{{ $p->brands->name }}</p>
                <div class="kat-sty">
                    @foreach ($p->categories as $c)
                        <a href="*#"><span class="tag tag-kat-functions tag-sm">{{$c->name}}/span></a>
                    @endforeach
                </div>
                <br><br>
                <a class="a-styling" href="*" target="_blank">Add To Cart</a>
            </div>
        @endforeach
        <div class="card">
            <img src="https://i5.walmartimages.com/asr/f08157c1-2f36-4629-b40e-6625e5c3482a.0dea24ee1c3fe87dc849c2cfd0abf956.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"
                alt="Sample Image">
            <h2>Card Title</h2>
            <p>Brand</p>
            <div class="kat-sty">
                <a href="*aa"><span class="tag tag-kat-functions tag-sm">#Jaket</span></a>
                <a href="*aadee"><span class="tag tag-kat-functions tag-sm">#Outer</span></a>
            </div>
            <br><br>
            <a class="a-styling" href="*" target="_blank">Add To Cart</a>
        </div>
        <div class="card">
            <img src="https://i5.walmartimages.com/asr/f08157c1-2f36-4629-b40e-6625e5c3482a.0dea24ee1c3fe87dc849c2cfd0abf956.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"
                alt="Sample Image">
            <h2>Card Title</h2>
            <p>Brand</p>
            <div class="kat-sty">
                <a href="*aa"><span class="tag tag-kat-functions tag-sm">#Jaket</span></a>
                <a href="*aadee"><span class="tag tag-kat-functions tag-sm">#Outer</span></a>
            </div>
            <br><br>
            <a class="a-styling" href="*" target="_blank">Add To Cart</a>
        </div>
        <div class="card">
            <img src="https://i5.walmartimages.com/asr/f08157c1-2f36-4629-b40e-6625e5c3482a.0dea24ee1c3fe87dc849c2cfd0abf956.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"
                alt="Sample Image">
            <h2>Card Title</h2>
            <p>Brand</p>
            <div class="kat-sty">
                <a href="*aa"><span class="tag tag-kat-functions tag-sm">#Jaket</span></a>
                <a href="*aadee"><span class="tag tag-kat-functions tag-sm">#Outer</span></a>
            </div>
            <br><br>
            <a class="a-styling" href="*" target="_blank">Add To Cart</a>
        </div>
        <div class="card">
            <img src="https://i5.walmartimages.com/asr/f08157c1-2f36-4629-b40e-6625e5c3482a.0dea24ee1c3fe87dc849c2cfd0abf956.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"
                alt="Sample Image">
            <h2>Card Title</h2>
            <p>Brand</p>
            <div class="kat-sty">
                <a href="*aa"><span class="tag tag-kat-functions tag-sm">#Jaket</span></a>
                <a href="*aadee"><span class="tag tag-kat-functions tag-sm">#Outer</span></a>
            </div>
            <br><br>
            <a class="a-styling" href="*" target="_blank">Add To Cart</a>
        </div>
        <div class="card">
            <img src="https://i5.walmartimages.com/asr/f08157c1-2f36-4629-b40e-6625e5c3482a.0dea24ee1c3fe87dc849c2cfd0abf956.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"
                alt="Sample Image">
            <h2>Card Title</h2>
            <p>Brand</p>
            <div class="kat-sty">
                <a href="*aa"><span class="tag tag-kat-functions tag-sm">#Jaket</span></a>
                <a href="*aadee"><span class="tag tag-kat-functions tag-sm">#Outer</span></a>
            </div>
            <br><br>
            <a class="a-styling" href="*" target="_blank">Add To Cart</a>
        </div>

    </div>
@endsection
