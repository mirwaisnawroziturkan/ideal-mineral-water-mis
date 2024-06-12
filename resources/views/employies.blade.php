@extends('adminlte')
@section('content')
<section class="content">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
    <h3 class="card-title">Employies Table of Ideal Mineral Water Company</h3>
    <button class="submit" id="addvendor">+ Add Employee</button>
</div>

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
<thead>
<tr>
<th>Employee ID</th>
<th>Start Date</th>
<th>Name</th>
<th>Address</th>
<th>Phone</th>
<th>Position</th>
<th>Status</th>
<th>Salary</th>
<th>Delete</th>
<th>Update</th>
</tr>
</thead>
<tbody>
@foreach($employies as $employie)
    <tr>
        <td>{{$employie->id}}</td>
        <td>{{$employie->created_at}}</td>
        <td>{{$employie->name}}</td>
        <td>{{$employie->address}}</td>
        <td>{{$employie->phone}}</td>
        <td>{{$employie->position}}</td>
        <td>{{$employie->status}}</td>
        <td>{{$employie->salary}}</td>
        <td>
            <form action="{{ url('employies/' . $employie->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
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
        <form action="/employies" method="POST" class="vendor-content">
            @csrf            
                <label for="name">Name:</label>
                <input type="text" name="name" id="address">
                <label for="name">Address:</label>
                <input type="text" name="address" id="type">
                <label for="name">Phone:</label>
                <input type="text" name="phone" id="type">
                <label for="name">Position:</label>
                <input type="text" name="position" id="salary">
                <label for="name">Status:</label>
                <input type="text" name="status" id="salary">
                <label for="name">Salary:</label>
                <input type="text" name="salary" id="salary">
                <input type="submit" name="submit" id="endsubmit">
            </div>
        </form>
        </div>
    </div>
</section>
@endsection