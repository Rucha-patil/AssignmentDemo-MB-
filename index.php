<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup /Login </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/toaster.css">

    <style>
      body {
          padding-top :100px;
      }
    </style>
</head>
<body>
    <div class="container">
       <div data-ng-view="" id="ng-view" class="slide-animation"></div>
    </div>
    <toaster-container toaster-options="{'time-out':4000}"></toaster-container>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src=https://ajax.googleapis.com/ajax/libs/angularjs/X.Y.Z/angular-route.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.6/angular-animate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <script src="js\myapp.js"></script>
    <script src="js\input.js"></script>
    <script src="js\mydirectives.js"></script>
    <script src="js\controls.js"></script>
    
</body>
</html>