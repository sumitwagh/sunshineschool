@extends('students.layout')

@section('content')

<div class="d-flex justify-content-between align-items-center py-3">
    <h4>Students Details</h4>
    <div>
        <a href="/students/create" role="button" class="btn btn-primary"> + Add a Student</a>
    </div>
</div>
    
<div class="d-flex justify-content-between">
    <div>
        <form action="/" method="POST" class="form-inline">
            {{ csrf_field() }}
            <div class="form-group">
            <input type="text" name="search"  class="form-control" placeholder="Search Student" autofocus>
                <button type="submit" class="btn btn-primary ml-2">Search</button>
            </div>
        </form>
    </div>

    <div>
        <form action="/students" method="POST">
        {{ csrf_field() }}
            <select name="standard" id="" class="custom-select mb-3">
                <option value="0">Select standard:</option>
                <option value="Nursery">Nursery</option>
                <option value="Jr.Kg">Jr.Kg</option>
                <option value="Sr.Kg">Sr.Kg</option>
                <option value="1st">1st</option>
            </select>
        </form>
    </div>
</div>

@if($students->count())
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
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->first_name }} {{ $student->middle_name }} {{ $student->last_name }}</td>
                <td>{{ $student->dob }}</td>
                <td>{{ $student->gender }}</td>
                <td>{{ $student->address }}</td>
                <td>{{ $student->mobile }}</td>
                <td>{{ $student->std }}</td>
                <td>
                    <div class="d-flex">
                        <a class="btn btn-sm btn-info" href="/students/{{ $student->id }}/edit">Edit</a>
                        <a class="btn btn-sm btn-warning ml-2" href="/students/{{ $student->id }}">Fees</a>
                        <form action="/students/{{ $student->id }}" method="POST" class="ml-2">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger">Delete</button>                            
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $students->links() }}

@else

    <p class="text-center">No students in database</p>

@endif

@endsection('content')