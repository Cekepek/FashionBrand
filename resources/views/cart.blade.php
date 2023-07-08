
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
        <h1>Checkout</h1>
        <br>
        <br>
        <div class="my-2">
            <div class="d-flex justify-content-between">
                <div class="small-card">
                    <img src="https://i5.walmartimages.com/asr/f08157c1-2f36-4629-b40e-6625e5c3482a.0dea24ee1c3fe87dc849c2cfd0abf956.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF" alt="Sample Image" style="width:80px;height:80px;">
                    <h4>Product Title</h4>
                    <p>Rp100.000</p>
                </div>
                <div class="mt-5">
                    <p>10 x</p>
                </div>
            </div>
            <div class="d-flex justify-content-between">
                <div class="small-card">
                    <img src="https://i5.walmartimages.com/asr/f08157c1-2f36-4629-b40e-6625e5c3482a.0dea24ee1c3fe87dc849c2cfd0abf956.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF" alt="Sample Image" style="width:80px;height:80px;">
                    <h4>Product Title</h4>
                    <p>Rp100.000</p>
                </div>
                <div class="mt-5">
                    <p>10 x</p>
                </div>
            </div>
        </div>
        <div>
            <div class="d-flex justify-content-between">
                <div class="mt-5">
                    <p>Subtotal</p>
                </div>
                <div class="mt-5">
                    <p>Rp200.000</p>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="name">Name:</label>
            <p class="text-secondary">ALLAN MATEUS</p>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <p class="text-secondary">evan@gmail.com</p>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Place Order</button>
        </div>
    </div>

    {{-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
</body>
</html>

