app.controller('authCtrl',function($scope, $rootScope, $routeParams, $location, $htttp, Data){
    $scope.login = {};
    $scope.signup = {};
    $scope.login = function(employee) {
        Data.post('login', {
            employee:employee
        }).then(function(results) {
            Data.toast(results);
            if(results.status == "success"){
                $location.path('home');
            }
        });
    
    };
    
    $scope.signup = {
        userid:'',
        firstname:'',
        lastname:'',
        username:'',
        email:'',
        password:'',
        address:'',
        dob:'',
        company:''

    };
    $scope.signUp = function(employee) {
        Data.post('signUp', {
            customer:customer
        }).then(function(results) {
            Data.toast(results); {
                if(results.status == "success") {
                    $location.path('home');
                }
            }
        });
    };
    $scope.logout = function() {
        Data.get('logout').then(function(results){
            Data.toast(results);
            $location.path('login');
        });
    };
});

