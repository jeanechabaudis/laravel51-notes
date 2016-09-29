<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Laravel 5.1 - Notes</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
      .menuMain{
        width: 240px;
        z-index: 10;
        top: 0;
        bottom: 0;
        position: fixed;
        overflow: hidden;
        background: #cacaca;
        padding-top: 54px;
      }
      .menuMain-cont{
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
      }
    </style>
</head>
<body>


<div class="top-bar" style="position: fixed;top: 0;left: 0;right: 0;z-index: 100;">
  <div class="top-bar-left">
    <ul class="menu">
    	<li class="menu-text">Laravel 5.1 - Notes</li>
    </ul>
  </div>
  <div class="top-bar-right">
    <ul class="dropdown  menu align-right" data-dropdown-menu data-disable-hover="true" data-click-open="true">
      <li>
        <a href="#">Jean Echabaudis</a>
        <ul class="menu vertical">
          <li><a href="#">Agregar Nota</a></li>
          <li><a href="#">Salir</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>

<div class="menuMain Primary">
  <div class="menuMain-cont">
    <ul class="vertical menu" data-accordion-menu data-multi-open="false">
      <li>
        <a href="#">Item 1</a>
        <ul class="menu vertical nested">
          <li><a href="#">Item 1A</a></li>
          <li><a href="#">Item 1B</a></li>
        </ul>
      </li>
      <li>
        <a href="#">Item 2</a>
        <ul class="menu vertical nested">
          <li><a href="#">Item 1A</a></li>
          <li><a href="#">Item 1B</a></li>
        </ul>
      </li>
    </ul>
  </div>
</div>


<section class="main" style="padding: 84px 15px 10px 255px;min-height: 100vh">

    <div class="row align-justify">
      <div class="column small-4" style="background: pink">Aligned to</div>
      <div class="column small-4" style="background: pink">the edges</div>
    </div>

    <div style="display: flex;justify-content: space-between;">
      <button class="button">Aceptar</button>
      <button class="button alert">Salir</button>
    </div>

</section>


<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>