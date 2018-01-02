@extends('layouts.default')

 

@section('content')

<div class="row">

    <div class="col-lg-6 margin-tb">

        <div class="pull-left">

            <h2>View Record</h2>

        </div>

        <div class="pull-right">

            <br/>

            <a class="btn btn-primary" href="{{ route('employees.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>

        </div>

    </div>

</div>

<div class="row">

    <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="form-group">

            <strong>First Name:</strong>

            {{ $employee->firstname}}

        </div>

    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="form-group">

            <strong>Last Name:</strong>

            {{ $employee->lastname}}

        </div>

    </div>
     <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="form-group">

            <strong>Company:</strong>

            {{ $employee->company}}

        </div>

    </div>
     <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="form-group">

            <strong>Department:</strong>

            {{ $employee->department}}

        </div>

    </div>
     <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="form-group">

            <strong>Status:</strong>

            {{ $employee->status}}

        </div>

    </div>

</div>

@endsection