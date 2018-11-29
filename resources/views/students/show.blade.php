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
            <th>DOB</th>
            <th>Gender</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Std</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $student->id }}</td>
            <td>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</td>
            <td>{{ $student->dob }}</td>
            <td>{{ $student->gender }}</td>
            <td>{{ $student->address }}</td>
            <td>{{ $student->mobile }}</td>
            <td>{{ $student->std }}</td>
        </tr>
    </tbody>
</table>
@php



    if($student->std == '1st')
        $fees = 7000;
     elseif ($student->std == 'Jr.kg') {
         $fees = 5000;
     } elseif($student->std == 'Sr.kg') {
         $fees = 6000;
     } else {
         $fees = 4000;
     }
     
@endphp
{{ $fees }}
    
@endsection('content')

