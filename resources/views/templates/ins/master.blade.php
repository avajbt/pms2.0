@include('partials/head')



	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">

					@include('partials/nav')

					</div>

					<div class="panel-body">

						@yield('content')
						@include('partials/footer')

					</div>
				</div>
			</div>
		</div>
	</div>





