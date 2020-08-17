<?php

function mailCreate($upload, $mail_exp, $subject, $message) {
    $mailbody = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
        <title>Document</title>
    </head>
<style>
.register{
   background: -webkit-linear-gradient(left, #3931af, #00c6ff);
   margin-top: 3%;
   padding: 3%;
}
.register-left{
   text-align: center;
   color: #fff;
   margin-top: 4%;
}
.register-left input{
   border: none;
   border-radius: 1.5rem;
   padding: 2%;
   width: 60%;
   background: #f8f9fa;
   font-weight: bold;
   color: #383d41;
   margin-top: 30%;
   margin-bottom: 3%;
   cursor: pointer;
}
.register-right{
   background: #f8f9fa;
   border-top-left-radius: 10% 50%;
   border-bottom-left-radius: 10% 50%;
}
.register-left img{
   margin-top: 15%;
   margin-bottom: 5%;
   width: 25%;
   -webkit-animation: mover 2s infinite  alternate;
   animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
   0% { transform: translateY(0); }
   100% { transform: translateY(-20px); }
}
@keyframes mover {
   0% { transform: translateY(0); }
   100% { transform: translateY(-20px); }
}
.register-left p{
   font-weight: lighter;
   padding: 12%;
   margin-top: -9%;
}
.register .register-form{
   padding: 10%;
   margin-top: 10%;
}
.btnRegister{
   float: right;
   margin-top: 10%;
   border: none;
   border-radius: 1.5rem;
   padding: 2%;
   background: #0062cc;
   color: #fff;
   font-weight: 600;
   width: 50%;
   cursor: pointer;
}
.register .nav-tabs{
   margin-top: 3%;
   border: none;
   background: #0062cc;
   border-radius: 1.5rem;
   width: 28%;
   float: right;
}
.register .nav-tabs .nav-link{
   padding: 2%;
   height: 34px;
   font-weight: 600;
   color: #fff;
   border-top-right-radius: 1.5rem;
   border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
   border: none;
}
.register .nav-tabs .nav-link.active{
   width: 100px;
   color: #0062cc;
   border: 2px solid #0062cc;
   border-top-left-radius: 1.5rem;
   border-bottom-left-radius: 1.5rem;
}
.register-heading{
   text-align: center;
   margin-top: 8%;
   margin-bottom: -15%;
   color: #495057;
}
</style>
<body>
<div class="container register">
    <div class="row justify-content-center">
        <div class="col-md-6 register-left ">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
            <h3>Welcome</h3>
            <h4>Vous avez un message de la part de '. $mail_exp .'</h4>
            <h5> Sujet : '. $subject .'</h5>
            <h5> message : '. $message .'</h5>
            <h5> Telecharger le ficher en cliquant sur le lien suivant :</h5>
            <a href="' . $upload . '" class="btnLink">Cliquez ici</a>
        </div>
       
    </div>

</div>
</body>
</html>';
return $mailbody;
}

