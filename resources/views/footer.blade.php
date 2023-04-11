<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
  <style>
    footer{
        background-color:#0a335d;
        padding: 50px;
    }
    #contactglo{
        display: flex;
        padding-top:50px ;
        margin-left: auto;
    }
    .contact{
        margin-right: 500px;
        margin-left: 30px;
        color: white;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight:inherit;
    }
    .contact1{
        line-height: 50px;
    }
    .contact1 a{
          text-decoration: none;
          color: antiquewhite;
    }
    .links{
        line-height: 50px;
    }
    .footerlogo{
        display: flex;
        justify-content: center;
        align-items: center;
        color: aliceblue;
       font-size: xx-large;
       font-family: Sans-serif;
       
        
    }
    .uil{
        padding: 20px;

    }
    .links a{
        color: white;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size:20px;
        text-decoration: none;
    }
    .contact1 i{
       width: 100px !important;
    }
    #img{
        width: 150px;
        height:  100px;
    }
  </style>
<body>
    <footer>
        <div class="footerlogo">
            <img src="logo.svg" id="img" alt=""><span><p>DR.ALEX PALLO</p></span>
        </div>
        <div id="contactglo" >
                <div class="contact">
                            <div id="insta" class="contact1">
                               <a href=""><i class="uil uil-instagram" ></i><span>Istagram/link</span></a> 
                            </div>
                            <div id="facbook" class="contact1">
                                <a href=""><i class="uil uil-facebook-f"></i><span>facebook/link</span></a>
                            </div>
                            <div id="tele" class="contact1">
                                <a href=""><i class="uil uil-phone-alt"> </i><span>+212 62124765</span></a>
                            </div>
                            <div id="horair"   class="contact1">
                               <a href=""> <i class="uil uil-calender"></i><span>horaire d'ouverture 8:00 - 16:00</span></a>
                            </div>
                </div>

                <div>
                            <div class="links"><a href="">Rondez-vous</a></div>
                            <div class="links"><a href="">Blog</a></div>
                            <div class="links"><a href="">Archive</a></div>
                </div>
        </div>
    </footer>
</body>
</html>