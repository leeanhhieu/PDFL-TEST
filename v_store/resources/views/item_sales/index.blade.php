<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="container">
    <style>
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .btn-primary {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-orange {
            background-color: #FFA500; /* Orange color */
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 20px;
        }

        .btn-orange:hover {
            background-color: #e69500;
        }

        .table {
            width: 100%;
            margin-bottom: 20px;
            text-align: center;
        }

        .table th, .table td {
            padding: 12px;
        }

        .btn-warning,
        .btn-danger {
            text-decoration: none;
            font-size: 14px;
            display: inline-flex;
            justify-content: center;
            border: none;
            background-color: transparent;
            padding: 6px 12px;
            border-radius: 5px;
        }

        .btn-warning {
            color: #f0ad4e;
        }

        .btn-warning:hover {
            color: #ec971f;
        }

        .btn-danger {
            color: #d9534f;
        }

        .btn-danger:hover {
            color: #c9302c;
        }

        .btn i {
            margin-right: 5px;
        }

        .actions-btn {
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }

        table, th, td {
            border: none;
        }

        /* Style for thead with orange background */
        thead {
            background-color: #FFA500; /* Orange color */
            color: white;
        }

        h1 {
            color: #FFA500
        }

    </style>

    <h1>Sale Items</h1>
    <!-- Add New button -->
    <a href="{{ route('item_sales.create') }}" class="btn btn-orange">Add New</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Item Code</th>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Expiry Date</th>
                <th>Note</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($itemSales as $itemSale)
                <tr>
                    <td>{{ $itemSale->id }}</td>
                    <td>{{ $itemSale->item_code }}</td>
                    <td>{{ $itemSale->item_name }}</td>
                    <td>{{ $itemSale->quantity }}</td>
                    <td>{{ $itemSale->expiry_date }}</td>
                    <td>{{ $itemSale->note ?? 'N/A' }}</td>
                    <td class="actions-btn">
                        <a href="{{ route('item_sales.edit', $itemSale->id) }}" class="btn btn-warning" title="Edit">
                            <i class="fas fa-edit"></i>
                        </a>

                        <form action="{{ route('item_sales.destroy', $itemSale->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')" title="Delete">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
