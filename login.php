<?php
  session_start();
 
 ?> 
<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="97795da6227a5e69170beea9-text/javascript"></script>
</head>
<body>

<div class="header">
    <h1>LoginSystem</h1>
</div>
<div id="header-wrapper">
    <div id="header" class="container">
        <div id="logo">
            <h1 class="subheader">Test system.</h1>
            <div id="menu">
<?php
  
  
  
  
  
  
  require_once "connect.php";
  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
  if ($polaczenie->connect_errno!=0)
  {
    echo "Error: ".$polaczenie->connect_errno;
  }
  else
  {
    
    $login = $_POST['auth'];
    
    
    $sql = "SELECT * FROM serial WHERE serial='$login'";
   
    
    if ($result = @$polaczenie->query($sql))
    {
      $how_users = $result->num_rows;
      if($how_users>0)
      {
        
         $_SESSION['logged'] = true;
        
         $wiersz = $result->fetch_assoc();
         $_SESSION['id'] = $wiersz['id'];
         $user = $wiersz['serial'];
         $result->free_result();
         header('Location: searcher.php');
      }  
     
    }  
    
    $polaczenie->close();
  }
  
  
  
?>
            </div>
        </div>
    </div>

</div>

<div class="panel">
    <form id="search" method="post">
        <input type="text" name="auth" id="targetName" required=""><br><br>
        <input class="button1" type="submit" value="Login">

    </form>


</div>

</body>
<script src="protect.js"></script>
<script type="module">
  window.addEventListener('devtoolschange', event => {
    window.location.href = "https://tenor.com/view/kobe-bryant-umad-you-mad-gif-4925293";
  });
</script>