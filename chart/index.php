<?php
require '../accident.php';
$users = getData();
$userlieu = getData();
$usercause = getData();
include '../../partials/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>Visualisation des Graphe</title>
</head>
<body>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <canvas id="myChart"></canvas>
        </div>
        <div class="col-md-6">
          
        </div>
    </div>
    <div class="row">
     <div class="col-md-6">
            <canvas id="graphlieu"></canvas>
        </div>
     <div class="col-md-6">
      <canvas id="graphcause"></canvas>
     </div>
    </div>
</div>

<?php 

$tab1 = ['Abidjan','Bouake','Daloa','Bouake','Yamoussoukro','Man','Man'];
$table2 =[10,5,6,8,9,12,7];


?>

<?php 

//   echo(substr("2021-04-09", 5,2));
$monthData = [];
$num = ['01','02','03','04','05','06','07','08','09','10','11','12'];

for($i = 0; $i < 12; $i++ )
{
  $monthData[$i] = 0;
}
   foreach($users as $key => $user){
     if($user[0] != null){
       $test = substr($user[2],5,7);
       switch($test){
         case intval($num[0]):
            $monthData[0] =  $monthData[0] + $user[0];
            break;
        case intval($num[1]):
            $monthData[1] =  $monthData[1] + $user[0];
            break;
        case intval($num[2]):
            $monthData[2] =  $monthData[2] + $user[0];
            break;
        case intval($num[3]):
           $monthData[3] =  $monthData[3] + $user[0];
            break;
        case intval($num[4]):
           $monthData[4] =  $monthData[4] + $user[0];
            break;
        case intval($num[5]):
            $monthData[5] =  $monthData[5] + $user[0];
            break;
        case intval($num[6]):
            $monthData[6] =  $monthData[6] + $user[0];
            break;
        case intval($num[7]):
            $monthData[7] =  $monthData[7] + $user[0];
            break;
        case intval($num[8]): 
            $monthData[8] =  $monthData[8] + $user[0];
            break;
        case intval($num[9]):
            $monthData[9] =  $monthData[9] + $user[0];
            break;
        case intval($num[10]):
            $monthData[10] =  $monthData[10] + $user[0];
            break;
        case intval($num[11]):
            $monthData[11] =  $monthData[11] + $user[0];
            break;                    
        default:
           echo 'None';
           break;
       }
   }
   }
?>

<script type="text/javascript">

var month_datas = [];
for(var i = 0 ; i < 12 ; i++)
{
    month_datas[i] = 0
}

var datas = '<?php for($i=0; $i < sizeof($monthData); $i++){ echo ($monthData[$i].','); } ;?>';
var labels = '<?php foreach($users as $key => $user){ if($user[0] != null){ echo($user[1].',');}}?>';
const data = datas.split(',');
const label = labels.split(',');
var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Decembre'],
        datasets: [{
            label: 'Graphe Victime',
            // data: [12, 19, 3, 5, 2, 3],
            data: data,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 2
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
// // Graph lieu 
// var data_lieux = ' foreach($userlieu as $users) echo($users['nb_victime'].',');?>';
// var label_lieux = ' foreach($userlieu as $users) echo($users['lieu'].',');?>';
// const data_lieu = data_lieux.split(',');
// const label_label = label_lieux.split(',');
// var context = document.getElementById('graphlieu');
// var myChart = new Chart(context, {
//     type: 'bar',
//     data: {
//         labels: label_label,
//         // labels: label,
//         datasets: [{
//             label: 'Graphe Lieux',
//             data: data_lieu,
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 2
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// });
// // graph mise en case
// var data_causes = ' foreach($usercause as $users) echo($users['nb_victime'].',');?>';
// var label_causes = ' foreach($usercause as $users) echo($users['lieu'].',');?>';
// const data_cause = data_causes.split(',');
// const label_cause = label_causes.split(',');
// var context = document.getElementById('graphcause');
// var myChart = new Chart(context, {
//     type: 'bar',
//     data: {
//         labels: label_cause,
//         // labels: label,
//         datasets: [{
//             label: 'Graphe mise en Cause',
//             data: data_cause,
//             backgroundColor: [
//                 'rgba(255, 99, 132, 0.2)',
//                 'rgba(54, 162, 235, 0.2)',
//                 'rgba(255, 206, 86, 0.2)',
//                 'rgba(75, 192, 192, 0.2)',
//                 'rgba(153, 102, 255, 0.2)',
//                 'rgba(255, 159, 64, 0.2)'
//             ],
//             borderColor: [
//                 'rgba(255, 99, 132, 1)',
//                 'rgba(54, 162, 235, 1)',
//                 'rgba(255, 206, 86, 1)',
//                 'rgba(75, 192, 192, 1)',
//                 'rgba(153, 102, 255, 1)',
//                 'rgba(255, 159, 64, 1)'
//             ],
//             borderWidth: 2
//         }]
//     },
//     options: {
//         scales: {
//             y: {
//                 beginAtZero: true
//             }
//         }
//     }
// });

</script>
</body>
</html>