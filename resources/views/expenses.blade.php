@extends('adminlte')
@section('content')
<section class="content">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
<h3 class="card-title">Expenses Table of Ideal Mineral Water Company</h3>
<button class="submit" id="addvendor">+ Add Expense</button>
</div>

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
<thead>
<tr>
<th>Expense ID</th>
<th>Date</th>
<th>Description</th>
<th>Quantity</th>
<th>Unit Amount</th>
<th>Total Amount</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($expenses as $expense)
<tr>
<td>{{$expense->id}}</td>
<td>{{$expense->created_at}}</td>
<td>{{$expense->description}}</td>
<td>{{$expense->quantity}}</td>
<td>{{$expense->unit_amount}}</td>
<td>{{$expense->total_amount}}</td>
<td>
    <form action="{{ url('expenses', $expense->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button>
    </form>
</td>
<td>
    <button class="btn btn-primary">Update</button>
</td>
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
        <div class="vendor-header"><h3>Enter the Salary information</h3><button class="btn-close" id="btnclose">❌</button></div>
        <div>
        <form action="/expenses" method="POST" class="vendor-content">
            @csrf            
                <label for="name">Description:</label>
                <input type="text" name="description" id="address">
                <label for="name">Quantity:</label>
                <input type="text" name="quantity" id="type">
                <label for="name">Unit Amount:</label>
                <input type="text" name="unit_amount" id="salary">
                <label for="name">Total Amount:</label>
                <input type="text" name="total_amount" id="salary">
                <input type="submit" name="submit" id="endsubmit">
            </div>
        </form>
        </div>
    </div>
</section>
@endsection