@extends('layouts.app')

@section('content')

    <section id="home" name="home"></section>
    <div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-12">
                  <!--  <h1>Welcome To <b>Timepug</b></h1>-->
                    <h3></h3>
                    <br>
                </div>

                <div class="col-lg-2">
                    <h5 style="color:black;">Amazing Results</h5>
                    <p></p>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('frontend/images/arrow1.png') }}">
                </div>
                <div class="col-lg-8">
                    <img class="img-responsive" src="{{ asset('frontend/images/app-bg.png') }}" alt="">
                </div>
                <div class="col-lg-2">
                    <br>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('frontend/images/arrow2.png') }}">
                    <h5 style="color:black;">Awesome Design</h5>
                    <p></p>
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->


@stop