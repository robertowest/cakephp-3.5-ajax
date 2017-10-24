<?= $this->Html->script('dropdown.js'); ?>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link('Home', ['controller' => 'pages']) ?></li>
    </ul>
</nav>

<div class="form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend>Prueba con AJAX</legend>
        <?php
            //echo $this->Form->control('País', ['id' => 'countryField', 'options' => $countries]);
            $request = $this->Url->build(['action' => 'ajaxStateByCountry', 'ext' => 'json']);
            echo $this->Form->control('País', ['id' => 'countryField', 
                                               'rel' => $request,
                                               'options' => $countries]);
            echo $this->Form->control('Ciudad', ['id' => 'stateField','options' => $states]);
        ?>
    </fieldset>
    <?= $this->Form->button('Enviar') ?>
    <?= $this->Form->end() ?>
</div>
