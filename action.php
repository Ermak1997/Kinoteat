<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1 class="display-3">Боевик</h1>
          <p>Данный сайт хранит фильмотеку жанра Боевик, приятного простмотра!</p>
          <p><a class="btn btn-secondary" href="index.php" role="button">назад »</a></p>

<div class="container">
                  <!-- Example row of columns -->
                  <div class="row">
                    <div class="col-md-4">
                    <?php
        
        $host = '127.0.0.1:3306';  
        $user = 'root';    
        $pass = ''; 
        $db_name = 'basa';   
        $link = mysqli_connect($host, $user, $pass, $db_name); 

  
        if (!$link) {
        echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
        exit;
      } 
      if(!$link){
        mysql_select_db($database_basa) or die(mysql_error());
      }
      $sql = mysqli_query($link, "select `films`.`name_f` from films where id_genre = 1");
      While ($result=mysqli_fetch_array($sql))
      Echo '<br>'.$result['name_f'].'</br>';
      
      ?>
                    </div>
</body>
</html>