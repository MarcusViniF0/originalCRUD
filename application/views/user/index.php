<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=base_url("css/bootstrap.css")?>">
    <title>Deu Cetro</title>
</head>
<body>
<div class="container">
    <?php if($this->session->flashdata("success")):?>
        <p><?= $this->session->flashdata("success")?></p>
    <?php endif?>

    <?php if($this->session->flashdata("danger")):?>
        <p><?= $this->session->flashdata("danger")?></p>
    <?php endif?>

<h1>Olá deu certo agora é só correr pro abraço!</h1>  
    <table class="table">
    <tr>
        <th>nome</th>
        <th>email</th>
        <th>data nascimento</th>
        <th>faculdade</th>
        <th>semestre</th>
        <th>presença</th>
        <th>atividade</th>
    </tr>
        <?php foreach ($usuario as $user):?>
    <tr>
        <td><?=$user['nome']?></td>
        <td><?=$user['email']?></td>
        <td><?=$user['data_nascimento']?></td>
        <td><?=$user['Faculdade']?></td>
        <td><?=$user['Semestre']?></td>
        <td><?=$user['Presença']?></td>
        <td><?=$user['atividades_hoje']?></td>
    </tr>
        <?php endforeach?>
    </table> 

    <h1>Login</h1>
    <?php
    echo form_open("Login/autenticar");
    
    echo form_label("Email","email");
    echo form_input(array(
        "name"=>"email",
        "id"=>"email",
        "class"=>"form-control",
        "maxilength"=>"255"
    ));

    echo form_label("Senha","senha");
    echo form_password(array(
        "name"=>"senha",
        "id"=>"senha",
        "class"=>"form-control",
        "maxilength"=>"255"
    ));

    echo form_button(array(
        "class"=>"btn btn-primary",
        "type"=>"submit",
        "content"=>"cadastrar"
    ));
    echo form_close();
    ?>

    <h1>Cadastro</h1>
    <?php
    echo form_open("cad_usuario/novo");
    
    echo form_label("Email","email");
    echo form_input(array(
        "name"=>"email",
        "id"=>"email",
        "class"=>"form-control",
        "maxilength"=>"255"
    ));

    echo form_label("Senha","senha");
    echo form_password(array(
        "name"=>"senha",
        "id"=>"senha",
        "class"=>"form-control",
        "maxilength"=>"255"
    ));

    echo form_button(array(
        "class"=>"btn btn-primary",
        "type"=>"submit",
        "content"=>"cadastrar"
    ));
    echo form_close();
    ?>
</div>          
</body>
</html>