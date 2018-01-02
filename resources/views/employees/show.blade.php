@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Employee Record</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="{{ route('employees.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i> Return</a>

        </div>

    </div>

</div>
<hr class="style2">

<div class="row">

    <div class="col-xs-4 col-sm-4 col-md-4">

        <div class="form-group">

            <strong>First Name:</strong>

            {{ $employee->firstname}}

        </div>
        <div class="form-group">

            <strong>Last Name:</strong>

            {{ $employee->lastname}}

        </div>
        <div class="form-group">

            <strong>Company:</strong>

            {{ $employee->company}}

        </div>
        <div class="form-group">

            <strong>Department:</strong>

            {{ $employee->department}}

        </div>

    </div>

    <div class="col-xs-4 col-sm-4 col-md-4">

        <div class="form-group">

            <strong>Status:</strong>
            @if($employee->status)
            <h1>IN</h1>
            @else
            <h1>OUT</h1>
            @endif

        </div>

    </div>
   

</div>

@endsection