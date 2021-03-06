﻿<?php
session_start();
include "../api/functions.php";
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <link rel="stylesheet" href="../include/style.css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="../include/menu.js"></script>
        <script src="../include/loginform.js"></script>
        <title>Torfærukeppni</title>
    </head>
    <body>
        <nav class="mobileNav" id="mobileNav">
            <a onclick="Menu.toggle()">&#9776;</a>
        </nav>
        <nav class="navBar" id="navBar">
            <ul>
                <li><h2>Valmynd</h2></li>
                <li><a href="../" id="menuOption1">Aðalsíða</a></li>
                <li><a href="../dagskra" id="menuOption2">Dagskrá</a></li>
                <li><a href="../reglur" id="menuOption3">Reglur</a></li>
                <li><a href="../keppendur" id="menuOption4">Keppendur</a></li>
                <li><?php echo accountMenuItem("/hv/dagskra"); ?></li>
            </ul>
        </nav>
        <table class="table">
            <caption><h2>Dagskrá keppni 32. 13. 2017</h2></caption>
            <thead>
                <tr>
                    <th>Atburður:</th>
                    <th>Tími:</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Pittur opnar</td>
                    <td>07:00</td>
                </tr>
                <tr>
                    <td>Skoðun keppnisbíla</td>
                    <td>07:00</td>
                </tr>
                <tr>
                    <td>Stuttur fundur og brautarskoðun</td>
                    <td>09:15</td>
                </tr>
                <tr>
                    <td>Skoðun lýkur</td>
                    <td>10:15</td>
                </tr>
                <tr>
                    <td>Keppnisbílar mæta við ráshlið</td>
                    <td>10:55</td>
                </tr>
                <tr>
                    <td>Keppni hefst</td>
                    <td>11:00</td>
                </tr>
                <tr>
                    <td>Stutt hlé um 20 mín</td>
                    <td>13:30</td>
                </tr>
                <tr>
                    <td>Áætluð keppnislok</td>
                    <td>17:00</td>
                </tr>
                <tr>
                    <td>Úrslit birt. (kærufrestur byrjar).</td>
                    <td>17:05</td>
                </tr>
                <tr>
                    <td>Kærufresti lýkur</td>
                    <td>17:35</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Verðlaunaafhending</td>
                    <td>17:45</td>
                </tr>
            </tfoot>
        </table>

    </body>
</html>