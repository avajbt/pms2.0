@extends('templates/ins/master')

@section('content')
	<div class="row" xmlns:v-on="http://www.w3.org/1999/xhtml" xmlns:v-on="http://www.w3.org/1999/xhtml"
		 xmlns:v-on="http://www.w3.org/1999/xhtml">
		{{--<div class="col-xs-12 page-title-section">--}}
			{{--<h1 class="pull-left">PROJECT</h1>--}}
		{{--</div>--}}
	</div>

	<div id="hud" class="row">
        <div class="col-xs-12 col-sm-4">
            <div class="jumbotron text-center">
                <p class="dim">Clients</p>
                <h1>@{{ clients }}</h1>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="jumbotron text-center">
                <p class="dim">Projects</p>
                <h1>@{{ projects.length }}</h1>
            </div>
        </div>
        <div class="col-xs-12 col-sm-4">
            <div class="jumbotron text-center">
                <p class="dim">Tasks</p>
                <h1>@{{ tasks }}</h1>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="project-list-container">
                <template v-if="projects.length > 0">
                    <h4>Projects</h4>
                    <input placeholder="Search projects" type="text" class="form-control" v-model="my_project_text">
                    <hr>
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Progress</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="project in projects | filterBy my_project_text">
                            <td>@{{ $index + 1 }}</td>
                            <td><a href="{{ route('projects.show', ['id' => '']) }}/@{{ project.id }}">@{{ project.name }}</a></td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:@{{ project.completedWeight / project.totalWeight * 100 }}%;">
                                    </div>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </template>

                <template v-if="projects.length == 0">
                    <p class="alert alert-warning">
                        CREATE A NEW CLIENT FIRST AND IT WILL LEAD YOU TO ITS PROJECT FORM
                        Create a new project within the <a href="{{ route('clients') }}">clients</a> page.
                    </p>
                </template>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="project-list-container">
                <template v-if="sharedProjects.length > 0">
                    <h4>Needs Approval</h4>
                    <input placeholder="Search projects" type="text" class="form-control" v-model="my_project_text">
                    <hr>
                    <table class="table table-striped">
                        <thead>
                        <tr>

                            <th>#</th>
                            <th>Name</th>
                            <th>Progress</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr v-for="project in sharedProjects | filterBy my_sproject_text">
                            <td>@{{ $index + 1 }}</td>
                            <td><a href="{{ route('projects.show', ['id' => '']) }}/@{{ project.id }}">@{{ project.name }}</a></td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:@{{ project.completedWeight / project.totalWeight * 100 }}%;">
                                    </div>
                                </div>
                            </td>

                            <td><a v-on:click="" type="button" class="btn btn-link">APPROVE</a>
                                <a v-on:click="" type="button" class="btn btn-link">DECLINE</a>
                            </td>

                        </tr>
                        </tbody>
                    </table>
                </template>

                <template v-if="sharedProjects.length == 0">
                    <p class="alert alert-warning">
                        {{--Projects that you have been invited to will show here. Currently--}}
                        {{--you have not been invited to any project.--}}
                    </p>
                </template>
            </div>
        </div>

    </div>

	<div id="client" class="popup-form new-client">
		<header>
			<p class="pull-left">New Client</p>
			<div class="actions pull-right">
				<i title="Minimze " class="ion-minus-round"></i>
				<i title="Close" class="ion-close-round"></i>
			</div>
			<div class="clearfix"></div>
		</header>
		<section>
			<form>
				<span class="status-msg"></span>
				<input v-model="client.name" placeholder="Client Name" type="text" class="form-control">
				<input v-model="client.email" placeholder="Email" type="text" class="form-control">
				<input v-model="client.point_of_contact" placeholder="Name Of Contact" type="text" class="form-control">
				<input v-model="client.phone_number" placeholder="Contact Number" type="text"class="form-control">
			</form>
		</section>
		<footer>
			<a v-on:click="create(client)" href="" class="btn btn-primary pull-right">Save</a>
			<div class="clearfix"></div>
		</footer>
	</div>
    <script src="{{ asset('assets/js/controllers/hud.js') }}"></script>

@stop()