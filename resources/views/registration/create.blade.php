@extends('layouts.authdefault')

@section('content')

        <!--template2-->

    <h1>Admin Signup</h1>


    <div class="login-form">
        @include('layouts.partials.errors')

        <div class="head-info">

        </div>
        <div class="clear"> </div>


        {{ Form::open(['route' => 'register_path']) }}
            <div class="form-group">
            {{ Form::text('username', '', ['class' => 'text', 'required' => 'required','placeholder'=>'username']) }}
            </div>
             <div class="form-group">
            {{ Form::text('email', '', ['class' => 'email', 'required' => 'required','placeholder'=>'email']) }}
             </div>
            <div class="form-group">
            {{ Form::password('password', ['class' => 'password', 'required' => 'required','placeholder'=>'password']) }}
            </div>
            <div class="form-group">
            {{ Form::password('password_confirmation', ['class' => 'password', 'required' => 'required','placeholder'=>'confirm password']) }}
            </div>
           <div class="form-group">
            {{ Form::text('company_name', '', ['class' => 'text', 'required' => 'required','placeholder'=>'company']) }}
            </div>


        <div class="signin">
            {{ Form::submit('Sign Up', ['class' => 'submit btn btn-primary']) }}
        </div>
        {{ Form::close() }}
    </div>


    </body>
    </html>

    <!--/SIGN UP-->



@stop