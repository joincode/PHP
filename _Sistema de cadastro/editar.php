<?php 
    session_start();
    include_once 'includes/header.inc.php';
    include_once 'includes/menu.inc.php' ;
?>

<div class="row container">
    <dic class="col s12">
        <h5 class="light">Editar</h5><hr>
    </div>
</div>


<?php 
    include_once 'banco_de_dados/conexao.php';

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $_SESSION['id'] = $id;
    $querySelect = $link->query("select * from tb_clientes where id='$id'");
    
    while ($registros = $querySelect->fetch_assoc()):
    $nome = $registros['nome'];
    $email = $registros['email'];
    $telefone = $registros['telefone'];

    endwhile;
    ?>

<!--FORMULÁRIO DE CADASTRO-->
<div class="row container">
    <p> &nbsp;</p>
        <form action="banco_de_dados/update.php" method="post" class="col s12">
            <fieldset class="formulario" style="pading: 15px">
                <legend>
                    <img src="img/avatar_1.png" alt="[User]" width="100">
                </legend>
                    <h5 class="light center">Alteração de Cadastro</h5>

 <!--CAMPO NOME-->   
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" maxlenght="40" required autofocus>
        <label for="nome">Nome do Cliente</label>
    </div>
    
 <!--CAMPO EMAIL-->   
 <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input type="email" name="email" id="email" value="<?php echo $email ?>"maxlenght="50" required >
        <label for="email">E-mail do Cliente</label>
    </div>

 <!--CAMPO TELFONE-->   
 <div class="input-field col s12">
        <i class="material-icons prefix">phone</i>
        <input type="tel" name="telefone" id="telefone" value="<?php echo $telefone ?>" maxlenght="15" required >
        <label for="telefone">Telefone do Cliente</label>
    </div> 
       
       <!--CAMPO TELFONE-->   
 <div class="input-field col s12">
        <i class="material-icons prefix">home</i>
        <input type="text" name="endereco" id="endereco" value="<?php echo $telefone ?>" maxlenght="50" required >
        <label for="endereco">Endereço do Cliente</label>
    </div> 
       <!--BOTÕES-->

    <div class="input-field col s12">
        <input type="submit" value="alterar" class="btn green">
        <a href="consultas.php" class="btn red">Cancelar</a>
    </div>        
            </fieldset>
        </form>
    </div>

<?php include_once 'includes/footer.inc.php' ?>