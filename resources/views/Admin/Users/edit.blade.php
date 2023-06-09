@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1">Edit User</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>

        </div>

    </div>

</div>


@if (count($errors) > 0)

  <div class="alert alert-danger">

    <strong>Whoops!</strong> There were some problems with your input.<br><br>

    <ul>

       @foreach ($errors->all() as $error)

         <li>{{ $error }}</li>

       @endforeach

    </ul>

  </div>

@endif


{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            First Name:

            {!! Form::text('f_name', null, array('placeholder' => 'First Name','class' => 'form-control text-dark mb-1')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Last Name:

            {!! Form::text('l_name', null, array('placeholder' => 'Last Name','class' => 'form-control text-dark mb-1')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Email:

            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control text-dark mb-1')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Password:

            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control text-dark mb-1')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Confirm Password:

            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control text-dark mb-1')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Role:

            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control text-dark mb-1','multiple')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

        <button type="submit" class="btn btn-primary">Save</button>

    </div>

</div>

{!! Form::close() !!}



@endsection
