<?php

require_once 'Page.php';
require_once 'Product.php';
require_once 'Renderer.php';

$HTMLRenderer = new HTMLRenderer();
$JsonRenderer = new JsonRenderer();
$XmlRenderer = new XmlRenderer();
$simplePage = new SimplePage($HTMLRenderer, "Header page:", "Content");
$simplePage->render();
$simplePage->setRenderer($XmlRenderer);
$simplePage->render();

$exampleProduct = new Product(
  19812877,
  "ProductOne",
  "Description: Very friendly interface, cool performance and etc.",
  "ProductOne.jpg"
);
$productPage = new ProductPage($HTMLRenderer, $exampleProduct);
$productPage->render();
$productPage->setRenderer($JsonRenderer);
$productPage->render();
