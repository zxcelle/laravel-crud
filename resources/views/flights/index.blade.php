<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Flights</h1>
    <div>
        @if (session()->has('success'))
        <div>
            {{session('success')}}
        </div>
            
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('flights.create')}}">Create a Product</a>
        </div>
        <table border="1" style="border-collapse: collapse">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($flights as $flight)
                <tr>
                    <td>{{$flight->id}}</td>
                    <td>{{$flight->name}}</td>
                    <td>{{$flight->qty}}</td>
                    <td>{{$flight->price}}</td>
                    <td>{{$flight->description}}</td>
                    <td>
                        <a href="{{route('flights.edit',['flight' => $flight])}}">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{route('flights.destroy',['flight' => $flight])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>