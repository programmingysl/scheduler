
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link href="{{asset('css/app.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css" />
<div class="container">
    <div class="panel panel-primary">

        <div class="panel-heading">Event Calendar</div>

        <div class="panel-body">

            {!! Form::open(array('route' => 'events.add', 'method' => 'POST', 'files' => 'true')) !!}

            <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                @if(Session::has('success'))
                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                @elseif(Session::has('warning'))
                    <div class="alert alert-danger">{{ Session::get('warning') }}</div>
                @endif

            </div>

                <div class="col-xs-4 col-sm-4 col-md-4">

                    <div class="form-group">
                        {!! Form::label('event_name', 'Event Name:') !!}
                        <div class="">
                            {!! Form::text('event_name', null , ['class'=> 'form-control']) !!}
                            {!! $errors->first('event_name', '<p class ="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>
                </div>


                <div class="col-xs-3 col-sm-3 col-md-3">

                    <div class="form-group">
                        {!! Form::label('start_date', 'Start Date:') !!}
                        <div class="">
                            {!! Form::date('start_date', null , ['class'=> 'form-control']) !!}
                            {!! $errors->first('start_date', '<p class ="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>
                </div>


                <div class="col-xs-3 col-sm-3 col-md-3">

                    <div class="form-group">
                        {!! Form::label('end_date', 'Start Date:') !!}
                        <div class="">
                            {!! Form::date('end_date', null , ['class'=> 'form-control']) !!}
                            {!! $errors->first('end_date', '<p class ="alert alert-danger">:message</p>') !!}
                        </div>
                    </div>
                </div>

                <div class="col-xs-1 col-sm-1 col-md-1 text-center">&nbsp;<br>
                            {!! Form::submit('Add Event', ['class'=> 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}

        </div>
    </div>
</div>


<script src="{{asset('js/app.js')}}"></script>
<script src="http://code.jquery.com/jquery.js"></script>
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>


<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

{!! $calendar_details->calendar() !!}
{!! $calendar_details->script() !!}