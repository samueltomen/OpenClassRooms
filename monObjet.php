<?php

class monObjet
{
    public int $taille = 5;
};

$objet1 = new monObjet();
$objet1->taille = 25;

var_dump($objet1);

$objet1->taille = 12;

