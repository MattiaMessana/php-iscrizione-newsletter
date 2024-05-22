<?php
if (isset($_GET["control_email"])) {
    $is_at = strpos($_GET['control_email'], '@') !== false;
    $is_dot = strpos($_GET['control_email'], '.') !== false;
    if ($is_at && $is_dot) {
        echo '<div class="alert alert-success w-50" role="alert">Email Valida</div>';
    } else {
        echo '<div class="alert alert-danger w-50" role="alert">Email Non Valida</div>';
    }
}
