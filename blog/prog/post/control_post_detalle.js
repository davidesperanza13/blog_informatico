function ControladorPostDetalle($scope,$http,$routeParams) {
var post_actual = $routeParams.post_id;

$("#load").hide();   
   
// RECUPERA LOS DATOS DEL POST ACTUAL
$scope.recuperarPost = function(){
  $("#load").show(); 
  $http.get("prog/post/model_recuperar_post_detalle.php?post_id="+post_actual).success(function(data){
      var obj = data;
      for (var key in obj) {
        $scope[key] = obj[key];
      }
       $("#load").hide(); 
   });        
}

$scope.recuperarPost();
}
