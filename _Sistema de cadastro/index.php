<?php session_start() ?>
<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>


<!--FORMULÁRIO DE CADASTRO-->
    <div class="row container">
    <p> &nbsp;</p>
        <form action="banco_de_dados/create.php" method="post" class="col s12">
            <fieldset class="formulario" style="pading: 15px">
                <legend>
                    <img src="img/avatar_1.png" alt="[User]" width="100">
                </legend>
                    <h5 class="light center">Cadastro de Clientes</h5>

                    <?php 
                        if (isset($_SESSION['msg'])):
                            echo  $_SESSION['msg'];
                            session_unset();

                        endif;
                    ?>




 <!--CAMPO NOME-->   
    <div class="input-field col s12">
        <i class="material-icons prefix">account_circle</i>
        <input type="text" name="nome" id="nome" maxlenght="40" required autofocus>
        <label for="nome">Nome do Cliente</label>
    </div>
    
 <!--CAMPO EMAIL-->   
 <div class="input-field col s12">
        <i class="material-icons prefix">email</i>
        <input type="email" name="email" id="email" maxlenght="50" required >
        <label for="email">E-mail do Cliente</label>
    </div>

 <!--CAMPO TELFONE-->   
 <div class="input-field col s12">
        <i class="material-icons prefix">phone</i>
        <input type="text" name="telefone" id="telefone" maxlenght="15" required >
        <label for="telefone">Telefone do Cliente</label>
    </div> 
       
 <!--CAMPO ENDEREÇO-->   
 <div class="input-field col s12">
        <i class="material-icons prefix">home</i>
        <input type="text" name="endereco" id="endereco" maxlenght="50" required >
        <label for="endereco">Endereço do Cliente</label>
    </div> 


       <!--BOTÕES-->

    <div class="input-field col s12">
        <input type="submit" value="cadastrar" class="btn green">
        <input type="reset" value="limpar" class="btn red">

            </fieldset>
        </form>
    </div>

<?php include_once 'includes/footer.inc.php' ?>