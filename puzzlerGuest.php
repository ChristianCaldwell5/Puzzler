<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <title>Puzzler - Guest</title>
        <!-- CSS link -->
        <link rel="stylesheet" type="text/css" href="generalDesign.css">
        <!-- js files -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="jquery/jquery-ui.js"></script>
        <script src="js/buttonGuest.js"></script>
        <script src="js/gameScript.js"></script>

        <!-- bootstrap Link -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <style>
        
            .button{
                width: 308px;
                height: 50px;
                margin-left: 0px;
                margin-top: 10px;
                font-size: 30px;
                border: 3px outset black;
                border-radius: 5px;
                background-color: white;
                -webkit-transition-duration: 1.0s; /* Safari */
                transition-duration: 1.0s;
            }
            
            .button:hover{
                width: 308px;
                height: 50px;
                margin-left: 0;
                margin-top: 10px;
                font-size: 30px;
                border: 3px outset white;
                border-radius: 5px;
                background-color: purple;
                color: white;
                cursor: pointer;
            }
            
            #title{
                font-size: 80px;
                text-align: center;
                font-family: gameFont, cursive, arial;
                position: fixed;
                top: 18px;
                left: 18px;
                margin-left: 20px;
            }
            
            #linkFrame{
                margin-left: 942px;
                margin-top: 25px;
                float: left;
                width: 300px;
                height: 30px;
                position: absolute;
                background-color: red;
                border: 3px solid black;
                text-align: center;
                font-weight: bolder;
                font-size: 20px;
            }
            
            .mailFrame{
                margin-left: 942px;
                margin-top: 85px;
                float: left;
                width: 300px;
                height: 30px;
                position: absolute;
                background-color: green;
                color: white;
                border: 3px solid black;
                text-align: center;
                font-weight: bolder;
                font-size: 20px;
                cursor: pointer;
            }
            
            #wrapper{
                width: 100%;
                height: 95px;
            }
            
            #sendMail{
                display: none;
                height: 450px;
                width: 450px;
                border: 2px outset black;
                position: absolute;
                margin: auto;
                top: 0;
                bottom: 0;
                left: 0;
                margin-left: 490px;
                margin-top: 135px;
                background-color: #DDA0DD;  
            }
            
            .center{
                text-align: center;
            }
            
            .marginL{
                margin-left: 10px;
                margin-right: 10px;
            }
            
            
            .input1{
                margin: auto;
                width: 75%;
                height: 30px;
                border: 2px solid black;
                border-radius: 4px;
            }
            
            .formButton{
                margin: auto;
                width: 75%;
                height: 40px;
                font-weight: bold;
                border: 2px solid black;
                border-radius: 4px;
                cursor: pointer;
                background-color: gainsboro;
                -webkit-transition-duration: 1.0s; /* Safari */
                transition-duration: 1.0s;
            }

            .formButton:hover{
                margin: auto;
                width: 75%;
                height: 40px;
                font-weight: bold;
                border: 2px solid black;
                border-radius: 4px;
                cursor: pointer;
                background-color: ghostwhite;
            }
            
            iframe{
                width: 600px; 
                height: 400px;
                border: 2px solid white;
                border-radius: 5px;
                margin-left: 160px;
                margin-top: 25px;
            }
            
        </style>
        
    </head>
    
    <body>
        
        <!-- Body border -->
        <div id="left"></div>
        <div id="right"></div>
        <div id="top"></div>
        <div id="bottom"></div>
        <div id="wrapper">
            <div id="title">PUZZLER</div>
            <div id="time">Time Remaining:<br><span id="timer">0 Seconds</span></div>
            <p id="linkFrame"><a href='logout.php'>Back to Login</a></p>
            <div class="mailFrame" onclick="showMail()">Message Developer</div>
<!--            <input class="mailFrame" type="button" value="Message Developer">-->
        </div>    
        <div id="youTubeDiv">
            <iframe   
                src="https://www.youtube.com/embed/JOVKtNdV7_w">
            </iframe>
        </div>
        <div id="gameBoard"></div>
        <div id="solutionBoard"><ul><li>Welcome to Puzzler!</li><li>You are playing as a GUEST.</li><li>You have limited access to the game.</li><li>Login to instantly gain access to <b>7</b> Extra levels.</li><li>Login to challenge yourself and face two extra difficulties, including the infamous <b>"Impossible PUZZLER"</b>.</li><li>Please click the "About" button and the "How To Play" button if this is your first time playing!</li></ul>
        </div>
        <div id="sendMail"><p class="center"><b>SEND EMAIL</b></p>
            <form action="mail.php" method="get">
                <p class="center">SUBJECT:<br>
                    <input class="input1" type="text" name="subject" placeholder="Type Subject About Puzzler Here" maxlength="255" size="40"></p>
                <p class="center">MESSAGE:<br>
                    <input class="input1" type="text" name="message" placeholder="Include Name, Content, and email Here" maxlength="255" size="40"></p>
                <p class="center">
                    <input class="formButton" type="submit" value="SUBMIT">
                </p>
            </form>
        </div>
        <div class="buttonPosition">
            <!-- Bootstrap dropdown -->
            <button class="dropdwn btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
                aria-expanded="false" onclick="showIt()">
                Select Level
            </button>
            <div id="showMe"class="dropdownContent">
                <input class="seperate ddb" type="button" value="Candy Land" onclick="CandyLand()">
                <input class="seperate ddb" type="button" value="Circuits" onclick="Circuits()">
            </div>  
        </div>
        
        <div class="buttonPosition2">
            <!-- Bootstrap dropdown -->
            <button class="dropdwn btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" 
                aria-expanded="false" onclick="showIt2()">
                Select Difficulty
            </button>
            <div id="showMe2" class="dropdownContent">
                <input class="seperate ddb" type="button" value="Baby Mode" onclick="playBaby()">
                <input class="seperate ddb" type="button" value="Easy" onclick="playEasy()">
                <input class="seperate ddb" type="button" value="Medium" onclick="playMedium()">
                <input class="seperate ddb" type="button" value="Hard" onclick="playHard()">
            </div>  
        </div>
        
        <div class="buttonPosition3">
            <input class="button noMargin" type="button" value="How To Play" onclick="howTo()">
            <input class="button noMargin" type="button" value="Watch Us On YouTube!" onclick="youTubeDisplay()">
            <input class="button noMargin" type="button" value="About" onclick="about()">
            <div id="cl" value="0">Current Level: None Selected</div>
            <div id="cd" value="0">Current Difficulty: None Selected</div>
            <input id="startButton" type="button" value="Start Game" onclick="startPlaying()">
            <input id="inProgress" type="button" value="Game In Progress...">   
        </div>
        
    </body>
    
    <script>
        
        var image1 = {src: 'http://ec2-34-227-16-95.compute-1.amazonaws.com/FinalProject/images/candyLand.jpg'}
        
        var image2 = { src: 'http://ec2-34-227-16-95.compute-1.amazonaws.com/FinalProject/images/circuit.jpg'}

        function startPlaying(){
            
            $("#youTubeDiv").hide();
            $("#sendMail").hide();
            var isLevel = document.getElementById("cl").value;
            var isDifficulty = document.getElementById("cd").value;
            if( isLevel == null || isDifficulty == null){
                alert('You need to select a level and difficulty before pressing the Start Game button.');
                return;
            }
            var gridSize = isDifficulty;
            
            if( isLevel == 1 ){
                puzzlerGame.startGame(image1, gridSize);
            }
            
            if( isLevel == 2 ){
                puzzlerGame.startGame(image2, gridSize);
            }  
            
        }
        
    </script>

</html>