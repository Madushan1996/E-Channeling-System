@extends('Layout.navbar')

@section('content')

<div class="container-fluid" data-aos="fade-down" data-aos-duration="1000">
    <h3 class="text-dark mb-1">Add Schedule</h3>
</div>
<button class="btn btn-primary" data-aos="fade-down" data-aos-duration="1000" type="button" style="padding: 5px 10px;margin-left: 20px;margin-top: 5px;"><a href="{{route('schedules.index')}}"><span style="--bs-body-color: var(--bs-btn-color);padding-right: 0px;margin-left: 0px;margin-right: -5px;"><span style="color: rgb(255, 255, 255);">Schedule list</span></span></a></button>
<div class="card" data-aos="fade-in" data-aos-duration="1000">
    <form style="padding-left: 56px;margin-right: 68px;" method="POST" action="{{route('schedules.store')}}" data-aos="fade-in" data-aos-duration="1000">
     {{csrf_field()}}
                <div class="row">
                    <div class="col"><label class="col-form-label text-dark mb-1" >Doctor Name</lable></div>
                    <div class="col"><label class="col-form-label text-dark mb-1">Available Date</lable></div>
                    <div class="col"><label class="col-form-label text-dark mb-1" >Start Time</label></div>
                    <div class="col"><label class="col-form-label text-dark mb-1" >End Time</label></div>
                </div>


                <div class="row">
                    <div class="col"><input class="form-control text-dark mb-1" id="doctor_name" type="text" placeholder="Search doctor.." required></div>
                    <input type="hidden" name="doctor_id" id="doctor_nameid" >
                    <div class="col"><input class="form-control text-dark mb-1" id="available_date" type="date" name="available_date" required></div>
                    <div class="col"><input class="form-control text-dark mb-1" id="start_time" type="time" name="start_time" required></div>
                    <div class="col"><input class="form-control text-dark mb-1" id="end_time" type="time" name="end_time" required></div>
                </div>

                

</div>
<button class="btn btn-primary" id="btn_save" type="submit">Done</button>
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    $(document).ready(function(){
        $(document).on('click','#doctor_name', function() {
            var route = "{{ route('livesearch') }}";
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
                    return false;
                }
            });
        });


    });


</script>
@endsection
