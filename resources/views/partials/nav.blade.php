
	{{--<a href="{{ route('profile') }}"><img class="circle" src="{{ App\User::get_gravatar(Auth::user()->email) }}">--}}
	{{--</a>--}}

<div class="container-fluid">
	<ul class="nav navbar-nav">

		<li><a class="<?php echo ( Request::is('hud') ) ? 'active' : 'false'; ?> <?php echo ( Request::is('/') ) ? 'active' : 'false'; ?>" href="{{ route('home') }}"><i class="icon ion-ios-home"></i>PROJECT HOME</a></li>
		<li><a class="<?php echo ( Request::is('clients') ) ? 'active' : 'false'; ?>" href="{{ route('clients') }}"><i class="icon ion-person"></i> CLIENTS </a></li>
		<li><a class="<?php echo ( Request::is('search') ) ? 'active' : 'false'; ?>" href="{{ route('search') }}"></a></li>
		<li><a class="<?php echo ( Request::is('products') ) ? 'active' : 'false'; ?>" href="{{ route('products') }}"></i> MATERIALS INVENTORY</a></li>
		<li><a class="<?php echo ( Request::is('profile') ) ? 'active' : 'false'; ?>" href="{{ route('profile') }}"><i class="icon ion-gear-b"></i> SETTINGS </a></li>
</ul>

<ul class="nav navbar-nav navbar-right">
    <li><a href="{{ route('logout') }}"><i class="icon ion-android-exit"></i> Logout</a></li>
    <li>{{Auth::user()->full_name}}</li>
</ul>

</div>


{!! Form::open(array('action' => 'HomeController@search','method' => 'get')) !!}
{{--<div class="form-group search">--}}
		{{--{!! Form::text( 'q', null, array('class' => 'form-control search-bar', "placeholder" => "Search" )) !!}--}}
	{{--</div>	    			--}}
{!! Form::close() !!}





