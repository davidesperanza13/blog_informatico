jQuery.fn.reset = function () {
  $(this).each (function() { this.reset(); });
}

angular.module('miAp.controllers', []);
angular.module('miAp', ['ngRoute','ngSanitize'])

.config(function($routeProvider) {
	
    $routeProvider  	  
	
	  // GENERALES
      .when('/', {	   
        templateUrl: 'prog/home/view_home.php'
      })	
		
    .when('/post/:post_id',{
      templateUrl: 'prog/post/view_post_detalle.php'
    })

    .when('/new_post',{
      templateUrl: 'prog/post/view_nuevo_post.php'
    })
    
    .otherwise({
        redirectTo: '/'
      });
	  
  })    