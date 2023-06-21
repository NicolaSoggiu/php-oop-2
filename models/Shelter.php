<?php

include_once __DIR__ . "/Product.php";

class Shelter extends Product
{
  use Measure;

  public function __construct(
    int $id,
    string $name,
    string $description,
    int $price,
    Category $category,
    string $image,
    string $length,
    string $height,
    string $width,
  ) {
    parent::__construct($id, $name, $description, $price, $category, $image, $length, $height, $width);
  }

  public function printCard()
  {
    $type = get_class($this);
    return "
        <div class=\"col\">
        <div class=\"card\" style=\"width: 18rem;\">
        <img src=\"{$this->image}\" class=\"card-img-top card_size\" alt=\"{$this->name}\">
        <div class=\"card-body\">
          <h5 class=\"card-title\">{$this->name}</h5>
          <p class=\"card-text\">{$this->description}</p>
        </div>
        <ul class=\"list-group list-group-flush\">
        <li class=\"list-group-item\">Type : {$type}</li>
          <li class=\"list-group-item\">Category : {$this->category->getName()}</li>
          <li class=\"list-group-item\">Height :{$this->height}</li>
          <li class=\"list-group-item\">Width :{$this->width}</li>
          <li class=\"list-group-item\">Lenght :{$this->length}</li>
          <li class=\"list-group-item\">Price :{$this->getFormattedPrice()}</li>

        </ul>
        <div class=\"card-body\">
          <a href=\"#\" class=\"card-link\">More info</a>
        </div>
      </div>
      </div>";
  }
}


trait Measure
{
  protected  $length;
  protected  $height;
  protected  $width;

  public function getFormattedMeasure()
  {
    return "{$this->length}, {$this->height}, {$this->width}";
  }
}