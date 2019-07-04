<script src="prog/post/control_post_detalle.js"></script> 
<div ng-controller="ControladorPostDetalle" class="jumbotron text-center">
<div id="load"><img src="images/loading.gif"></div>
	<div class="container">
	    <div class="panel panel-default">
	     <div class="panel-heading" style="padding-bottom: 15px;">
		 <table class="table" width="100%">
			   <tr class="bg-dark">
			     <td width="10%" valign="middle">
			       <button onclick="history.back()" title="Volver" class="btn btn-info">&nbsp;&nbsp;<i class="fa fa-chevron-left"></i>&nbsp;&nbsp;</button>
			     </td>
			     <td width="90%" valign="middle">
			       <h4 style="color:white">{{titulo}}</h4>  
			     </td>
			   </tr>
		 </table>
	     </div>
	      <div class="panel-body" style="width:100%;">
	      	<div class="col-md-12">
	      		<div class="col-md-10 offset-md-1">
	      			<p class="text-justify">{{cuerpo}}</p>	
	      		</div>
	      	</div>
	      </div>
	    </div>
    </div>       
</div>