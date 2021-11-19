<div class="form-group">

    {{ Form::label('lname', 'Last Name') }}
    {{ Form::text('lname',null,['class'=>'form-control']) }}

</div>

<div class="form-group">

    {{ Form::label('fname', 'First Name') }}
    {{ Form::text('fname',null,['class'=>'form-control']) }}

</div>

<div class="form-group">

    {{ Form::label('address') }}
    {{ Form::text('address',null,['class'=>'form-control']) }}

</div>

<div class="form-group">

    {{ Form::label('capacity') }}
    {{ Form::text('capacity',null,['class'=>'form-control']) }}

</div>


<div class="form-group">

    {{ Form::label('price') }}
    {{ Form::decimal('price',10,2,['class'=>'form-control']) }}

</div>



