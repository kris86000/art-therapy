<?php
// si le formulaire est soumis on envoi le message de $session['envoiForm']
if (!empty($_SESSION)) {
    echo $_SESSION["envoiForm"];
    session_unset();
} 