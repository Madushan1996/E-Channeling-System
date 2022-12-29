@extends('Layout.navbar')


@section('content')

<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Edit Doctor</h3>
    </div><button class="btn btn-primary" type="button" data-aos="fade-in" data-aos-duration="1000" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('doctors.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Doctor list</span></span></a></button>
    <div class="card" data-aos="fade-in" data-aos-duration="1000">
        <form style="padding-left: 56px;margin-right: 68px;" method="post" action="{{route('doctors.update',$doctor->user->id)}}" enctype="multipart/form-data">
         {{csrf_field()}}
         @method('PUT')
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">First Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="f_name" value="{{ $doctor->user->f_name }}" required></div>
                @error('f_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Last Name</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="l_name" value="{{ $doctor->user->l_name }}" required></div>
                @error('l_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Password</label></div>
                <div class="col"><input class="form-control text-dark mb-1  @error('password') is-invalid @enderror" name="password" type="password" required></div>
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Confirm Password</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="password" name="confirm-password" required></div>
                @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Address</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" placeholder="House No." name="house_no" value="{{ $doctor->house_no}}"><input class="form-control text-dark mb-1" type="text" placeholder="Street No." name="street_no" value="{{ $doctor->street_no}}"><input class="form-control text-dark mb-1" type="text" placeholder="City" name="city" value="{{ $doctor->city}}"></div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Age</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="age" value="{{ $doctor->age}}"></div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Email address</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="email" value="{{ $doctor->user->email}}" required></div>
                @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Contact No.</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="telno" value="{{ $doctor->telno}}" required></div>
                @error('telno')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">NIC</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="nic" value="{{ $doctor->nic}}"></div>
            </div>

            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Speciality</label></div>
                <div class="col">
                    <select id="speciality" name="speciality" class="form-control" value="{{ $doctor->speciality}}">
                        <option value="--Select option--">--Select option--</option>
                        <option value="Dermatologists">Dermatologists</option>
                        <option value="Cardiologists">Cardiologists</option>
                        <option value="Ophthalmologists">Ophthalmologists</option>
                        <option value="Endocrinologists">Endocrinologists</option>
                        <option value="Gastroenterologists">Gastroenterologists</option>
                        <option value="Dermatology">Dermatology</option>
                        <option value="Anesthesiology">Anesthesiology</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col"><label class="col-form-label text-dark mb-1">Qualification</label></div>
                <div class="col"><input class="form-control text-dark mb-1" type="text" name="qualification" value="{{ $doctor->qualification}}"></div>
            </div>
            <button class="btn btn-primary" id="btn_save" type="submit">Save</button>
        </form>
    </div>

@endsection
