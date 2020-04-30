var app = angular.module('myApp',['ngRoute', 'ngAnimate','toaster']);
app.config(['$routeProvider',
               function($routeProvider){
                   $routeProvider.
                    when('/login',{
                        title:'Login',
                        templateUrl: 'login.php',
                        controller:'authCtrl'

                    })
                    .when('/logout',{
                        title:'Logout',
                        templateUrl:'login.php',
                        controller:'logoutCtrl'
                    })
                    .when('/signup',{
                        title:'Signup',
                        templateUrl:'signup.php',
                        controller:'authCtrl'
                    })
                    .when('/home',{
                        title:'Home',
                        templateUrl:'home.php',
                        controller:'authCtrl'
                    })
                    .when('/',{
                        title:'Login',
                        templateUrl:'login.php',
                        controller:'authCtrl',
                        role:'0'
                    })
                    .otherwise({
                        rediredtTO:'/login'
                    });
                
                }
            ])
.run(function($rootScope,$location, Data){
     $rootScope.$on("$routeChangeStart", function(event, next, current){
         $rootScope.authenticted = false;
         Data.get('session').then(function(results){
             if(results.user_id){
                 $rootScope.authenticted = true;
                 $rootScope.user_id = results.user_id;
                 $rootScope.first_name =results.first_name;
                 $rootScope.last_name = results.last_name;
                 $rootScope.email = results.email;
             }else{
                 var nextUrl = next.$$route.originalPath;
                 if (nextUrl == '/signup' || nextUrl == '/login'){

                 }else{
                     $location.path("/login");
              

                 }
             }
         });
   

     });
});