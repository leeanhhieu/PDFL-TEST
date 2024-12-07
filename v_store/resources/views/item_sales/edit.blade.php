<div class="container">
    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
            color: #555;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-control:focus {
            border-color: #007bff;
            outline: none;
        }

        .btn-orange {
            background-color: #FFA500;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e69500;
        }

        .btn-secondary {
            background-color: #6c757d;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            border: none;
        }

        .btn-secondary:hover {
            background-color: #5a6268;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 20px;
        }

        .alert-danger ul {
            padding-left: 20px;
        }

        .alert-danger li {
            list-style-type: disc;
        }



        h1 {
            color: #FFA500
        }
    </style>

    <h1>Edit Item Sale</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('item_sales.update', $itemSale->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="item_code">Item Code:</label>
            <input type="text" name="item_code" class="form-control" value="{{ $itemSale->item_code }}">
        </div>

        <div class="form-group">
            <label for="item_name">Item Name:</label>
            <input type="text" name="item_name" class="form-control" value="{{ $itemSale->item_name }}">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" class="form-control" value="{{ $itemSale->quantity }}">
        </div>

        <div class="form-group">
            <label for="expiry_date">Expiry Date:</label>
            <input type="date" name="expiry_date" class="form-control" value="{{ $itemSale->expiry_date }}">
        </div>

        <div class="form-group">
            <label for="note">Note (optional):</label>
            <textarea name="note" class="form-control">{{ $itemSale->note }}</textarea>
        </div>

        <button type="submit" class="btn btn-orange mt-3">Update</button>
        <a href="{{ route('item_sales.index') }}" class="btn btn-secondary mt-3">Back</a>
    </form>
</div>
