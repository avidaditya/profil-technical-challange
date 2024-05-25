angular.module('myApp', []);
// Configure AngularJS interpolation symbols
angular.module('myApp', []).config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('{%');
    $interpolateProvider.endSymbol('%}');
});