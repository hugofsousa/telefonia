<!DOCTYPE html>
<html>
<head>
  <title>Discador</title>

  <link rel="stylesheet" type="text/css" href="<?=base_url()?>/complemento/css/template.css">
  <link rel="stylesheet" type="text/css" href="<?=base_url()?>/complemento/css/bootstrap.css">
  <script type="text/javascript" src="<?=base_url()?>/complemento/js/funcoes.js"></script>
  <script type="text/javascript" src="<?=base_url()?>/complemento/js/bootstrap.js"></script>
</head>
<body>
  <div class="container" align="center">

    <?=form_open('acesso/send', array('id' => "form_telefone"))?>

      <input type="hidden" name="telefone" id="telefone">

      <div class="telefone">
        <div class="telefone_input" id="input_show"></div>
        <div class="botao_telefone col-lg-4" onclick="add_value('1', 'telefone', 'input_show')">1</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('2', 'telefone', 'input_show')">2</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('3', 'telefone', 'input_show')">3</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('4', 'telefone', 'input_show')">4</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('5', 'telefone', 'input_show')">5</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('6', 'telefone', 'input_show')">6</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('7', 'telefone', 'input_show')">7</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('8', 'telefone', 'input_show')">8</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('9', 'telefone', 'input_show')">9</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('*', 'telefone', 'input_show')">*</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('0', 'telefone', 'input_show')">0</div>
        <div class="botao_telefone col-lg-4" onclick="add_value('#', 'telefone', 'input_show')">#</div>
        <div class="botao_telefone col-lg-4" onclick="send_form('form_telefone')">Enviar</div>
        <div class="botao_telefone disabled col-lg-4">&nbsp;</div>
        <div class="botao_telefone col-lg-4" onclick="erase('telefone', 'input_show')">Apagar</div>
      </div>
    <?=form_close()?>
  </div>
</body>
</html>