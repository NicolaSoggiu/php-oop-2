<?php

include_once __DIR__ . "/Product.php";


class Food extends Product

{
  public function __construct(
    int $id,
    string $name,
    string $description,
    int $price,
    Category $category,
    string $image,
    protected string $expiry,
    protected int $weigth,
  ) {
    parent::__construct($id, $name, $description, $price, $category, $image);
  }

  public function printCard()
  {
    $type = get_class($this);
    return "
        <div class=\"col\">
        <div class=\"card\" style=\"width: 18rem;\">
        <img src=\"{$this->image}\" class=\"card-img-top\" alt=\"{$this->name}\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">{$this->name}</h5>
          <p class=\"card-text\">{$this->description}</p>
        </div>
        <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">Type : {$type}</li>
        <li class=\"list-group-item\">Category : {$this->category->getName()}</li>
          <li class=\"list-group-item\">Expiry :{$this->expiry}</li>
          <li class=\"list-group-item\">Weigth :{$this->weigth}</li>
          <li class=\"list-group-item\">Price :{$this->getFormattedPrice()}</li>
        </ul>
        <div class=\"card-body\">
          <a href=\"#\" class=\"card-link\">Card link</a>
        </div>
      </div>
      </div>";
  }
}
