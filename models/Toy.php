<?php

include_once __DIR__ . "/Product.php";


class Toy extends Product
{

  use Shipping;




  public function __construct(
    int $id,
    string $name,
    string $description,
    int $price,
    Category $category,
    string $image,
    protected string $material,
    protected string $color,
    int $weight,


  ) {
    parent::__construct($id, $name, $description, $price, $category, $image);
    $this->setWeight($weight);
  }

  public function printCard()
  {
    $type = get_class($this);
    return "
        <div class=\"col\">
        <div class=\"card h-100\" style=\"width: 20rem heigth: 15rem;\">
        <img src=\"{$this->image}\" class=\"card_size\" alt=\"{$this->name}\">
        <div class=\"p-3\">
          <h5 class=\"card-title\">{$this->name}</h5>
          <p class=\"card-text\">{$this->description}</p>
        </div>
        <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">Type : {$type}</li>
        <li class=\"list-group-item\">Weight : {$this->weight}</li>
        <li class=\"list-group-item\">Category : {$this->category->getName()}</li>
          <li class=\"list-group-item\">Material : {$this->material}</li>
          <li class=\"list-group-item\">Color :{$this->color}</li>
          <li class=\"list-group-item\">Price :{$this->getFormattedPrice()}</li>
          <li class=\"list-group-item\">Shipping :{$this->getShippingPrice()}</li>

        </ul>
        <div class=\"card-body\">
          <a href=\"#\" class=\"card-link\">More info</a>
        </div>
      </div>
      </div>";
  }
}
