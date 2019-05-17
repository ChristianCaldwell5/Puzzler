\\\<!--
    
    The following project was created by:
    Christian Caldwell.
    3-25-18
    CGCNBF

-->

<!DOCTYPE html>

<html lang="en">

    <head>
        
        <meta charset="UTF-8">
        <title>Login - Puzzler</title>
        
        <link rel="stylesheet" type="text/css" href="generalDesign.css">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="jquery/jquery-ui.js"></script>
        
        <style> 
            
            
            body{
                background-image: url(images/puzzler.jpg);
                background-size: cover;
                background-repeat: repeat-y;
            }
            
            #message{
                color: black;
                position: fixed;
                top: 18px;
                right: 18px;
                margin-right: 20px;
                width: 300px;
                height: 250px;
                font-family: cursive, sans-serif, arial;
                font-size: 50px;
                text-align: right;
            }
            
             div#bomb img{
                bottom: 12px;
                left: 12px;
                position: fixed;
                width: 350px;
                height: 250px;
                
            }
            
            div#puzzles img{
                margin-right: 5px;
                height: 150px;
                width: 100%;
                border: 2px solid black;
            }
            
            #title{
                font-size: 60px;
                text-align: center;
                font-family: gameFont, cursive, arial;
                margin-top: 1px;
                margin-bottom: 2px;
            }
            
            #loginDiv{
                height: 550px;
                width: 400px;
                border: 4px outset black;
                padding: 10px;
                left: 0;
                right: 0;
                margin-left: auto;
                margin-right: auto;
                margin-top: 10px;
                background-color: lightgreen;
                position: absolute;
            }
            
            #signUpDiv{
                height: 550px;
                width: 400px;
                border: 4px outset black;
                padding: 10px;
                left: 0;
                right: 0;
                margin-left: auto;
                margin-right: auto;
                margin-top: 10px;
                background-color: lightgreen;
                position: absolute;
                z-index: 3;
                display: none;
            }
            
            #alertMessage{
                height: 165px;
                width: 400px;
                border: 4px outset black;
                border-radius: 10px;
                padding: 10px;
                left: 0;
                right: 0;
                margin-left: auto;
                margin-right: auto;
                margin-top: 70px;
                background-color: orange;
                color: black;
                position: absolute;
                z-index: 2;
                text-align: center;
                display: none;
            }
            
            #alertType{
                height: 60px;
                width: 200;
                padding: 10px;
                left: 0;
                right: 0;
                margin-left: auto;
                margin-right: auto;
                background-color: orange;
                color: black;
            }
            
            #okBtn{
                width: 250px;
                height: 40px;
                border: 4px solid lightblue;
                margin-top: 0;
                color: black;
                background-color: white;
                cursor: pointer;
                font-weight: bolder;
                font-size: 20px;
            }
            
            div.ui-state-error {
                padding: 4px 0;
            }
            
            
        </style>
    
    </head>
    
    <body>
        
        <!-- ----------- Construction of Login Page ----------- -->
        <!-- Body border -->
        <div id="left"></div>
        <div id="right"></div>
        <div id="top"></div>
        <div id="bottom"></div>
        
        <!-- Login Images -->
        <div id="bomb"><img src="images/timeBomb.png" alt="bomb"></div>
        <div id="message">Can you beat the clock?<br>- The Puzzler</div>
        <div id="alertMessage">
            <span style="color:white; font-weight:bolder; font-size:30px;">ALERT:</span>
            <iframe id="alertType" name="showHere" sandbox="allow-top-navigation" frameborder="0">
                <!-- Show content here -->
            </iframe>
            <input id="okBtn" type="button" value="OK" onclick="okBtn()" >
         </div>
        
        <!-- Login wrapper -->
        <div id="loginDiv">
            <p id="title">PUZZLER</p>
            <div id="puzzles"><img src="images/puzzleLog.jpg" alt="puzzle"></div>
            
            <form action="handleLogin.php" method="POST">
                
                <div>
                    
                    <input type="hidden" name="action" value="do_login">
        
                    <input class="input" type="text" name="username" placeholder="Username" maxlength="15">
                    
                    <input class="input" type="password" name="password" placeholder="Password" maxlength="15">
                    
                    <input class="button" type="submit" value="Login">
            
                    <input class="button" type="button" value="Play As Guest" onclick="playGuest()"/>
                    
                    <input class="button" type="button" value="Sign Up" onclick="signUp()">
                    
                </div>
            </form> 
            
        </div>
        
        <div id="signUpDiv">
            <p id="title">SIGN UP</p>
            <div id="puzzles"><img src="images/puzzleLog.jpg" alt="puzzle"></div>
            
            <form action="registerMe.php" method="POST" target="showHere">
            
                <div>
                    
                    <input class="input" type="text" name="createUsername" placeholder="Input A Username..." maxlength="20">
                    <input class="input" type="password" name="createPassword" placeholder="Input A Password..." maxlength="30">

                    <input class="input" type="password" name="verifyPassword" placeholder="Verify Password..." maxlength="30">

                    <input class="button" type="submit" value="Finish Registration" onclick="registerMe()">

                    <input class="button" type="button" value="Go Back To Login" onclick="signUp()">

                </div>
            
            </form>
            
        </div>
            
            <!-- ----------- Script below is for logging in and redirecting as guest ----------- -->
            
        <script>
            
            function playGuest(){
                location.href = "http://chriscal55.epizy.com/puzzler/puzzlerGuest.php";
            }
            
            function signUp(){
                
                $("#signUpDiv").toggle();
                $("#alertMessage").toggle();
                
            }
            
            function registerMe(){
                $("#signUpDiv").toggle();
            }
            
            function okBtn(){
                $("#alertMessage").toggle();
            }
      </script>   
            
       
        
        
    
    </body>
    
</html>