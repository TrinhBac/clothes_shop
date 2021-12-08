@extends('layouts.app')

@section('content')
    <div class="container">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Anh</th>
                <th scope="col">Ten</th>
                <th scope="col">Gia</th>
                <th scope="col">Size</th>
                <th scope="col">so luong</th>
                <th scope="col">Thanh tien</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($cart_items as $item)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><img src="{{ $item->product->image }}" alt="anh"></td>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->product->price }}</td>
                    <td>{{ $item->product->size }}</td>

                    <td>
                        <form action="{{ route('cartUpdate', ['id' => $item->id]) }}"  method="POST">
                            @csrf
                            @method('PUT')
                            <input type="number" name="amount" style="width: 50px; margin-right: 50px" value="{{ $item->amount }}">
                            <input type="submit"  value="Update">
                        </form>
                    </td>
                    <td>{{ $item->product->price * $item->amount }}</td>
                    <td>
                        <a href="{{ route('cartDelete', ['id' => $item->id]) }}">Xoa</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <h2>Tong tien: {{ $total }}</h2>
        <button>Thanh toan</button>
    </div>

    </div>
@endsection
