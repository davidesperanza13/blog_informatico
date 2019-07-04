<script src="prog/post/control_nuevo_post.js"></script>
<div ng-controller="ControladorNuevoPost" class="jumbotron text-center">
		<div id="load"><img src="images/loading.gif"></div>
		<div class="container">
	     <div class="panel panel-default">
           <div class="panel-heading">
              <table class="table" width="100%">
	          <tr class="bg-dark">
	            <td width="10%" valign="middle">
	            	<button onclick="history.back()" title="Volver" class="btn btn-info">&nbsp;&nbsp;<i class="fa fa-chevron-left"></i>&nbsp;&nbsp;</button>
	            </td>
	            <td width="90%" valign="middle">
                  <h4 style="color:white">Nuevo Post</h4>
			    </td>
	          </tr>
	          </table>
			</div>  
		 </div>
      <div class="panel-body" style="width:100%;">
        <center>
          <table class="table" style="width:90%">          
            <tbody>           
        		<tr>
					<td class="text-right" style="vertical-align: middle; width: 10%">Título:</td>
					<td class="text-left" style="vertical-align: middle;">
						<input type="text" id="titulo" class="form-control" ng-model="titulo">
					</td>
				</tr>
				<tr>
					<td class="text-right" style="vertical-align: middle; width: 10%">Autor:</td>
					<td class="text-left" style="vertical-align: middle;">
						<input type="text" id="autor" class="form-control" ng-model="autor">
					</td>
				</tr>
				<tr>
					<td class="text-right" style="vertical-align: top; width: 10%">Contenido:</td>
					<td class="text-right" style="vertical-align: middle;">
						<textarea id="contenido" class="form-control" ng-model="contenido" style="resize: vertical;" rows="25"></textarea>
					</td>
				</tr>
			</tbody>
		  </table>
      </div>
      <div class="modal-footer">
			<button type="button" class="btn btn-dark" onclick="history.back()">Cancelar</button>	
  			<button type="button" class="btn btn-info" ng-click=publicarPost()>Publicar</button>       	
      </div>
      </div>
</div>

<script>

	
</script>