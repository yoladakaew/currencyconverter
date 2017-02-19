<html>
<head>
<meta charset="utf-8" >
<title>CURRENCY CALCULATOR</title>
<link rel="stylesheet" type="text/css" href="css/index-style.css">
</head>

<body>
<div class="wrapper">

  <div class="box">
  <div class="pic"></div>
 
    <form action="currency_converter.php" method="post">

    
      <div class="title-content"><h2>CURRENCY</h2>
      <h3>CONVERTER</h3>
      </div>

     <div class="cal-box">
        MONEY (THAI BAHT) :<br><br>
    <input type="text" name="money" maxlength="100" /><br><br><br>
     CONVERT TO :<br><br>
   <select name="coin" class="filter" >
                <option value="1" >EURO (EUR)</option>
                <option value="2" >BRITISH (GBP)</option>
                <option value="3" >US DOLLAR (USD)</option>  
    </select>
    </div>

   
      <div class="btn"><input type="submit" value="CONVERT" /></div>
     </form>

    </div>

 </div>
     
</body>
</html>