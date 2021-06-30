<?php

?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
       <link rel="stylesheet" type="text/css" href="http://localhost/hompage1style.css">
     <style>
      header{
        border-bottom:5px solid skyblue;
        padding:20px;
      }
      nav {
        border-right:3px solid skyblue;
        width: 200px;
        height: 600px;
        float:left;
      }
      nav ol {
        list-style: none;
      }
     </style>
</head>
<body id="target">
<body>
    <header>
        <h1><a href="http://localhost/hompage1Kategorie.php">About DH</a></h1>
    </header>
    <nav>
        <ol>
          <?php
          echo file_get_contents("list.txt");
           ?>
        </ol>
    </nav>
    <div id="control">
   <input type="button" value="white" onclick="document.getElementById('target').className='white'" />
   <input type="button" value="black" onclick="document.getElementById('target').className='black'"  />
   </div>
   <article>
     <?php
     if(empty($_GET['id'])==false){
     echo file_get_contents($_GET['id'].".txt");
   }
      ?>
   </article>
</body>
</html>
