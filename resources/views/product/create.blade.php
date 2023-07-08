@extends('base')
@section('page-content')
    <form method="POST" action="{{ route('product.store') }}" enctype='multipart/form-data'>
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Name">
            <br />
            <label for="dimension">Dimension</label>
            <input type="text" class="form-control" name="dimension" placeholder="Enter Dimension">
            <br />
            <label for="price">Price</label>
            <input type="number" class="form-control" name="price" placeholder="Enter Price">
            <br />
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" id="image">
            <br />
            <select class="form-control" name="productType">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}"> {{ $type->name }} </option>
                @endforeach
            </select>
            <br />
            <select class="form-control" name="brand">
                @foreach ($brands as $brand)
                    <option value="{{ $brand->id }}"> {{ $brand->name }} </option>
                @endforeach
            </select>
            <br />
            @php
                    $i = 0;
                @endphp
            @foreach ($cats as $cat)
                @php
                    $i++;
                @endphp
                <input type="checkbox" id="{{ $cat->id }}" name="cat[]" value="{{ $cat->id }}">
                <label for="{{ $cat->name }}"> {{ $cat->name }}</label><br>
            @endforeach
            <input type="submit" value="simpan" class="btnSimpan">
        </div>
    </form>
@endsection
