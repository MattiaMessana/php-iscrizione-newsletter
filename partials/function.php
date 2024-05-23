<?php
if (isset($_GET["control_email"])) {
    //controllo se l'utente abbiamo inserito qualcosa nel input dopo che ha cliccato il pulsante submit
    if (empty($_GET['control_email'])) {
        echo '<div class="alert alert-danger w-50" role="alert">Inserisci Email</div>';
    } else {
        $is_at = strpos($_GET['control_email'], '@') !== false;
        $is_dot = strpos($_GET['control_email'], '.') !== false;
        if ($is_at && $is_dot) {
            echo '<div class="alert alert-success w-50" role="alert">Email Valida</div>';
        } else {
            echo '<div class="alert alert-danger w-50" role="alert">Email Non Valida</div>';
        }
    }
}
