@extends('layouts.authdefault')

@section('content')

        <!--template2-->

<h1>Admin Signin</h1>
<div class="login-form">
        @include('layouts.partials.errors')


    <div class="head-info">

    </div>
    <div class="clear"> </div>
    {{ Form::open(['route' => 'login_path']) }}
    {{ csrf_field() }}
    <div class="form-group">

        {{ Form::text('username', null, ['class' => 'text', 'required' => 'required','placeholder'=>'username']) }}
    </div>

    <div class="form-group">

        {{ Form::password('password', ['class' => 'password', 'required' => 'required','placeholder'=>'password']) }}
    </div><br>

    <div class="col-md-12">
       <div class="col-md-6">
    {{ Form::checkbox('remember', 'remember_me') }}
    {{ Form::label('email', 'Remember Password',array('class' => 'label','style'=>'font-size:13px;')) }}
      </div>
        <div class="col-md-6"><a href="{{ url('/password/reset') }}">Forget Password</a></div>
    </div><br><br>


    <div class="form-group">
        {{ Form::submit('Sign In', ['class' => 'submit btn btn-success']) }}
    </div>

    {{ Form::close() }}
</div>


</body>
</html>

<!--/SIGN UP-->



@stop