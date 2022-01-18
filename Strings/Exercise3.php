<?php

$mail = "test@zitec.ro";

getUser($mail);

function getUser($mail)
{
    $user = strstr($mail, '@', true);
    echo "The user is: ".$user.".\n";
}


