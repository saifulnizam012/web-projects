
<html>  
<head>  
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Moon Wedding System : Login</title>

    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

<style>
    body{   
    width:100%;
        height:100%;
        background:url(bgmain.png) center center no-repeat ;
        min-height:100%;
        background-color: #FEE5D8;
}  

#btn{  
    color: #ffffff;  
    border: #695950;
    background-color: #CDA590;   
    font-family: "Times New Roman", Times, serif;  
}



img{
    
    width:20%;
    height:20%;
    margin-left: auto;
    margin-right: auto;
    display: block;
}

h1{
    text-align: center;
        
        font-weight: bold;
        font: 40px;
        font-size: 100px
        font-family: "Times New Roman", Times, serif;
        text-shadow: 1px 1px 1px #BB8A70;
        letter-spacing: 2px;
        color: #7b6746
        ;}

div{
    text-align: center;
    background-color: #FEE5D8; 
    background:url(bgmain.png) center center no-repeat ;
}

</style> 


</head>  
<body>


   
    <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
      <div class="page-header" >

    <img src="logo.png">

        <h1> Moon Wedding </h1>
         

        <h2>Sign in to your account</h2>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
              
                <label> Username: </label>
                <h2><div class="form-group"> 
                    <div class="input-group">
                <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span> 
                <input type = "text" id ="sid" name  = "sid" class="form-control form-control-lg" placeholder="Staff ID" required />  
                </div> 
                </div>
            </h2>
                <label> Password: </label>
                <h3>
                <div class="form-group">
                <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>  
                <input type = "password" id ="password" name  = "password" class="form-control form-control-lg"placeholder="Password" required /> 
                </div> 
                </div> 
            </h3>


                <h4>
            <div class="row">
                  <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">     
                <input type = "submit" id = "btn" name ="login_btn" class="btn btn-lg btn-block" value = "Login" />  
             </div>
         </div>
        </form>  
 
     
    <script>  
            function validation()  
            {  
                var sid=document.f1.sid.value;  
                var pass=document.f1.pass.value;  
                if(sid.length=="" && pass.length=="") {  
                    alert("User Name and Password fields are empty");  

                    return false;  
                }  
                else  
                {  
                    if(sid.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (pass.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>

</body>     
</html>  

