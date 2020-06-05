
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <style>
        .box{
            width: 50px;
            height: 50px;
            background-color: aquamarine;
            border: none;
            box-shadow: aquamarine;
            border: 1px solid black;
        }
        .box:hover{
            cursor: pointer;
        }
        .main{
            display:flex;
            flex-direction: row;
        }
        .line{
            display: flex;
            flex-direction: row;
        }
                body{
            display: flex;
        }

        .x{
            background-color: white;
        }
        .o{
            background-color: black;
        }

    </style>
</head>
<body>


<div class="main">
      <?php
      for($i=1;$i<=9;$i++){ ?>
          <div class="line"></div>
          <?php  for($j=1;$j<=9;$j++){ ?>
            <div class="box <?=$j?>-<?=$i?>"></div>
       <?php   }
      }

      ?>
</div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="./scripts.js">   </script>
    <script>

    </script>
</body>
</html>