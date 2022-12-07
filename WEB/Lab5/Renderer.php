<?php

interface IRenderer {
  public function renderTitle(string $title): string;
  public function renderContent(string $content): string;
  public function renderImage(string $url): string;
  public function renderLink(string $url, string $title): string;
  public function renderBody(array $body): string;
}

class HTMLRenderer implements IRenderer {
  
  public function renderTitle(string $title): string {
    // ...
  }

  public function renderContent(string $content): string {
    // ...
  }

  public function renderImage(string $url): string {
    // ...
  }

  public function renderLink(string $url, string $title): string {
    // ...
  }

  public function renderBody(array $body): string {
    // ...
  }
}

class JsonRenderer implements IRenderer {
  
  public function renderTitle(string $title): string {
    // ...
  }

  public function renderContent(string $content): string {
    // ...
  }

  public function renderImage(string $url): string {
    // ...
  }

  public function renderLink(string $url, string $title): string {
    // ...
  }

  public function renderBody(array $body): string {
    // ...
  }
}

class XmlRenderer implements IRenderer {
  
  public function renderTitle(string $title): string {
    // ...
  }

  public function renderContent(string $content): string {
    // ...
  }

  public function renderImage(string $url): string {
    // ...
  }

  public function renderLink(string $url, string $title): string {
    // ...
  }

  public function renderBody(array $body): string {
    // ...
  }
}
