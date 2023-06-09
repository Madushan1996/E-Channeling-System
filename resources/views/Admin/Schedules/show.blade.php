@extends('Layout.navbar')


@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2 class="text-dark mb-1"> Show Schedule</h2>

        </div>

        <div class="pull-right">

            <a class="btn btn-primary" href="{{ route('schedules.index') }}"> Back</a>

        </div>

    </div>

</div>


<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Doctor Name :

            Dr. {{ $schedule->doctor->user->f_name }} {{ $schedule->doctor->user->l_name }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Available Days :

            {{ $schedule->available_day }}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">

        <div class="form-group text-dark mb-1">

            Available Time :

            {{ $schedule->start_time }} to {{ $schedule->end_time }}

        </div>

    </div>



</div>

@endsection
