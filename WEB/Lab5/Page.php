<?php

abstract class Page {
  protected $renderer;

  public function __construct(Renderer $renderer) {
    $this->renderer = $renderer;
  }

  public function setRenderer(Renderer $renderer): void {
    $this->renderer = $renderer;
  }
  // set ...
  abstract public function render(): string;
}

class SimplePage extends Page {
  protected $title;
  protected $content;

  public function __construct(Renderer $renderer, string $title, string $content) {
    parent::__construct($renderer);
    $this->title = $title;
    $this->content = $content;
  }

  public function render(): string {
    // ...
  }

  public function setTitle(string $title): void {
    $this->title = $title;
  }

  public function getTitle(): string {
    return $this->title;
  }

  public function setContent(string $content): void {
    $this->content = $content;
  }

  public function getContent(): string {
    return $this->content;
  }
}

class ProductPage extends Page {
  protected $product;

  public function __construct(Renderer $renderer, Product $product) {
    parent::__construct($renderer);
    $this->product = $product;
  }

  public function render(): string {
    // ...
  }

  public function setProduct(product $product): void {
    $this->product = $product;
  }

  public function getProduct(): string {
    return $this->product;
  }
}
