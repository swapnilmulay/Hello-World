<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/*The ng-app directive tells AngularJS that the <div> element is the "owner" of an AngularJS application.*/
/*The ng-model directive binds the value of the input field to the application variable name.*/
/*The ng-bind directive binds the innerHTML of the <p> element to the application variable name. */
/*The ng-init directive initializes AngularJS application variables.*/

/*Alternative way data-ng-app,data-ng-init,app-ng-bind etc*/

/*
AngularJS expressions are written inside double braces: {{ expression }}.
AngularJS modules define AngularJS applications.
AngularJS controllers control AngularJS applications.
The ng-app directive defines the application, the ng-controller directive defines the controller.

 *  */
?>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<body>
<!--    <div ng-app="" ng-init="name='swapnil'">
        <p>Name:<input type="text" ng-model="name"></p>
        <p>    ng-bind="name" 
            Hello {{name}}
        </p>
    </div>-->
    
<!--    <p>Try to change the names.</p>
    <div ng-app="myApp" ng-controller="myCtrl">

        First Name: <input type="text" ng-model="firstName"><br>
        Last Name: <input type="text" ng-model="lastName"><br>
        <br>
        Full Name: {{firstName + " " + lastName}}

    </div>

    <script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope) {
        $scope.firstName= "Swapnil";
        $scope.lastName= "Mule";
    });
    </script>
    -->
    
<!--    <div ng-app="" ng-init="qty=5;cost=10">
        <span ng-bind="qty * cost">
    </div>-->

<!--<div ng-app="" ng-init="points=[1,15,19,2,40]">

<p>The third result is {{ points[2] }}</p>
</div>
-->

<div data-ng-app="" data-ng-init="quantity=1;price=5">

<h2>Cost Calculator</h2>

Quantity: <input type="number" ng-model="quantity">
Price: <input type="number" ng-model="price">

<p><b>Total in dollar:</b> {{quantity * price}}</p>

</div>

</body>
</html>