<html>
<head>
<meta charset="utf-8" />
<title>CURRENCY CALCULATOR</title>
<link rel="stylesheet" type="text/css" href="css/currency_converter-style.css">
</head>

<body>

<div class="box">

   
   <div class="title-content"><h2>CURRENCY</h2>
      <h3>CONVERTER</h3>
      </div>

      <div class="result-box">
  <?php
  $money=$_POST['money'];   
  $coin=$_POST['coin'];

      if ($money=="") {
      ?>
      <script>
      alert("PLEASE INPUT MONEY!")
      history.back()
      </script>
     
      <?php
      exit();
    }
    if(!is_numeric($money))

  {?>
    <script>
    alert("PLEASE INPUT NUMBER IN MONEY BOX")
    history.back()

    </script>
  <?php


  exit();

  }

  if($coin == 1){
    $coin_e=0.0269;
    $sum=$money*$coin_e;
   
    ?><div class="wrap-box">
    <div class="set"><?php echo number_format($money,2);
    ?><span><?php echo " THB  ";?></span></div><span><?php echo " =";?></span>
     <div class="set"><?php echo number_format($sum,2);
     ?><span><?php echo " EUR";?></div>
      </div><div class="mini-box"></div><div class="rate"><?php
    echo "RATE : 1 THB = ".$coin_e." EUR";?></div>
    <?php

  }elseif ($coin == 2) {
     $coin_b=0.0230;
    $sum=$money*$coin_b;


     ?><div class="wrap-box">
    <div class="set"><?php echo number_format($money,2);
    ?><span><?php echo " THB  ";?></span></div><span><?php echo " =";?></span>
     <div class="set"><?php echo number_format($sum,2);
     ?><span><?php echo " GBP";?></div>
      </div><div class="mini-box"></div><div class="rate"><?php
    echo "RATE : 1 THB = ".$coin_b." GBP";?></div>
    <?php
    

  }elseif ($coin == 3) {
    $coin_u=0.0285;
    $sum=$money*$coin_u;



     ?><div class="wrap-box">
    <div class="set"><?php echo number_format($money,2);
    ?><span><?php echo " THB  ";?></span></div><span><?php echo " =";?></span>
     <div class="set"><?php echo number_format($sum,2);
     ?><span><?php echo " USD";?></div>
      </div><div class="mini-box"></div><div class="rate"><?php
    echo "RATE : 1 THB = ".$coin_u." USD";?></div>
    <?php

    
  }else{
    echo "ERROR!";
  }
 
  ?>
   <a href="index.php"><div class="btn">BACK</div></a>
  </div>


 
 
</div>

</body>
</html>