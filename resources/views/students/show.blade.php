@extends('students.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center py-3">
    <h4>Students Fees Structure</h4>
</div>
      

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Std</th>
            <th>Total Fees</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</td>
            <td>{{ $student->std }}</td>
            <td>{{ $fees }}</td>
        </tr>
    </tbody>
</table>


<div class="col-sm-6 offset-md-6">
    <form action="/students/{{ $student->id }}" method="POST">
    @csrf
        <div class="form-group">
            <label for="">Consession/Discount</label>
            <input type="text" name="consession" id="" class="form-control">    
        </div>

        <div class="form-group">
            <label for="">Initial Paid Fees</label>
            <input type="text" name="deposite" id="" class="form-control">
        </div>

        <div class="from-group">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>
@endsection('content')

