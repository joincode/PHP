<?php include_once 'includes/header.inc.php' ?>
<?php include_once 'includes/menu.inc.php' ?>

<div class="row container">
    <dic class="col s12">
        <h5 class="light">Consultas</h5><hr>
    </div>
</div>

    <table class="striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include_once 'banco_de_dados/read.php';
            ?>
        </tbody>



<?php include_once 'includes/footer.inc.php' ?>