@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					¡Estás a dentro!
				</div>
			</div>
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
			    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
			  </ol>

			  <!-- Wrapper for slides -->
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="http://lorempixel.com/1000/1000/" alt="Lorem">
			      <div class="carousel-caption">
			        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid non illo a nisi vero, doloremque cumque animi, sequi similique necessitatibus qui incidunt, alias consequuntur pariatur quibusdam, quod excepturi ut! Omnis?
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://lorempixel.com/1000/1000/" alt="Lorem">
			      <div class="carousel-caption">
			        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate debitis esse excepturi aperiam maxime eum, temporibus, quasi accusamus hic qui atque nam saepe dolores dignissimos. Amet dolorem rerum, sint molestiae?
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://lorempixel.com/1000/1000/" alt="Lorem">
			      <div class="carousel-caption">
			        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate debitis esse excepturi aperiam maxime eum, temporibus, quasi accusamus hic qui atque nam saepe dolores dignissimos. Amet dolorem rerum, sint molestiae?
			      </div>
			    </div>
			    <div class="item">
			      <img src="http://lorempixel.com/1000/1000/" alt="Lorem">
			      <div class="carousel-caption">
			        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate debitis esse excepturi aperiam maxime eum, temporibus, quasi accusamus hic qui atque nam saepe dolores dignissimos. Amet dolorem rerum, sint molestiae?
			      </div>
			    </div>
			    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam cum, quod quam consequatur hic, temporibus voluptates tenetur accusamus culpa esse magni omnis, blanditiis unde vitae. Ipsum impedit perspiciatis quia, rem.
			  </div>

			  <!-- Controls -->
			  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			    <span class="sr-only">Anterior</span>
			  </a>
			  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			    <span class="sr-only">Siguiente</span>
			  </a>
			</div>
		</div>
	</div>
</div>
@endsection
