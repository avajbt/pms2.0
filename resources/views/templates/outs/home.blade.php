@include('partials/head')

{{-- HEADER --}}

<div class="home-container">
      @yield('content')

      <div class="container">
            <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                              <div class="panel-heading">Welcome</div>

                              <div class="panel-body">
                                    iConstruct Project Monitoring System
                              </div>
                        </div>
                  </div>
            </div>
      </div>

</div>

{{-- FOOTER --}}

@section('footer')

      <div class="container">
            <div class="row">
                  <div class="col-xs-12">

                        <hr class="special">
                        <p class="text-center last-line">Copyright {{ date("Y") }} &copy;  <a href="facebook.com/avajbt" target="_blank">AVA-JBT</a></p>
                  </div>
            </div>
      </div>

@endsection