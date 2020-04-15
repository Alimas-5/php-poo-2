<?php
include 'Form.php';

// Des variables par défaut pour vos tests.
$action = '#';
$method = 'POST';
$nom = 'Ruo';
$prenom = 'Bily';
// YOUR CODE HERE

$form = new Form($action, $method);  // création du formulaire

$form->Textadd('nom',$nom); //input de type texte avec comme valeur par défaut $nom
$form->Textadd('prenom',$prenom); //input de type texte avec comme valeur par défaut $prenom
$form->Numberadd('Age',15);
$form->addSubmitButton('Send'); //bouton pour soumettre le formulaire se nommant send
$form->Selectadd('1','title',1); //test

echo $form->build(); // générer le formulaire