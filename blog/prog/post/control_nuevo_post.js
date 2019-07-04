function ControladorNuevoPost($scope,$http) {

  $("#load").hide();   
  
  //VERIFICAR DATOS
  $scope.verificarCampos = function(){
    errores = false;
    $scope.error = "";

    if($("#titulo").val() == "" || $("#titulo").val() == 'undefined'){
      $scope.error = "* El título del post no debe omitirse.";
      errores = true;
    }
    
    if($("#autor").val() == "" || $("#autor") == 'undefined'){
      $scope.error += "<br>* El autor del post no debe omitirse.";
      errores = true;
    }

    if($("#contenido").val() == "" || $("#contenido").val() == 'undefined'){
      $scope.error += "<br>* El cuerpo del post no debe omitirse.";
      errores = true;
    }
    if(errores){
      return false;
    }
    else{
      return true;  
    }
    
  }

  // PUBLICA EL POST ACTUAL
  $scope.publicarPost = function(){
    $("#load").show();

    if($scope.verificarCampos()){ 
        $http.post("prog/post/model_nuevo_post.php?titulo="+$scope.titulo+"&autor="+$scope.autor+"&contenido="+$scope.contenido).success(function(data){
            var res = data;
            
            if(res){
              $("#load").hide();
              bootbox.alert("Felicidades! Su post fue publicado correctamente.")
              history.back(); 
            }
            else{
              $("#load").hide();
              bootbox.alert("Oh no! No se pudo publicar el post, intente nuevamente.");
            }
         });
    }
    else{
        $("#load").hide();
        bootbox.alert($scope.error);
    }
  }

}
