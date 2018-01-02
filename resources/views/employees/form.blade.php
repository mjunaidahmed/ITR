@if (count($errors) > 0)

    <div class="alert alert-danger">

        <strong>Ah Snap!</strong> Computer says no!! Please Check the errors<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

<div class="row">

    <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="form-group">

            <strong>First Name:</strong>

            {!! Form::text('firstname', null, array('placeholder' => 'Firstname','class' => 'form-control')) !!}

        </div>

    </div>
    <div class="col-xs-6 col-sm-6 col-md-6">

        <div class="form-group">

            <strong>Last Name:</strong>

            {!! Form::text('lastname', null, array('placeholder' => 'Lastname','class' => 'form-control')) !!}

        </div>

    </div>

     <div class="col-xs-4 col-sm-4 col-md-4">

        <div class="form-group">

            <strong>Company:</strong>

            {!! Form::text('company', null, array('placeholder' => 'Company','class' => 'form-control')) !!}

        </div>

    </div>
      <div class="col-xs-4 col-sm-4 col-md-4">

        <div class="form-group">

            <strong>Department:</strong>

            {!! Form::text('department', null, array('placeholder' => 'Department','class' => 'form-control')) !!}

        </div>

    </div>
      <div class="col-xs-4 col-sm-4 col-md-4">

        <div class="form-group">

            <strong>Status:</strong>

            {!! Form::text('status', null, array('placeholder' => 'Status','class' => 'form-control')) !!}

        </div>

    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

            <button type="submit" class="btn btn-primary">Submit</button>

    </div>

</div>