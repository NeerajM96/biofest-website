
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="refresh" content="3000">
    <title>Registrations</title>
    <meta name="viewport" content="width=device-width, initial=scale=1">
    <!--font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- font google -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie|Gamja+Flower|Great+Vibes|Pacifico|Righteous" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    
</head>
<style>
    :root{
        --main-color:rgba(255,0,64);
    }
    
    *{
        
        font-family: "Pacifico";
    }
    body{
        background: url(img/bg.gif) no-repeat;
        background-size: cover;
        padding: 0;
        margin: 0;
    }
    .LoginBox1{
        background: rgba(0,0,0,0.4);
        width: 300px;
        height: 550px;
        position: absolute;
        left: 750px;
        bottom: 55px;
        top: 50px;
        border-left: 7px solid var(--main-color);
        box-shadow: 0 0 10px rgba(0,0,0,0.45);
        animation: LoginBox1 2s linear forwards;
        opacity: 1;
    }
    
    .LoginBox2{
        background: rgba(0,0,0,0.5);
        width: 400px;
        height: 500px;
        position: absolute;
        left: 0;
        bottom: 45px;
        border-right: 2px solid rgba(255,255,255,0.3);
        box-shadow: 0 0 10px rgba(0,0,0,0.45);
        
    }
    
    .input{
        margin: 150px 0 0 0;
    }
    
    input{
        background: transparent;
        border: none;
        border-bottom: 1px solid rgba(255,255,255,0.5);
        margin: 10px;
        padding: 2px;
        font-size: 17px;
        display: block;
        color: #fff;
        width: 250px;
    }
    
    .login_a{
        background: rgba(90,87,86,0.548);
        width: 300px;
        height: 50px;
        color: #fff;
        font-size: 40px;
        text-align: center;
        text-decoration: none;
        position: absolute;
        right: 0;
        bottom: -10px;
        transition: 1s;
        font-family: "Righteous";
    }
    
    .login_a:hover{
        background: var(--main-color);
        width: 350px;
        transition: 1s;
    } 
    
    .fa-male{
        position: absolute;
        right: 350px;
        bottom: 395px;
        color: var(--main-color);
    }
    
    .fa-female{
        position: absolute;
        right: 350px;
        bottom: 360px;
        color: var(--main-color);
    }
    .gender{
        position: absolute;
        right: 200px;
        bottom: 345px;
        color: var(--main-color);
    }
    
    
    .fa-user{
        position: absolute;
        right: 70px;
        bottom: 320px;
        color: var(--main-color);
    }
    
    .fa-mobile{
        position: absolute;
        right: 70px;
        bottom: 245px;
        color: var(--main-color);
    }
    
    .fa-envelope{
        position: absolute;
        right: 65px;
        bottom: 180px;
        color: var(--main-color);
    }
    
    .fa-graduation-cap{
        position: absolute;
        right: 50px;
        bottom: 105px;
        color: var(--main-color);
    }
    
    .fa-address-card{
        position: absolute;
        right: 62px;
        bottom: 45px;
        color: var(--main-color);
    }
    
    .register{
        position: relative;
        top: 50px;
            
    }
        
    
    
    
    .title{
        font-family: "Righteous";
        position: absolute;
        top: 10px;
        left: 0;
        right: 0;
        margin: auto;
        margin: auto;
        text-align: center;
        font-size: 40px;
        color: #fff;
    }
    
    .text{
        position: absolute;
        right: 70px;
        bottom: 180px;
        color: #fff;
        font-size: 40px;
    }
    
    .text h2{
        margin: 0;
        font-size: 40px;
        color: #dd0a37;
        font-family: "Righteous";
    }
    
    @keyframes LoginBox1{
        100% {
            opacity: 1;
            left: 150px;
        }
    }
</style>
<body>
<!--
<div class="text">
    <h2>Registrations amount for events is ₹XX</h2>
</div> -->
<div class="LoginBox1">
    <div class="LoginBox2">
        
            <form action="biofest.php" method="post">
                <div class="input">
                <div class="title">Registration</div>
                
                <div class="gender">
                    <input type="radio" name="gender" value="male">
                    <br>
                    <input type="radio" name="gender" value="female">
                    <br>
                </div>
                
                
                <input type="text" name="name" placeholder="Name" required />
                <br>
                
                <input type="text" name="contact" placeholder="Contact number" required />
                <br>
                <input type="email" name="email" placeholder="E-mail" required />
                <br>
                <input type="text" name="institute" placeholder="Institute" required />
                <br>
                <input type="text" name="city" placeholder="City" required />
                <br>
                <i class="fa fa-male fa-2x"></i>
                <i class="fa fa-female fa-2x"></i>
                <i class="fa fa-user fa-2x"></i>
                <i class="fa fa-envelope fa-2x"></i>
                <i class="fa fa-mobile fa-3x"></i>
                <i class="fa fa-graduation-cap fa-3x"></i>
                <i class="fa fa-address-card fa-2x"></i>
                
                </div>
                <div class="register">
                    <button class="login_a" type="submit" name="submit">Register</button> 
                </div>
                    
                
            </form>
            
        
    </div>
</div>


</body>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 18-01-2019
 * Time: 19:28
 */

