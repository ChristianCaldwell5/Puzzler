function playBaby(){
    $("#showMe2").hide();
    $("#cd").html("Current Difficulty: Baby Mode");
    document.getElementById("cd").value = '2';
    var value = document.getElementById("cd").value;
    console.dir(value);
}

function playEasy(){
    $("#showMe2").hide();
    $("#cd").html("Current Difficulty: Easy");
    document.getElementById("cd").value = '3';
    var value2 = document.getElementById("cd").value;
    console.dir(value2);
}

function playMedium(){
    $("#showMe2").hide();
   $("#cd").html("Current Difficulty: Medium");
    document.getElementById("cd").value = '4'; 
    var value3 = document.getElementById("cd").value;
    console.dir(value3);
}

function playHard(){
    $("#showMe2").hide();
   $("#cd").html("Current Difficulty: Hard");
    document.getElementById("cd").value = '5';  
    var value4 = document.getElementById("cd").value;
    console.dir(value4);
}

function playExpert(){
    $("#showMe2").hide();
    $("#cd").html("Current Difficulty: Expert");
    document.getElementById("cd").value = '6'; 
    var value5 = document.getElementById("cd").value;
    console.dir(value5);
}

function playImpossible(){
    $("#showMe2").hide();
    $("#cd").html("Current Difficulty: Impossible PUZZLER");
    document.getElementById("cd").value = '7'; 
    var value6 = document.getElementById("cd").value;
    console.dir(value6);
}

function CandyLand(){
    $("#showMe").hide();
    $("#cl").html("Current Level: Candy Land");
    document.getElementById("cl").value = '1';
    var value1 = document.getElementById("cl").value;
    console.dir(value1);
}

function Circuits(){
    $("#showMe").hide();
    $("#cl").html("Current Level: Circuits");
    document.getElementById("cl").value = '2';
    var value2 = document.getElementById("cl").value;
    console.dir(value2);
}

function ThemePark(){
    $("#showMe").hide();
    $("#cl").html("Current Level: Theme Park");
    document.getElementById("cl").value = '3';
    var value3 = document.getElementById("cl").value;
    console.dir(value3);
}

function ToxicWaste(){
    $("#showMe").hide();
    $("#cl").html("Current Level: Toxic Waste");
    document.getElementById("cl").value = '4';
    var value4 = document.getElementById("cl").value;
    console.dir(value4);
}

function Biohazard(){
    $("#showMe").hide();
    $("#cl").html("Current Level: Biohazard");
    document.getElementById("cl").value = '5';
    var value5 = document.getElementById("cl").value;
    console.dir(value5);
}

function PuzzlerLair(){
    $("#showMe").hide();
    $("#cl").html("Current Level: Puzzlers Castle");
    document.getElementById("cl").value = '6';
    var value6 = document.getElementById("cl").value;
    console.dir(value6);
}

function babyDog(){
    $("#showMe").hide();
    $("#cl").html("Current Level: Puppies");
    document.getElementById("cl").value = '7';
    var value7 = document.getElementById("cl").value;
    console.dir(value7);
}

function magma(){
    $("#showMe").hide();
    $("#cl").html("Current Level: Magma");
    document.getElementById("cl").value = '8';
    var value7 = document.getElementById("cl").value;
    console.dir(value7);
}

function luxury(){
    $("#showMe").hide();
    $("#cl").html("Current Level: Luxury");
    document.getElementById("cl").value = '9';
    var value7 = document.getElementById("cl").value;
    console.dir(value7);
}

function about(){
    
    $("#youTubeDiv").hide();
    $("#sendMail").hide();
    $('#solutionBoard').empty();
    $('#solutionBoard').html('<p>Loading...</p>');
    
    $.get("http://ec2-34-227-16-95.compute-1.amazonaws.com/FinalProject/webServiceAbout.php", function(info){
        $('#solutionBoard').html('<p class="marginL">' + info + '</p>');
    });
    
    $('#gameBoard').empty();
    
}

function howTo(){
    
    $("#youTubeDiv").hide();
    $("#sendMail").hide();
    $('#solutionBoard').empty();
    $('#gameBoard').empty();
    
    $('#gameBoard').html('<P class="marginL"><b>THE OBJECTIVE:</b><br><br>- The objective of the game is to complete the puzzle before time expires.<br><br>- The higher the difficulty, the more puzzle pieces there are.<br><br>- Complete the puzzle by clicking and dragging pieces to your desired location and matching the solution.<br><br>- Upon puzzle drop, it will swap places with the piece you dropped it on.<br><br>- Goodluck!</p>');
    
    $('#solutionBoard').html('<p class="marginL"><b>DIFFICULTY LEVELS:</b><br><br>BABY MODE: The puzzle is split into 4 pieces and you get 10 seconds to complete the puzzle.<br><br>EASY: The puzzle is split into 9 pieces and you get 25 seconds to complete the puzzle.<br><br>MEDIUM: The puzzle is split into 12 pieces and you get 55 seconds to complete the puzzle.<br><br>HARD: The puzzle is split into 25 pieces and you get 75 seconds to complete the puzzle.<br><br>EXPERT: The puzzle is split into 36 pieces and you get 140 seconds to complete the puzzle.<br><br>IMPOSSIBLE PUZZLER: The puzzle is split into 49 pieces, you do not get to see the solution, and you get 240 seconds to complete the puzzle.</p>');
    
}

function showMail(){
    $("#sendMail").toggle();    
}

function showIt(){
    $("#showMe").toggle();
}

function showIt2(){
    $("#showMe2").toggle();
}

function youTubeDisplay(){
    $("#youTubeDiv").toggle();
}