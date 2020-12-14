<?php
function testfun(){
$to = "support@alsadaqa.com.sa";
$subject = "استفسار من الموقع";
$fullname=$_POST['firstname'].' '. $_POST['last'];
$email= $_POST['email'];
$message =  $_POST['textarea'];
$nametext= "applicant's name : ";
$mailtext= "applicant's email : ";
$txt = $htext."\n".$nametext.$fullname."\n".$mailtext.$email."\n\r".$message;
$headers = "From: support@alsadaqa.com.sa". "\r\n";

mail($to,$subject,$txt,$headers);
}
if(array_key_exists('test',$_POST)){
   testfun();
   echo '<script>alert("Your message was sent successfully")</script>'; 

}


?>
<!DOCTYPE html>

<html lang="en">
<!--support@alsadaqa.com.sa-->
<head>
       <title>AL-Sadaqa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
    <link rel="shortcut icon" href="images/s4.png" type="image/vnd.microsoft.icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="layout/styles/Contact.css">
 <style>
     sup {
    color: red;
    font-size: 22px;
}
        .heads {border:none}

 </style>
</head>
<body id="top" style="font-family: Verdana,Arial,sans-serif;">
    <div id="fwt-masthead" class='handel-container'>

               <div class="header-part wrapper row0">
        
        <div class="wrapper row0" style="height:51px;">
                  <div id="topbar" class="hoc clear"> 
                    <div class="fl_left" style="">
                      <ul class="nospace">
                        <li><i class="fa fa-phone"></i> +966-12-676-0020</li>
                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@alsadaqa.com.sa">info@alsadaqa.com.sa</a></li>
                      </ul>
                    </div>

                    
                   <!--Redirection-->
                    <div class="fl_right redirection-arabic">
                      <ul class="nospace" style='direction:rtl;font-size: 14px;'>
                        <li><a href='AL-Sadaqa-arabic/contactus.php'>عربي</a></li>
                      </ul>
                    </div>
            </div></div>
                </div>
 <div class="wrapper row1 ex-row1 navs" style="  background-image: url('images/o120.jpg');
    background-position: center;
    background-clip: border-box;
    width:100%">
     <div style='background-color:#dddddd3b;color:#000;'>

     <header id="header" class="hoc clear"> 
                    <nav id="mainav" class="fl_left">
                      <ul class="clear">
                        <li><a href="index.html">Home</a></li>
                        <li><a class="drop" href="main-core.html">Core Solutions</a>
                          <ul>
                            <li><a href="core.html#Structured">Structured Cabling Solutions</a></li> 
                            <li><a href="core.html#network">Network Solution</a></li>
                            <li><a href="core.html#L">Low Current And Electromechanical Solution</a></li>


                            <li><a href="core.html#Enterprise">Enterprise Technology Solutions</a></li>
                            <li><a href="core.html#data">Data Center Solutions</a></li>
                            <li><a href="core.html#Business">Business Applications &amp; Software</a></li>

                          </ul>
                        </li>
                        <li><a href="service.html">Services</a></li>
                        <li><a href="clients.html">Clients</a></li>
                        <li><a href="bussiness-partiners.html">Business Partners</a></li>
                        <li  class='active'><a href="Contactus.php">Contact us</a></li>
                      </ul>
                    </nav>
                    <div id="logo" class="fl_right">
                        <a href="index.html">
                            <img src='images/kk.png'></a>
                    </div>
                  </header>
                  
                  </div>
        </div>
