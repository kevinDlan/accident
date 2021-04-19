<?php

include '../partials/header.php';
require __DIR__ . '/accident.php';


// $user = [
//     'id' => '',
//     'nb_victime' => '',
//     'lieu' => '',
//     'date' => '',
//     'mise_en_cause' => ''
// ];

// $errors = [
//     'nb_victime' => '',
//     'lieu' => '',
//     'date' => '',
//     'mise_en_cause' => ''
// ];

$isValid = true;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // $user = array_merge($user, $_POST);
    // $isValid = validateUser($user, $errors);
    if ($isValid) 
    {
         storeFormData($_POST);
         header("Location: index.php");
    }
}

?>

<?php include '_form.php' ?>

