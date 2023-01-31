@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center vh-100%">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center bg-primary text-white">{{ __('Signup') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('patients.store') }}">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">First Name</label></div>
                            <div class="col"><input class="form-control text-dark mb-1" type="text" name="f_name" value="{{ old('f_name') }}" required>
                            @if($errors->has('f_name'))
                            <p class="text-danger">{{ $errors->first('f_name') }}</p>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">Last Name</label></div>
                            <div class="col"><input class="form-control text-dark mb-1" type="text" name="l_name" value="{{ old('l_name') }}" required>
                            @if($errors->has('l_name'))
                            <p class="text-danger">{{ $errors->first('l_name') }}</p>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">Password</label></div>
                            <div class="col"><input class="form-control text-dark mb-1" type="password" name="password" value="{{ old('password') }}" required></div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">Confirm Password</label></div>
                            <div class="col"><input class="form-control text-dark mb-1" type="password" name="confirm-password" value="{{ old('confirm-password') }}" required>
                            @if($errors->has('password'))
                            <p class="text-danger">{{ $errors->first('password') }}</p>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">Address</label></div>
                            <div class="col"><input class="form-control text-dark mb-1" type="text" placeholder="House No." name="house_no" value="{{ old('house_no') }}" required>
                            @if($errors->has('house_no'))
                            <p class="text-danger">{{ $errors->first('house_no') }}</p>
                            @endif

                            <input class="form-control text-dark mb-1" type="text" placeholder="Street No." name="street_no" value="{{ old('street_no') }}" required>
                            @if($errors->has('street_no'))
                            <p class="text-danger">{{ $errors->first('street_no') }}</p>
                            @endif

                            <input class="form-control text-dark mb-1" type="text" placeholder="City" name="city" value="{{ old('city') }}" required>
                            @if($errors->has('city'))
                            <p class="text-danger">{{ $errors->first('city') }}</p>
                            @endif

                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">Blood group</label></div>
                                <div class="col">
                                    <select id="blood_group" name="blood_group" class="form-control">
                                        <option value="--Select option--">--Select option--</option>
                                        <option value="A+">A+</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                    </select>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">Age</label></div>
                            <div class="col"><input class="form-control text-dark mb-1" type="text" name="age" value="{{ old('age') }}" required>
                            @if($errors->has('age'))
                            <p class="text-danger">{{ $errors->first('age') }}</p>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">Email address</label></div>
                            <div class="col"><input class="form-control text-dark mb-1" type="text" name="email" value="{{ old('email') }}" required>
                            @if($errors->has('email'))
                            <p class="text-danger">{{ $errors->first('email') }}</p>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">Contact No.</label></div>
                            <div class="col"><input class="form-control text-dark mb-1" type="text" name="telno" value="{{ old('telno') }}" required>
                            @if($errors->has('telno'))
                            <p class="text-danger">{{ $errors->first('telno') }}</p>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><label class="col-form-label text-dark mb-1">NIC</label></div>
                            <div class="col"><input class="form-control text-dark mb-1" type="text" name="nic" value="{{ old('nic') }}" required>
                            @if($errors->has('nic'))
                            <p class="text-danger">{{ $errors->first('nic') }}</p>
                            @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col"><button class="btn btn-primary" id="btn_save" type="submit">Done</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
