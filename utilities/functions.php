<?php

function checkEmailFormatting($email){
    if( strpos($email, '@') !== false && strpos($email, '.') !== false ){
        return true;
    }

    return false;
}