<?php

namespace Core;

class ConfigController
{
  private string $url;
  private array $urlArray;
  private string $urlController;
  private string $urlMetodo;

  public function __construct()
  {
    if(!empty(filter_input(INPUT_GET, 'url', FILTER_DEFAULT))) {
      $this->url = filter_input(INPUT_GET, 'url', FILTER_DEFAULT);
      $this->urlArray = explode("/", $this->url); // converte em um array
      
      if((isset($this->urlArray[0])) and (isset($this->urlArray[1]))) {
        $this->urlController = $this->urlArray[0];
        $this->urlMetodo = $this->urlArray[1];
      } else {
        $this->urlController = "error";
      $this->urlMetodo = "index";
      }

    } else {
      $this->urlController = "home";
      $this->urlMetodo = "index";
    }
  }
}