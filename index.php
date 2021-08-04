<?php include 'language.php';?>
<!DOCTYPE html>
<html>
<head>
  <title>Language Change | By Onkar</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
  <style type="text/css">
    *{
      margin:0;
      padding: 0;
      box-sizing: border-box;
    }body{
      background: #35166d;
      font-family: 'Poppins', sans-serif;
    }.nav{
      padding: 10px;
      border-radius: 5px;
      background: white;
      width:80%;
      margin: auto;
      margin-top:20px;display: flex;
      justify-content: space-between;
      align-items: center;
      background: white;
    }ul li{
      display: inline-block;margin:10px;font-weight: bold;

    }a{
      text-decoration: none;
      color: black;
    }select,option{
      font-family: 'Poppins', sans-serif;
    }.body{
       padding: 10px;
      border-radius: 5px;
      background: white;
      width:80%;
      margin: auto;
      margin-top:20px;
      background: white;
    }
  </style>
   <script src="https://code.jquery.com/jquery-3.5.0.min.js"></script>
</head>
<body title=<?php echo $language;?>>
<div class="nav">
  <ul>
    <li><a href="#"><?php echo $home[$language]['0']?></a></li>
    <li><a href="s.php"><?php echo $next[$language]['0']?></a></li>
  </ul>
  <select onchange="set_language()" name="language" id="language">
                <option value="en" <?php echo $en_select?>>ENGLISH</option>
                <option value="hi" <?php echo $hi_select?>>HINDI</option>

                <option value="ur" <?php echo $ur_select?>>URDU</option>
                <option value="tm" <?php echo $tm_select?>>TAmIL</option>
                <option value="tl" <?php echo $tl_select?>>TELUGU</option>
            
              </select>
</div>
<div class="body">
  <h2><?php echo $h1[$language]['0']?></h2><br>
  <p><?php echo $p1[$language]['0']?></p>
  <br>
  <h2><?php echo $about[$language]['0']?></h2><br>
  <p><?php echo $cont[$language]['0']?></p>
</div>
     
<script src="lang.js"></script>
</body>
</html>