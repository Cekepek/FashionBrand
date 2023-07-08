
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .checkout-page {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .small-card {
            max-width: 300px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="checkout-page">
        <h1>Invoice</h1>
        <br>
        <br>
        <div class="my-2">
            <table class="table">
            @foreach ($transaction->products as $p)
                    <tr>
                        <td>{{$p->name}}</td>
                        <td>Rp {{$p->price}}</td>
                        <td>{{$p->pivot->quantity}} x</td>
                    </tr>


                @endforeach
            </table>
        </div>
        <div>
            <div class="d-flex justify-content-between">
                <div class="mt-5">
                    <p>Subtotal</p>
                </div>
                <div class="mt-5">
                    <p>Rp {{$transaction->subtotal}}</p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="mt-5">
                    <p>total (subtotal + pajak 11%)</p>
                </div>
                <div class="mt-5">
                    <p>Rp {{$transaction->total}}</p>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <p class="text-secondary">{{$transaction->users->name}}</p>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <p class="text-secondary">{{$transaction->users->email}}</p>
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
</body>
</html>

