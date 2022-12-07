<?php

class Product {
  private $id;
  private $name;
  private $description;
  private $image;

  public function __construct(number $id, string $name, string $description, string $image) {
    $this->id = $id;
    $this->name = $name;
    $this->description = $description;
    $this->image = $image;
  }

  public function getId(): string {
    return $this->id;
  }

  public function getName(): string {
    return $this->name;
  }

  public function getDescription(): string {
    return $this->description;
  }

  public function getImage(): string {
    return $this->image;
  }
}
