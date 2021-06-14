<style>
  @import url('https://fonts.googleapis.com/css2?family=Nunito&display=swap');

  * {
    font-family: 'Nunito', sans-serif;
    font-weight: 400;
  }
</style>
<?php
  /*class Cachorro {
    public function __construct() {
      echo '<p>Classe Cachorro.</p>';
    }
  }

  class Gato {
    public function __construct() {
      echo '<p>Classe Gato.</p>';
    }
  }

  new Cachorro();
  new Gato();

  //Factory design pattern.
  class Animal {
    public function build($className) {
      if(class_exists($className)) {
        return new $className;
      } else {
        die('Ops... A classe não existe!');
      }
    }
  }

  Animal::build('Gato');
  Animal::build('Cachorro');
  Animal::build('Cavalo');*/

  class Store {
    public function checkOut() {
      /*$cart = new Cart();
      $cart -> closeCart();
      
      $porterage = new Porterage();
      $porterage -> calcPorterage();
      
      $order = new Order();
      $order -> closeOrder();*/
      
      //Facade design pattern.

      $this -> closeCart();
      $this -> calcPorterage();
      $this -> closeOrder();
    }

    public function closeCart() {
      $cart = new Cart();
      $cart -> closeCart();
    }

    public function calcPorterage() {
      $porterage = new Porterage();
      $porterage -> calcPorterage();
    }

    public function closeOrder() {
      $order = new Order();
      $order -> closeOrder();
    }
  }

  class Cart {
    public function closeCart() {
      echo '<p>Carrinho fechado!</p>';
    }
  }

  class Porterage {
    public function calcPorterage() {
      echo '<p>Frete calculado!</p>';
    }
  }

  class Order {
    public function closeOrder() {
      echo '<p>Compra finalizada!</p>';
    }
  }

  $store = new Store();
  $store -> checkOut();
?>