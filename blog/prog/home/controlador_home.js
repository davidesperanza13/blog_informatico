function ControladorHome($scope,$http){
	$('#load').hide();

	$scope.recuperarPosts = function(busqueda){
		$('#load').show();

		$http.post("prog/home/model_recuperar_posts.php?busqueda="+busqueda).success(function(data){
			$scope.posts = data;
		});
		$('#load').hide();	
	} 

	$scope.abrirPost = function(post){

		$http.post("prog/post/view_post_detalle.php?post_id="+post).success(function(data){
			$scope.post = data;
		})
	}
	$scope.busqueda = "";
	$scope.recuperarPosts($scope.busqueda);
}