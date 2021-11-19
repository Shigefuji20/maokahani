@extends('base')

@section('content')
    <!-- Modal -->
    <div class="modal fade" id="delete`Venue`Modal" tabindex="-1" aria-labelledby="delete`Venue`ModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="delete`Venue`ModalLabel">Delete Reservation - {{$`venue`->lname}}, {{$venue->fname}}    </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            {!! Form::open(['url'=>'/Venue', 'method'=>'delete']) !!}
            <div class="modal-body">
                Are you sure you want to delete this Reservation?
                {{ Form::hidden('venue_id', $venue->id)}}
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete Reservation</button>
            </div>
            {!! Form::close() !!}
        </div>
        </div>
    </div>

    <h1>Edit venue {{ $venue->lname }}, {{ $venue->fname }}</h1>

    <div class="row">
        <div class="col-md-5">
            {!! Form::model($venue, ['url'=>"/Venue/$venue->id", 'method'=>'patch']) !!}

            @include('Venue._form')

            <div class="form-group">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deletevenueModal">
                    Delete Reservation
                </button>
                <button class="btn btn-primary float-right">
                    Update Reservation
                </button>
            </div>

            {!! Form::close() !!}

        </div>

        <div class="col-md-7">
            @include('errors')
        </div>
    </div>

@endsection
