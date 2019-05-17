var sorted = false;
var puzzlerGame = {
    
    startGame: function (image, gridSize) {
        sorted = false;
        clearInterval(counter);
        this.setImage(image, gridSize);
        $('#gameBoard').randomize();
        this.enableSwapping('#gameBoard li', gridSize);
 //       TIMES BY DIFFICULTY
        if( gridSize == 2){
            var count = 1000;
        }
        if( gridSize == 3){
            var count = 2500;
        }
        if( gridSize == 4){
            var count = 5500;
        }
        if( gridSize == 5){
            var count = 7500;
        }
        if( gridSize == 6){
            var count = 14000;
        }
        if( gridSize == 7){
            var count = 24000;
        }
        var counter;
        clearInterval(counter);
        counter = setInterval(timer, 10);
        function timer(){
            document.getElementById("startButton").style.zIndex = "0";
            if(count <=  0 && sorted == false){
                console.dir(sorted);
                clearInterval(counter);
                $('#gameBoard').empty();
                $('#solutionBoard').empty();
                $('#solutionBoard').append('<p style="text-align: center">The timer has expired and you have FAILED to complete my puzzle!!!<br>Configure the settings and play again!<br>- Puzzler</p>');
                document.getElementById("startButton").style.zIndex = "2";
                return;
            }
            
            if(sorted == true){
                clearInterval(counter);
                document.getElementById("startButton").style.zIndex = "2";
                return;
            }
            count--;
            var res = count/100;
            document.getElementById("timer").innerHTML = res.toPrecision(count.toString().length) + " Seconds";
        }    

    },
    
    enableSwapping: function (elem, gridSize) {
        $(elem).draggable({
            snap: '#droppable',
            snapMode: 'outer',
            revert: "invalid",
            helper: "clone"
        });
        $(elem).droppable({
            drop: function (event, ui) {
                var $dragElem = $(ui.draggable).clone().replaceAll(this);
                $(this).replaceAll(ui.draggable);

                currentList = $('#gameBoard > li').map(function (i, el) { return $(el).attr('data-value'); });
                
                //if playing easy
                if (isSorted(currentList) && sorted == true){
                    
                    console.log("complete");
                    $('#solutionBoard').empty();
                    $('#solutionBoard').append('<p style="text-align: center">You Beat one of Puzzlers Puzzling Puzzles!!<br>- Configure the settings and play again!</p>');
                }         
                
                puzzlerGame.enableSwapping(this);
                puzzlerGame.enableSwapping($dragElem);
            }
        });
    },
    
    setImage: function (image, gridSize) {
        var percentage = 100 / (gridSize - 1);
        console.dir(gridSize);
        if( gridSize == 7){
            $('#solutionBoard').html('<image src=http://ec2-34-227-16-95.compute-1.amazonaws.com/FinalProject/images/topSecret.jpg>'); 
        }
        else{
           $('#solutionBoard').html('<image src=' + image.src + '>');  
        }
//        $('#solutionBoard').html('<image src=' + image.src + '>'); 
        $('#gameBoard').empty();
        for (var i = 0; i < gridSize * gridSize; i++) {
            var xpos = (percentage * (i % gridSize)) + '%';
            var ypos = (percentage * Math.floor(i / gridSize)) + '%';
            var li = $('<li class="item" data-value="' + (i) + '"></li>').css({
                'background-image': 'url(' + image.src + ')',
                'background-size': (gridSize * 100) + '%',
                'background-position': xpos + ' ' + ypos,
                'width': 450 / gridSize,
                'height': 450 / gridSize
            });
            $('#gameBoard').append(li);
        }
        $('#gameBoard').randomize();
    }
    
};

function isSorted(arr) {
    for (var i = 0; i < arr.length - 1; i++) {
        if (arr[i] != i){
            return false;
        }
//        else
//            {
//                   sorted = true;
//            }
            
    }
    sorted = true;
    return true;
    
}

$.fn.randomize = function (selector) {
    var $elems = selector ? $(this).find(selector) : $(this).children(),
        $parents = $elems.parent();

    $parents.each(function () {
        $(this).children(selector).sort(function () {
            return Math.round(Math.random()) - 0.5;
        }).remove().appendTo(this);
    });
    return this;
};