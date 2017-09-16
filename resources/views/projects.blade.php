@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-15 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-heading">Projects

                    <div class="navbar-right">

                        {{--<!-- Authentication Links -->--}}
                        {{--@if (Auth::guest())--}}
                            {{--<li><a href="{{ url('/createproject') }}"></a></li>--}}
                        {{--@else--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
                                    {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                                {{--</a>--}}

                                {{--<ul class="dropdown-menu" role="menu">--}}
                                    {{--<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--@endif--}}
                    </div>

                    </div>

                    <div class="panel-body">

                    {{------}}

    <!-- Project One -->
    <div class="row">
        <div class="col-md-5">
            <a href="#">
                <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>FREEDOM PARK Beautification Project</h3>
            <h4>Roxas, Davao City Philippines 8000</h4>
            <p>Redesign, Repaint and Landscaping</p>
            {{--<a class="btn btn-primary" href="#">View Project</a>--}}
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Two -->
    <div class="row">
        <div class="col-md-5">
            <a href="#">
                <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>LUALHATI HOMEOWNERS ASSOCIATION HOUSING</h3>
            <h4>Catalunan Grande, Davao City Philippines 8000</h4>
            <p>Partition & Converting of land to residential and construction of roads and housing</p>
            {{--<a class="btn btn-primary" href="#">View Project</a>--}}
        </div>
    </div>
    <!-- /.row -->

    <hr>

    <!-- Project Three -->
    <div class="row">
        <div class="col-md-5">
            <a href="#">
                <img class="img-responsive img-hover" src="http://placehold.it/700x300" alt="">
            </a>
        </div>
        <div class="col-md-5">
            <h3>Apartment</h3>
            <h4>GSIS Matina, Davao City Philippines 8000</h4>
            <p>Construction of Apartment located at the back of GSIS Matina</p>
            {{--<a class="btn btn-primary" href="#">View Project</a>--}}
        </div>
    </div>
    <!-- /.row -->

    <hr>

                        {{------}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection