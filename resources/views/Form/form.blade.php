@extends('layouts.main')
@section('content')
    <div class="container mt-5">
        <div>
@isset($message)
        {{ $message }}
@endisset


        </div>

        <form action="{{ route('form.store') }}" method='post'>
            @csrf
            <div class="form-group">
                <label for="fName">first name</label>
                <input type="text" class="form-control" id="
                fName" aria-describedby="emailHelp"
                    value="{{ old('firstName') }}" placeholder="first name" name="firstName">
                <span>
                    @error('firstName')
                        {{ $message }}
                    @enderror

                </span>

            </div>
            <div class="form-group">
                <label for="lName">last name</label>
                <input type="text" class="form-control" id="lName" name='lastName' aria-describedby="emailHelp"
                    value="{{ old('lastName') }}" placeholder="last name">
                <span>
                    @error('lastName')
                        {{ $message }}
                    @enderror

                </span>

            </div>
            <div class="form-group">
                <span>
                    @error('email')
                        {{ $message }}
                    @enderror

                </span>
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name='email' aria-describedby="emailHelp"
                    value="{{ old('email') }}" placeholder="Enter email">

            </div>
            <div class="form-group">
                <label for="phone">phone number</label>
                <input type="text" class="form-control" id="phone" name='phoneNumber'
                    value="{{ old('phoneNumber') }}"placeholder="phone number">
                <span>
                    @error('phoneNumber')
                        {{ $message }}
                    @enderror

                </span>

            </div>
            <div class="form-group">
                <span>

                    @error('brithDay')
                        {{ $message }}
                    @enderror
                </span>
                <label for="brithDay">brith day</label>
                <input type="date" class="form-control" id="brithDay" name='brithDay'
                    value="{{ old('brithDay') }}"placeholder="brithDay ">

            </div>
            <div class="form-group">
                <select class="form-select" name="gender" aria-label="Default select example">
                    <option selected>select gender</option>
                    <option value="male">male</option>
                    <option value="female">female</option>

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

       
    </div>
@endsection
