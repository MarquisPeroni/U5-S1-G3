<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Controlla se sono stati inviati i dati del form
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Recupera i valori inviati dal form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Esegui qui le operazioni necessarie con i dati inviati dal form
        // Ad esempio, puoi autenticare l'utente, salvare i dati in un database, ecc.

        // Esempio: verifica se l'utente e la password corrispondono
        if ($username === "utente" && $password === "password") {
            echo "Accesso consentito!";
        } else {
            echo "Credenziali non valide. Riprova.";
        }
    } else {
        // Se i dati non sono stati inviati correttamente
        echo "Errore: Assicurati di compilare tutti i campi del form.";
    }
} else {
    // Se il metodo della richiesta non è POST
    echo "Errore: Accesso non consentito.";
}

?>
