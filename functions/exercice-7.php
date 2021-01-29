<?php
function genre($genre,$age){
    if($genre=="homme"){
        if($age>=18){
            return "Vous êtes un homme et vous êtes majeur";
        }
        else{
            return "Vous êtes un homme et vous êtes mineur";
        }
    }
    else{
        if($genre=="femme"){
            if($age>=18){
                return "Vous êtes une femme et vous êtes majeur";
            }
            else{
                return " Vous êtes une femme et vous êtes mineur";
            }
        }
    }
}
echo genre("homme",18);
?>