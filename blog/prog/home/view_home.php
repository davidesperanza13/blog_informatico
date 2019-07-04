<?php

?>
<script src="prog/home/controlador_home.js"></script> 
<div ng-controller="ControladorHome" class="jumbotron text-center">
	<div id="load"><img src="images/loading.gif"></div>
	<div class="panel">
		<div class="panel-heading" style="padding-bottom: 15px">
			<div class="col-sm-12 input-group">
				<div class="col-sm-10" align="left">
					<input type="text" class="form-control" placeholder="Buscar post..." ng-model="busqueda">
				</div>
				<div align="right" class="col-sm-2">
					<button  title="Buscar" class="btn btn-dark" ng-click="recuperarPosts(busqueda)">&nbsp;&nbsp;<i class="fa fa-search"></i>&nbsp;&nbsp;</button>
			  	</div>
			</div>
		</div>
		<div class="panel-body" style="width:100%; height:500px; overflow:scroll">
			<table class="table table-hover table-striped" id="posts">
				<thead class="thead-dark">
					<tr>
						<th width="50%" class="text-left">Título</th>
						<th width="15%" class="text-center">Fecha</th>
						<th width="15%" class="text-center">Hora</th>
						<th width="20%" class="text-center">Autor</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="post in posts">
						<td class="text-left"><a href="#post/{{post.post_id}}"><b>{{post.titulo}}</b></a></td>
						<td class="text-center">{{post.fecha_publicacion}}</td>
						<td class="text-center">{{post.hora}}</td>
						<td class="text-center">{{post.autor}}</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<script>
	$(document).ready(function() {

    $('#posts tr').click(function() {
        var href = $(this).find("a").attr("href");
        if(href) {
            window.location = href;
        }
    });

});
</script>