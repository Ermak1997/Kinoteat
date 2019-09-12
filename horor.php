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
          <h1 class="display-3">Ужасы!</h1>
          <p><font size="5" color="black" face="Times New Roman">Данный сайт хранит фильмотеку жанра Ужасы, приятного простмотра!</front></p>
          <p><a class="btn btn-secondary" href="index.php" role="button">назад »</a></p>
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
      $sql = mysqli_query($link, "select `films`.`name_f` from films where id_genre = 2");
      While ($result=mysqli_fetch_array($sql))
      Echo '<br>'.$result['name_f'].'</br>';
      
      ?>
     
    </p>  
          </div>
      </div>
</body>
</html>