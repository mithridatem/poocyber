<?php
include './Utilisateur.php';
include './Categorie.php';
include './Article.php';

$util1 = new Utilisateur();
$util2 = new Utilisateur();
$util3 = new Utilisateur();

$cat1 = new Categorie();
$cat1->setNom('News');
$cat2 = new Categorie();
$cat2->setNom('Actus');
$cat3 = new Categorie();
$cat3->setNom('Cuisine');

$art1 = new Article();
$art2 = new Article();
$art3 = new Article();
$util1->setNom('Mithridate');
$util1->setPrenom('Mathieu');

$art1->setUtilisateur($util1);
$art1->addCategorie($cat1);
$art1->addCategorie($cat3);
echo '<pre>';
var_dump($art1);
echo '</pre>';

//echo $art1->getUtilisateur()->getNom();
echo $art1->getCategories()[0]->getNom().'<br>';
echo $art1->getCategories()[1]->getNom().'<br>';
$art1->delCategorie($cat1);
echo '<pre>';
var_dump($art1);
echo '</pre>';