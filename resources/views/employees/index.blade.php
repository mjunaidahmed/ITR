@extends('layouts.default')

@section('content')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>CRUD Dashboard for All Employees</h2>

        </div>

    </div>

</div>

@if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

@endif

<table class="table table-bordered">

    <tr>

        <th width="50px">ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Company</th>
        <th>Department</th>
        <th>Status</th>
        <th width="140px" class="text-center">

            <a class="btn btn-success btn-sm" href="{{ route('employees.create') }}"><i class="glyphicon glyphicon-plus"></i> New Record</a>

        </th>

    </tr>

@foreach ($employees as $employee)

<tr>

    <td>{{ $employee->id }}</td>
    <td>{{ $employee->firstname }}</td>
    <td>{{ $employee->lastname }}</td>
    <td>{{ $employee->company }}</td>
    <td>{{ $employee->department }}</td>
    <td>{{ $employee->status }}</td>
    <td>

        <a class="btn btn-info btn-sm" href="{{ route('employees.show',$employee->id) }}"><i class="glyphicon glyphicon-check"></i></a>

        <a class="btn btn-primary btn-sm" href="{{ route('employees.edit',$employee->id) }}"><i class="glyphicon glyphicon-pencil"></i></a>

        {!! Form::open(['method' => 'DELETE','route' => ['employees.destroy', $employee->id],'style'=>'display:inline']) !!}

        <button type="submit" style="display: inline;" class="btn btn-danger btn-sm"><i class="glyphicon glyphicon-trash"></i></button>

        {!! Form::close() !!}

    </td>

</tr>

@endforeach

</table>

{!! $employees->render() !!}

@endsection