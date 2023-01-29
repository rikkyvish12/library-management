@extends('layouts.app')
@section('content')
    <div class="main_content_iner ">
        <div class="row m-1">
                    <div class="col-md-12">
                        @if (session('status'))
                            <div class="alert alert-info" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                    </div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_box mb_30">
                        <div class="box_header ">
                            <div class="main-title">
                                <h3 class="mb-0">Update Student</h3>
                            </div>
                        </div>
                        <form class="yourform" action="{{ route('student.update', $student->id) }}" method="post"
                            autocomplete="off">
                            @csrf
                            <div class="mb-3">
                                <label>Student Name</label>
                                <input type="text" class="form-control" placeholder="Student Name" name="name"
                                    value="{{ $student->name }}" required>
                                @error('name')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="address"
                                    value="{{ $student->address }}" required>
                                @error('address')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Gender</label>
                                <select name="gender" class="form-control">
                                    @if ($student->gneder == 'male')
                                        <option value="male" selected>Male</option>
                                    @else
                                        <option value="female" selected>Female</option>
                                    @endif
                                </select>
                                @error('gender')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Age</label>
                                <input type="number" class="form-control" placeholder="Age" name="age"
                                    value="{{ $student->age }}" required>
                                @error('age')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="phone" class="form-control" placeholder="Phone" name="phone"
                                    value="{{ $student->phone }}" required>
                                @error('phone')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Email" name="email"
                                    value="{{ $student->email }}" required>
                                @error('email')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="Class" name="password"
                                    value="{{ $student->password }}" required>
                                @error('password')
                                    <div class="alert alert-danger" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <input type="submit" name="save" class="btn btn-danger" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
