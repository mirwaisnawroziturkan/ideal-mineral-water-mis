@extends('adminlte')
@section('content')
<section class="content">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
    <h3 class="card-title">Vendors Table of Ideal Mineral Water Company</h3>
    <button class="submit" id="addvendor">+ Add a Vendor</button>
</div>

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
<thead>
    <th>ID</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone</th>
    <th>Type</th>
    <th>Salary</th>
    <th>Date</th>
    <th>Delete</th>
    <th>Update</th>
</thead>
@foreach($vendors as $vendor)
<tr>
    <td>{{$vendor->id}}</td>
    <td>{{$vendor->name}}</td>
    <td>{{$vendor->address}}</td>
    <td>{{$vendor->phone}}</td>
    <td>{{$vendor->type}}</td>
    <td>{{$vendor->salary}}</td>
    <td>{{$vendor->created_at}}</td>
    <td>
        <form action="{{ url('vendors', $vendor->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </td>
    </td>
    <td><a href="" class="btn btn-primary">Update</a></td>
    
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
        <form action="/vendors" method="POST" class="vendor-content">
            @csrf            
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="name">Address:</label>
            <input type="text" name="address" id="address">
            <label for="name">Phone:</label>
            <input type="text" name="phone" id="phone">
            <label for="name">Type:</label>
            <input type="text" name="type" id="type">
            <label for="name">Salary:</label>
            <input type="text" name="salary" id="salary">
            <input type="submit" name="submit" id="endsubmit">
        </form>
        </div>
    </div>
</section>
@endsection