<div class="w3-content w3-display-container">

    <div id='contact-cont' class="contact-container">
    
        <div class="w3-content w3-display-container">

        
        <div class="content-contact">
            <div class="row h-img" style="margin:0 auto; width:100%;">
               <img src="images/page-header/contact3.jpg" alt='Business Partners'/>
            </div>
           <div class="contact-header">
               <h5  style="padding: 1px;font-size: 30px;color:orange;text-align:center">Contact us</h5>
            </div>
            <hr>
            <div class="row row-info" style="width: 100%;margin: 10px 3%">
                    <ul class='list-group' style="width:93%">
                        <!--<h5 class="heading" style="margin-bottom:20px; color:orange">Al-Sadaqa Information Solutions trading Head Office</h5>-->
                        <li class="list-group-item">
                          <address>
                             <b>Address :</b> Kingdom of Saudi Arabia, Jeddah, King Mohammad Abdulaziz street &amp; P.O Box: 5846 - Jeddah 21432
                          </address>
                        </li>
                        <li class="list-group-item"><b>Email :</b> <a href="mailto:info@alsadaqa.com.sa">info@alsadaqa.com.sa</a></li>
                        <li class="list-group-item"><b>Sales :</b> <a href="mailto:Sales-info@alsadaqa.com.sa">Sales-info@alsadaqa.com.sa</a></li>
                        <li class="list-group-item"><b>Tel :</b> +966-12-676-0020</li>
                        <li class="list-group-item"><b>Fax :</b> +966-12-674-3019</li>  
                        <li class="list-group-item">
                             <ul class="faico clear" style='text-align:center;'>
                                <li><a class="faicon-facebook" href="https://www.facebook.com/alsaddaqa/" target="_blank" style="color:#fff;"> <i class="fa fa-facebook "></i></a></li>
                                <li><a class="faicon-twitter" href="https://twitter.com/alsaddaqa?s=09" target="_blank" style="color:#fff;"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="faicon-google-plus" href="https://www.youtube.com/channel/UCx8nftmTKCyqGB-xlyG6iDQ/about" target="_blank" style="color:#fff;"><i class="fa fa-youtube"></i></a></li>
                                <li><a class="faicon-google-plus" href="https://www.instagram.com/alsaddaqainformation/" target="_blank" style="color:#fff;"><i class="fa fa-instagram"></i></a></li>
                                <li><a class="faicon-linkedin" href="https://www.linkedin.com/in/al-saddaqa-solutions-9b01671b3" target="_blank" style="color:#fff;"><i class="fa fa-linkedin"></i></a></li>

                            </ul>
                            
                        </li>
                    </ul>
                
            </div>
           
            <div class="contact-form">
                <div class ="contact-location">
                    <div style="text-align:center; margin-left:auto; margin-right:auto;">
                        <h3 style="margin-top:20px;color:#333;margin-bottom:20px; color:orange">Ou<span style="border-bottom:2px dashed orange;padding-bottom:10px;">r Loca</span>tion</h3>
                        
                        
                   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d463.818495199274!2d39.2122931!3d21.5645238!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d1a3ecc6b125%3A0x91c50d916b24c114!2z2KfZhNi12K_Yp9mC2Kkg2YTYp9is2YfYstipINin2YTYp9iq2LXYp9mE2KfYqiBBbCBzYWRhcWEgZm9yIGNvbW11bmljYXRpb24gZXN0!5e0!3m2!1sar!2seg!4v1604134908226!5m2!1sar!2seg" width="900" height="425" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    
                    
                    </div>
                </div>
                <div style="margin: 0 3%;">
                    <form name="form" action="" method="POST">
                      <div class="form-group">
                        <h2 for="exampleInputEmail1">Full Name</h2>
                        <input type="text" name='firstname' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="first name" required><sup>*</sup>
                        <input type="text" name='last' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="last name" required><sup>*</sup>
                      </div>
                      <div class="form-group">
                        <h2 for="exampleInputEmail1">Email</h2>
                        <input type="text" name='email' class="form-control" id="exampleInputEmail1" placeholder="Email" required><sup>*</sup>
                      </div>
                        <div class="form-group">
                            <h2>Message</h2>
                            <textarea  name='textarea' id='' style="padding-left:5px;width:100%; font-size:16px; height:200px;"></textarea>
                        </div>
                        
                      <hr>
                     <button type="submit"  name='test'  class="btn btn-success" style="margin: 0 35%;width: 30%;height: 45px;border-radius:10px;">send</button>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
    <div id="back-to-top"><a href='#top'><svg viewBox="0 0 24 24"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path></svg></a></div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear" style="color:#fff"> 
    <div style="text-align:center; margin-left:auto; margin-right:auto;"><p class="" >Copyright &copy; 2020 Al-sadaqa | Powered by Al-sadaqa</p></div>
  </div>
        
    <div class="clears"></div>
    <div class="footbg" style="height:9px;">
    
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout-arabic/scripts/jquery.mobilemenu.js"></script>
<script src="layout/scripts/jquery.flexslider-min.js"></script>
     <script>
   

                
                $("#back-to-top").click(function () {
                $("html, body").animate({scrollTop: 0}, 1000);
                });
    </script>
    </div>
    </body>
</html>