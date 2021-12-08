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
        </tr>
      </thead>
      <tbody>
          @foreach ($products as $product)
              <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                          <td><img src="{{ $product->image }}" alt="anh"></td>
                          <td>{{ $product->name }}</td>
                          <td>{{ $product->price }}</td>
                          <td>{{ $product->size }}</td>
                            <td>
                                <form action="{{ route('addToCart') }}"  method="POST">
                                    @csrf
                                    <input type="hidden" name="cart_id" value="{{ Auth::user()->cart->id }}">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="number" name="amount" style="width: 50px; margin-right: 50px" value="1" min="1">
                                    <input type="submit"  value="Them vao gio">
                                </form>
                            </td>
              </tr>
          @endforeach
      </tbody>
    </table>
    </div>
</div>
@endsection
