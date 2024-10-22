<?php
 requer 'banco.php' ;
 $id = nulo ;
 se ( ! vazio ($GET[ 'codigo' ])){
 $id = $_REQUEST[ 'codigo' ];
 }

 se ( nulo == $id){
 cabeçalho ( "Localização: index.php" );

 }
 outro {
 $pdo = Banco :: conectar ();
 $pdo -> setAttribute ( PDO :: ATTR_ERRMODE , PDO :: ERRMODE_EXCEPTION );
 $sql = " SELECIONE * DE tb_alunos onde codigo = ? " ;
 $q = $pdo -> preparar ($sql);
 $q -> executar ( array ($id));
 $dados = $q -> buscar ( PDO :: FETCH_ASSOC );
 Banco :: desconectar ();
 }

 ?>

 <!DOCTYPE html >
 <html lang = "pt-br">
 <cabeça >
 <meta charset = "UTF-8" >
 <meta nome = "viewport" conteúdo = "largura=largura-do-dispositivo, escala-inicial=1.0" >
 <link rel = "folha de estilo" href = "ativos/css/bootstrap.min.css" >
 <link href = " https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css " rel = "folha de estilo" >
 <title >Informações do Contato</ title >
<div class="container">
    <div class="span10 offset1">
        <div class="card">
            <div class= "card-header">
                <h3 class="well">Informações de contato</h3>
</div>
<div class= "container">
    <div class="form-horizontal">
        <div class="control-group">
            <label class="control-label">Nome</lable>
            <div class="controls form-control disabled">
                <label class="carousel-inner">
                    <?php echo $data['nome']; ?>
</lable>
</div>
</div>
<div class="control-group">
    <label class="control-label">Endereço</label>
    <div class="controls form-control disabled">
        <lable class="carousel-inner">
            <?php echo $data['endereço']; ?>
</lable>
</div>
</div>
<div class="control-group">
    <label class="control-label">Telefone</label>
    <div class="controls form-control disabled">
        <lable class="carousel-inner">
            <?php echo $data['fone']; ?>
</lable>
</div>
</div>
<div class = "grupo de controle" >
 <label class = "control-label" > E-mail </label >
 <div class = "controles form-control desabilitados" >
<rótulo classe = "carrossel-interno" >
 <?php eco $data [ 'email' ]; ?>
 </rótulo >
 </div>​​
 </div>​​

 <div class = "grupo de controle" >
 <label class = "control-label" > Idade </label >
 <div class = "controles form-control desabilitados" >
 <rótulo classe = "carrossel-interno" >
 <?php echo $data [ 'idade' ]; ?>
 </rótulo>
 </div>​​
 </div>​​
 <br/>
 <div class = "ações-do-formulário" >
 <a href = "index.php" type = "btn" class = "btn btn-primary" > Voltar </a >
 </div>​​
 </div>​​
 </div>​​
 </div>​​
 </div>