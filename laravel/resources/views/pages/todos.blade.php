
@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						

						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
							@if(!count($notdone) && !count($done))

							<p>U hebt nog niets ingevuld</p>
							@else

								<h1>Todo's</h1>
							<ul>
							@if(!count($notdone))
							<li>nothing todo yet</li>
							@else
							@foreach ($notdone as $todo)
						
							
							<li>
							<form class="inline" action="http://laravel.local/edit" method="POST">
								<input  type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								
								<input type="submit"  title="Status wijzigen" name="edit" value="{{$todo->id}}" class="status not-done">
								</form>
								<form class="inline" action="http://laravel.local/delete" method="POST">

									<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<label>{{$todo->todo}}</label><button  title="Verwijderen" name="delete" value="{{$todo->id}}">Verwijder</button>
							</form>

							</li>
							

							@endforeach
							@endif
							</ul>	
							<h1>Done</h1>
							<ul>
							@if(!count($done))
							<li>nothing todo yet</li>
							@else
							@foreach ($done as $todo)
							
							<li>
							<form class="inline" action="http://laravel.local/edit" method="POST" >
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<input type="submit"  title="Status wijzigen" name="edit" value="{{$todo->id}}" class="status not-done">
							</form>
								<form class="inline" action="http://laravel.local/delete" method="POST" >
								<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
								<label>{{$todo->todo}}</label><button   title="Verwijderen" name="delete" value="{{$todo->id}}">Verwijder</button>
							</form>
							</li>

						
							@endforeach
							@endif
							</ul>

							@endif
							{!! Form::open() !!}
							<div class="col-md-8 col-md-offset-2">
								{!! Form::label('todo', 'Add Todo:') !!}
								{!! Form::text('todo',null,['class' => 'form-control']) !!}
							</div>

							<div class="col-md-8 col-md-offset-2">
								{!! Form::submit('add todo', ['class' =>'btn btn-primary form-control']) !!}
							</div>

							{!! Form::close() !!}
							</div>
						</div>
					</div>
				</div>
			</div>
@endsection