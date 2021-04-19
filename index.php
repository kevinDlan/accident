<?php 
     require 'accident.php';
     $datas = getData();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTFs-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/main.css">
    <title>Accident</title>
</head>

<body>
    <div class="col-md-8 mt-4 table-content">
        <div class="title">
            <h2 class="h2 col-md-6">Liste des Accidents</h2>
        </div>
        <div class="d-flex justify-content-end btn-content">
            <a class="btn btn-info col-md-2 add-btn" href="/accident/create.php">Ajouter</a>
            <a class="btn btn-info col-md-2" href="chart/index.php"> Graphe</a>
        </div>
        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Lieu de l'accident</th>
                    <th>Date et heure</th>
                    <th>Mise en Cause</th>
                    <th>Nombre de Victimes</th>
                </tr>
            </thead>
            <tbody>
                <?php if($datas != null) : ?>
                <?php foreach ($datas as $key => $value): ?>
                <?php if($value[0] != null):?>
                <tr>
                    <td><?php echo $value[1] ?></td>
                    <td><?php echo date('d-m-Y',strtotime($value[2])) ?></td>
                    <td><?php echo $value[3] ?></td>
                    <td><?php echo $value[0] ?></td>
                </tr>
                <?php endif;;?>
                <?php endforeach;; ?>
            </tbody>
            <?php else : ?>
            <div class="unfound"><?php  echo ('Aucun enregistrement Trouvé !'); ?></td>
            </div>
            <?php endif;;?>
        </table>
    </div>
</body>

</html>