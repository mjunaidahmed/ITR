@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Employee Records</h2>

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

            <strong>Please choose your name from the list:</strong>

            {{ $employee->firstname}}

        </div>
        <div class="form-group">
            <select>
                  @foreach($employee as $record)
                  <option>{{ $record->firstname }}</option>
                
            </select>
      
        </div>
       
    </div>

    <div class="col-xs-4 col-sm-4 col-md-4">

        <div class="form-group">

            <strong>Current Status:</strong>
            @if($employee->status)
            <h1>Clocked IN</h1>
            @else
            <h1>Clocked OUT</h1>
            @endif

        </div>

    </div>
   

</div>

@endsection