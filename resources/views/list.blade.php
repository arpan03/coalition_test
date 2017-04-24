@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Product</div>
                <div class="panel-body">
                   <table>
                   @foreach ($products as $product)
                       <tr>
                            <td class="col-md-4">{{ $product->product_name }}</td>
                            <td class="col-md-4">{{ $product->quantity }}</td>
                            <td class="col-md-4">{{ $product->price }}</td>
                            <td class="col-md-4">{{ $product->price * $product->quantity }}</td>

                       </tr>    
                   @endforeach
                   </tab/e>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection	