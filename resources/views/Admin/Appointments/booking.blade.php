@extends('Layout.navbar')

@section('content')

<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Add Appointment</h3>
</div>
<button class="btn btn-primary" data-aos="fade-down" data-aos-duration="1000" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('doctor_appointment_list')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Back</span></span></a></button>
<button class="btn btn-primary" data-aos="fade-down" data-aos-duration="1000" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('appointments.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Appointment list</span></span></a></button>
<div class="card" data-aos="fade-in" data-aos-duration="1000">
    <form style="padding-left: 56px;margin-right: 68px;" method="POST" action="{{route('appointments.store')}}" data-aos="fade-in" data-aos-duration="1000" enctype="multipart/form-data">
     {{csrf_field()}}

                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1">Patient Name</lable></div>
                    <div class="col"><input class="form-control text-dark mb-1" type="text" id="patient_name" name="patient_name" required>
                        <input type="hidden" name="patient_name" id="patient_nameid" >
                    </div>
                </div>

                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1" >Doctor Name</lable></div>
                    <div class="col"><input class="form-control text-dark mb-1" id="doctor_name" type="text" value="Dr. {{ $doctor->user->f_name }} {{ $doctor->user->l_name }}" readonly required>
                        <input type="hidden" name="doctor_id" value="{{ $doctor->id }}" >
                    </div>
                </div>

                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1">Available Day</lable></div>
                    <div class="col"><input class="form-control text-dark mb-1" id="date" type="text" value="{{ $schedule[0]->available_day }}" readonly required>
                        <input type="hidden" name="schedule_id" value="{{ $schedule[0]->id }}" >
                    </div>
                </div>

                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1" >Available Time</label></div>
                    <div class="col"><input class="form-control text-dark mb-1" id="time" name="time" type="text" value="{{ $schedule[0]->start_time }} to {{ $schedule[0]->end_time }}" readonly required>
                    </div>
                </div>

                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1" >Description</label></div>
                    <div class="col">
                        <textarea class="form-control @error('description') is-invalid @enderror text-dark mb-1" id="description" name="description">{{ old('description') }}</textarea>
                    </div>
                </div>

                <button class="btn btn-primary" margin-right="100px" id="btn_save" type="submit">Next</button>



</div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>


<script>


    $(document).ready(function(){
        $(document).on('click', '#patient_name', function(e) {
            //console.log("hi");
            var route = "{{ route('livesearch2') }}";
            $(this).autocomplete({
                source: function( request, response ) {
                    $.ajaxSetup({

                        headers: {

                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                        }

                    });
                   // Fetch data
                    $.ajax({
                        url:route,
                        type: 'post',
                        dataType: "json",
                        data: {
                            query: request.term
                        },
                        success: function( data ) {
                        response( data );

                        }
                    });
                },
                select: function (event, ui) {
                    // Set selection
                    var id = event.target.id
                    $('#'+id).val(ui.item.label); // display the selected text
                    $('#'+id+'id').val(ui.item.value); // save selected id to input
                    //console.log(ui.item.value);
                    return false;
                }
            });
        });


    });


</script>
@endsection
