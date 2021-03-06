<?php
    session_start();
    include "sql.php";
    include "functions.php";

    if (empty($_POST["kennitala"]) || empty($_POST["password"]) || empty($_POST["redirect"]))
    {
        die("Óvænt villa(1)");
    }

    $kennitala = $_POST["kennitala"];
    $password = openssl_digest($_POST["password"], "sha512");
    $redirect = $_POST["redirect"];

    if (!is_numeric($kennitala) || strlen($kennitala) != 10)
    {
        die("Kennitalan er ekki gild");
    }

    $conn = connect();
    $sql = $conn->prepare("SELECT kennitala, fulltnafn FROM notendur WHERE kennitala = ? AND lykilord = ?");
    $sql->bind_param("ss", $kennitala, $password);
    $sql->execute();
    $result = $sql->get_result();
    if ($result->num_rows > 0)
    {
        while ($row = $result->fetch_assoc())
        {
            $_SESSION["kennitala"] = $kennitala;
            $_SESSION["firstname"] = fullNameToFirstName($row["fulltnafn"]);
            header("location: ".$redirect);
            die();
        }
    }
    $sql->close();
    die("Kennitala eða lykilorð er ekki rétt");
?>