<?php

function fullNameToFirstName($fullname)
{
    return explode(" ", $fullname)[0];
}

function accountMenuItem($redirect)
{
    if (empty($_SESSION["kennitala"]))
    {
        return "<a onclick=\"createSimpleLogin(&quot;{$redirect}&quot;)\" id=\"menuOption5\">Innskrá</a>";
    }
    else
    {
        return "<a href=\"/hv/adgangur\" id=\"menuOption5\">".accountMenuText()."</a>";
    }
}

function accountMenuText()
{
    return "<i class=\"fa fa-user\" aria-hidden=\"true\"></i> ".$_SESSION["firstname"];
}

function between($num, $from, $to)
{
    return ($from < $num && $to > $num);
}

function getFileExtension($filename)
{
    $filenamearray = explode(".", $filename);
    return end($filenamearray);
}

function hasProfilePic($kennitala)
{
    if (file_exists("/opt/lampp/phpfiles/Torfaera/ProfilePics/{$kennitala}.jpg"))
    {
        return true;
    }
    if (file_exists("/opt/lampp/phpfiles/Torfaera/ProfilePics/{$kennitala}.png"))
    {
        return true;
    }
    return false;
}

?>