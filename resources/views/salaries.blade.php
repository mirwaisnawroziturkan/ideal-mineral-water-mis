@extends('adminlte')
@section('content')
<section class="content">
<div class="row">
<div class="col-12">
<div class="card">
<div class="card-header">
    <h3 class="card-title">Salaries Table of Ideal Mineral Water Company</h3>
    <button class="submit" id="addvendor">+ Add a Sale</button>
</div>

<div class="card-body table-responsive p-0">
<table class="table table-hover text-nowrap">
<thead>
<tr>
<th>salary ID</th>
<th>Employee ID</th>
<th>Month</th>
<th>Paid Date</th>
<th>Bonus Salary</th>
<th>Net Salary</th>
<th>Remain Salary</th>
<th>Total Salary</th>
<th>Delete</th>
<th>Update</th>
</tr>
</thead>
<tbody>
@foreach($salaries as $salary)
<tr>
<td>{{$salary->id}}</td>
<td>{{$salary->employee_id}}</td>
<td>{{$salary->mount}}</td>
<td>{{$salary->created_at}}</td>
<td>{{$salary->bonus_salary}}</td>
<td>{{$salary->net_salary}}</td>
<td>{{$salary->remain_salary}}</td>
<td>{{$salary->total_salary}}</td>
<td>
    <form action="{{url('salaries', $salary->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-danger">Delete</button>
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
        <div class="vendor-header"><h3>Enter the Salary information</h3><button class="btn-close" id="btnclose">❌</button></div>
        <div>
        <form action="/salaries" method="POST" class="form-content">
            @csrf            
            <div class="form-entry">
                <label for="name">Employee ID:</label>
                <input type="text" name="employee_id" id="name">
            </div>
            <div class="form-entry">
                <label for="name">Mount:</label>
                <input type="text" name="mount" id="address">
            </div>
            <div class="form-entry">
                <label for="name">Bonus Salary:</label>
                <input type="text" name="bonus_salary" id="type">
            </div>
            <div class="form-entry">
                <label for="name">Net Salary:</label>
                <input type="text" name="net_salary" id="salary">
            </div>
            <div class="form-entry">
                <label for="name">Remain Salary:</label>
                <input type="text" name="remain_salary" id="salary">
            </div>
            <div class="form-entry">
                <label for="name">Total Salary:</label>
                <input type="text" name="total_salary" id="salary">
            </div>
            <div class="form-entry">
                <input type="submit" name="submit" id="endsubmit">
            </div>
        </form>
        </div>
    </div>
</section>
@endsection