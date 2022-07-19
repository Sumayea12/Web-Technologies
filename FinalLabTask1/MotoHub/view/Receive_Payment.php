
<html>
  
<head>
  <title>
    
  </title>
</head>

<body style="background-color:skyBlue;">
  
  

  
  <?php
    if(array_key_exists('Bkash_payment', $_POST)) {
      Bkash_payment();
    }
    else if(array_key_exists('Nagad_payment', $_POST)) {
      Nagad_payment();
    }
    function Bkash_payment() {
      echo "Bkash Number : 017111111";
    }
    function Nagad_payment() {
      echo "Nagad number: 019111111";
    }
  
  ?>

  <form method="post">
    <input type="submit" name="Bkash_payment"
        class="button" value="Bkash_payment" />
    
    <input type="submit" name="Nagad_payment"
        class="button" value="Nagad_payment" />
  </form>
</head>

</html>