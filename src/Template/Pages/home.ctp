<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP para pruebas';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">

<header class="row">
    <div class="header-title">
        <h1>CakePHP <?= Configure::version() ?> para realizar pruebas</h1>
    </div>
</header>

<div class="row">
    <div class="columns large-6">
        <h4>AJAX</h4>
        <ul>
            <li class="bullet success">
                <?= $this->html->link('Ejemplo simple', ['controller'=>'simple']) ?>
                <p>Realizamos una actualización de la página sin cargarla nuevamente.</p>
            </li>
            <li class="bullet success">
                <?= $this->html->link('Combos asociados', ['controller'=>'dropdown']) ?>
                <p>Cargar un combo dependiente de otro Chained-Dropdown.</p>
            </li>
        </ul>
    </div>

    <div class="columns large-6">
        <h4>Modelos</h4>
        <ul>
            <li class="bullet problem">
                Modelos existentes en pruebas
                <ul>
                    <li><?= $this->html->link('Países', ['controller'=>'countries']) ?></li>
                    <li><?= $this->html->link('Estados', ['controller'=>'states']) ?></li>
                    <li><?= $this->html->link('Ciudades', ['controller'=>'cities']) ?></li>
                    <li><?= $this->html->link('Clientes', ['controller'=>'customers']) ?></li>
                </ul>
            </li>
        </ul>
    </div>
    <hr />
</div>

</body>
</html>
