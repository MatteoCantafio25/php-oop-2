<?php
require_once __DIR__ . '/Category.php';

// Creo la classe Product
class Product {
    // Variabili d'istanza
    public $name;
    public $price;
    public $category;
    public $type;
    public $image;
    public $redirect;

    // Costruttore
    public function __construct($name, $price, Category $category, $type, $image, $redirect = null) {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
        $this->type = $type;
        $this->image = $image;
        $this->redirect = $redirect;
    }
}
?>