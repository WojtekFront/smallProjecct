<?php 
require 'index.php';
?>

<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
<?php 
foreach ($storeTasks as $task){ 
        if($task->getCompleted()){
            echo '<li><s>'.$task->getDescription().'</s>'; 
        }else{
                echo '<li>'.$task->getDescription();
        }
}
?>

    </ul>
</body>
</html>