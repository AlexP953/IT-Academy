<?php
// Crea una classe que representi un recurs didàctic d’aquesta especialitat. Els recursos hauran de tenir un nom, un tema (que només podrà ser PHP, CSS, HTML, SQL, Laravel) un URL i un tipus de recurs (Fitxer, Article web, Vídeo). Implementa tant el tema com el tipus de recurs amb enums. 

enum Theme {
  case PHP;
  case CSS;
  case HTML;
  case SQL;
  case Laravel;
}

enum Resource {
  case Fitxer;
  case Article_web;
  case Vídeo;
}
 
class Material 
{
  
  public $name;
  public $theme;
  public $url;
  public $resource;

  public function __construct(string $name, Theme $theme, string $url, Resource $resource ) {
    $this->name = $name;
    $this->theme = $theme;
    $this->url = $url;
    $this->resource = $resource;

  }

}

$material = new Material("Introducción a Laravel", Theme::Laravel, "http://ejemplo.com", Resource::Article_web);

print_r($material);

 ?>