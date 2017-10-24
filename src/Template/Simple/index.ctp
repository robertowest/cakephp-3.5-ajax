<script type="text/javascript">
$(function() 
{
    $('#button').click(function() 
    {
        var targeturl = $(this).attr('rel');

        $.ajax({
            type: 'get',
            url: targeturl,
            beforeSend: function(xhr) 
            {
                xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            },
            success: function(response) 
            {
                if (response.data) 
                {
                    $('#result').html(response.data.now);
                }
            },
            error: function(e) 
            {
                alert("An error occurred: " + e.responseText.message);
                console.log(e);
            }
        });
    });
});
</script>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link('Home', ['controller' => 'pages']) ?></li>
    </ul>
</nav>
<div class="index large-9 medium-8 columns content">
    <h2>Ejemplo sencillo con respuesta JSON </h2>

    <p>
    En este sencillo ejemplo, realizamos una petición vía JSON GET.<br>
    La respuesta será un objeto y su contenido se puede acceder a través de `response.result`. El resultado en sí mismo puede contener múltiples claves de datos.<br>
    Solo necesitamos nuestro valor de fecha `resultado.now`.
    </p>

    <?php 
    $request = $this->Url->build(['action' => 'ajaxAction', 'ext' => 'json']);
    ?>
    <button id="button" rel="<?= $request ?>">Actualizar</button>

    <h3>Resultado</h3>
    <div>
        <i id="result">n/a</i>
    </div>

</div>
