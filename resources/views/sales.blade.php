@extends('adminlte')
@section('content')
<section class="content">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
    <h3 class="card-title">Sales Table of Ideal Mineral Water Company</h3>
    <button class="submit" id="addvendor">+ Add a Sale</button>
</div>

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
<thead>
<tr>
<th>ID</th>
<th>Free Bottle</th>
<th>Full Bottle</th>
<th>Sale Bottle</th>
<th>Quantity</th>
<th>Bottle Price</th>
<th>Total Price</th>
<th>Remain Amount</th>
<th>Date</th>
<th>Delete</th>
<th>Update</th>
</tr>
</thead>
<tbody>
@foreach($sales as $sale)
<tr>
    <td>{{$sale->id}}</td>
    <td>{{$sale->free_bottle}}</td>
    <td>{{$sale->full_bottle}}</td>
    <td>{{$sale->sale_bottle}}</td>
    <td>{{$sale->quantity}}</td>
    <td>{{$sale->bottle_price}}</td>
    <td>{{$sale->total_price}}</td>
    <td>{{$sale->remain_amount}}</td>
    <td>{{$sale->created_at}}</td>
    <td>
        <form action="{{url('sales', $sale->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
    <td><button class="btn btn-primary">Update</button></td>
    
</tr>
@endforeach


</tbody>
</table>
</div>

</div>

</div>
</div>
</section>
<section>
<div class="entry-div" id="addvendors">
        <div class="vendor-header"><h3>Enter the vendors information</h3><button class="btn-close" id="btnclose">❌</button></div>
        <div>
        <form action="/sales" method="POST" class="form-content">
            @csrf            
            <div class="form-entry">
                <label for="name">Free Bottle:</label>
                <input type="text" name="free_bottle" id="name">
            </div>
            <div class="form-entry">
                <label for="name">Full Bottle:</label>
                <input type="text" name="full_bottle" id="address">
            </div>
            <div class="form-entry">
                <label for="name">Sale Bottle:</label>
                <input type="text" name="sale_bottle" id="phone">
            </div>
            <div class="form-entry">
                <label for="name">Quantity:</label>
                <input type="text" name="quantity" id="type">
            </div>
            <div class="form-entry">
                <label for="name">Bottle Price:</label>
                <input type="text" name="bottle_price" id="salary">
            </div>
            <div class="form-entry">
                <label for="name">Total Price:</label>
                <input type="text" name="total_price" id="salary">
            </div>
            <div class="form-entry">
                <label for="name">Remain Amount:</label>
                <input type="text" name="remain_amount" id="salary">
            </div>
            <div class="form-entry">
                <input type="submit" name="submit" id="endsubmit">
            </div>
        </form>
        </div>
    </div>
</section>
@endsection
