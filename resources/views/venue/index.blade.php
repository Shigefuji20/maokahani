@extends('base')

@section('content')

@include('info')


<div class="float-right">
    <a href="{{ '/venue/create' }}" class="btn btn-primary">
        Add New Reservation
    </a>
</div>
<h1>List of Reservation</h1>
<table class="table table-bordered table-striped table-sm">
    <thead>
        <tr>
            <th>ID#</th>
            <th>Last Name</th>
            <th>First Name</th>
            <th>Address</th>
            <thr>Capacity</th>
            <th>Price</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($venue as $u)

        <tr>
            <td>{{$u->id}}</td>
            <td>{{$u->lname}}</td>
            <td>{{$u->fname}}</td>
            <td>{{$u->address}}</td>
            <td>{{$u->capacity}}</td>
            <td>{{$u->price}}</td>
            <td>
                <a href="{{ url('/venue/edit', ['id'=>$u]) }}" class="btn btn-secondary btn-sm">...</a>
            </td>
        </tr>

        @endforeach
    </tbody>
</table>

{{ $venue->links() }}

@stop
