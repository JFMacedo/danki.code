var app = angular.module('myShoppingList', []);
app.controller('myCtrl', function($scope) {
  $scope.products = ['LEITE', 'PÃO', 'QUEIJO'];
  $scope.addItem = function() {
    if($scope.newItem == undefined) {
      alert('Por favor, escreva o nome do item!')
    } else if($scope.products.indexOf($scope.newItem.toUpperCase()) == -1) {
      $scope.products.push($scope.newItem.toUpperCase());
    } else {
      alert('O item já está cadastrano na sua lista de produtos!');
    }
    $scope.newItem = '';
  }
  $scope.removeItem = function($index) {
    $scope.products.splice($index, 1)
  }
});