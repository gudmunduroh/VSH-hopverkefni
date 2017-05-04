<?php
    session_start();
    include "sql.php";

    if (empty($_POST["kennitala"]) || empty($_POST["password"]) || empty($_POST["redirect"]))
    {
        die("Óvænt villa(1)");
    }

    $kennitala = $_POST["kennitala"];
    $password = $_POST["password"];
    $redirect = $_POST["redirect"];

    if (!is_numeric($kennitala) || strlen($kennitala) != 10)
    {
        die("Kennitalan er ekki gild");
    }

    $conn = connect();
    $sql = $conn->prepare("SELECT kennitala FROM notendur WHERE kennitala = ? AND lykilord = ?");
    $sql->bind_param("ss", $kennitala, openssl_digest($password, "sha512"));
    $sql->execute();
    if ($sql->get_result()->num_rows > 0)
    {
        $_SESSION["kennitala"] = $kennitala;
        header("location: ".$redirect);
        die();
    }
    $sql->close();
    die("Kennitala eða lykilorð er ekki rétt");
?>