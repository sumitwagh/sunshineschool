@extends('students.layout')

@section('content')

<div class="col-sm-6 col-12 offset-sm-3 border rounded p-4 mt-5">
        <h4 class="">Add Student Details</h4>

    <div class="pt-4">
        <form action="/students" method="POST">
            {{ csrf_field() }}

            <div class="form-group">     
                <label for="first_name">First Name :</label>
                <input type="text" name="first_name" id="" placeholder="Enter Student First Name" class="mb-2 form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}" value="{{ old('first_name') }}"> 
                <div class="text-danger">
                    @if ($errors->has('first_name'))
                        {{ $errors->first('first_name') }}
                    @endif   
                </div>
                <label for="middle_name">Middle Name :</label>
                <input type="text" name="middle_name" id="" placeholder="Enter Father's Name" class="mb-2 form-control {{ $errors->has('middle_name') ? 'is-invalid' : '' }}" value="{{ old('middle_name') }}"> 
                <div class="text-danger">
                    @if ($errors->has('middle_name'))
                        {{ $errors->first('middle_name') }}
                    @endif   
                </div>
                <label for="surname">Last Name :</label>
                <input type="text" name="last_name" id="" placeholder="Enter Surname" class="mb-2 form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}" value="{{ old('last_name') }}"> 
                <div class="text-danger">
                    @if ($errors->has('last_name'))
                        {{ $errors->first('last_name') }}
                    @endif   
                </div>
            </div>

            <div class="form-group">
               <div class="mb-2">
                  <label for="date">Date of Birth :</label>
                  <input type="date" name="dob" id="" placeholder="Enter DOB" class="form-control {{ $errors->has('dob') ? 'is-invalid' : ''}}" value="{{ old('dob') }}">
                  <div class="text-danger">
                      @if ($errors->has('dob'))
                         {{ $errors->first('dob') }}
                      @endif
                  </div>
               </div>
            </div>

            <div class="form-group">
                <label for="Gender">Gender :</label>
                <div class="form-check form-check-inline ml-2">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Boy" @if(old('gender')) checked @endif>
                    <label class="form-check-label ml-2" for="inlineRadio1">Boy</label>
                </div>
                <div class="form-check form-check-inline ml-2">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Girl" @if(old('gender')) checked @endif>
                    <label class="form-check-label ml-2" for="inlineRadio2">Girl</label>
                </div>
                <div class="text-danger">
                    @if ($errors->has('gender'))
                       {{ $errors->first('gender') }}
                    @endif
                </div>
            </div>

            <div class="form-group">
                 <label for="inputAddress">Address :</label>
                 <input type="text" class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}" id="inputAddress" name="address" placeholder="1234 Main St" value="{{ old('address') }}">

                 <div class="text-danger">
                    @if($errors->has('address'))
                        {{ $errors->first('address')}}
                    @endif
                 </div>
            </div>

            <div class="form-group">
                <label for="mobile">Guardian's Mobile :</label>
                <input type="text" class="form-control {{ $errors->has('mobile') ? 'is-invalid' : ''}}" id="inputMobile" name="mobile" placeholder="Enter 10 Digit Mobile Number">

                <div class="text-danger">
                    @if($errors->has('mobile'))
                        {{ $errors->first('mobile') }}
                    @endif
                </div>
            </div>

            <div class="form-group">
                <label for="mobile">Select Standard :</label>
                
                <select name="std" id="" class="custom-select">
                    <option value="">Select std</option>
                    <option value="Nursery">Nursery</option>
                    <option value="Jr.Kg">Jr.Kg</option>
                    <option value="Sr.Kg">Sr.Kg</option>
                    <option value="1st">1st</option>
                </select>

                <div class="text-danger">
                    @if($errors->has('std'))
                        {{ $errors->first('std') }}
                    @endif
                </div>

                <div class="d-flex justify-content-center py-3">
                     <button type="submit" class="btn btn-primary">Add Student</button>
                </div> 
            </div>
        </form>
    </div>

</div>

@endsection('content')