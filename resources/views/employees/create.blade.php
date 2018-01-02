@extends('layouts.app')
@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Add New Record</h2>

        </div>

        <div class="pull-right">

        	<br/>

            <a class="btn btn-primary" href="{{ route('employees.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i> Back</a>

        </div>

    </div>

</div>
<hr class="style2">

{!! Form::open(array('route' => 'employees.store','method'=>'POST')) !!}

     @include('employees.form')

{!! Form::close() !!}

@endsection