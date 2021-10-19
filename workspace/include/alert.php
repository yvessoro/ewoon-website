<?php if(isset($_GET["error"])) { 
    if($_GET["error"]=="true"){?>
        <div class="alert alert-danger" role="alert">
            <strong>Désolé</strong> une erreur est survenue.
        </div>
    <?php } else if($_GET["error"]=="existed"){?>
        <div class="alert alert-danger" role="alert">
            <strong>Désolé</strong> l'email ou le nom d'utilisateur a déjà été utilisé.
        </div>
    <?php } else if($_GET["error"]=="false"){?>
        <div class="alert alert-success" role="alert">
            Opération effectuée avec succès.
        </div>
    <?php }
} ?>