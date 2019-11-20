function counterPlay() {
    let randomNumber = Math.floor(Math.random() * 3);
    var choiceComputer;
    switch (randomNumber) {
        case 0:
            choiceComputer = "Paper";
            break;
        case 1:
            choiceComputer = "Rock";
            break;
        case 2:
            choiceComputer = "Scissors"
            break;


    }
    return choiceComputer;

}

//function numberGames() {
//   var games = window.prompt("Number of games");
//   return games;
//}

function humanInput() {
    var choice = window.prompt("Enter Rock, Paper, or Scissors");
    return choice;

}



function playRound(playerSelection, computerSelection) {
    var player = playerSelection.toLowerCase();
    var computer = computerSelection.toLowerCase();

    if (player === computerSelection) {
        console.log("it's a draw");
        return "draw";
    }
    else if ((player === "rock") && (computer === "paper")) {
        //computer++;
        return "computer";
        console.log("You lose!");
    }
    else if ((player === "rock") && (computer === "scissors")) {
        console.log("You win!");
        return "palyer";
        //humanGame++;
    }
    else if ((player === "scissors") && (computer === "paper")) {
        console.log("You win!");
        return "palyer";
        //humanGame++;
    }
    else if ((player === "scissors") && (computer === "rock")) {
        console.log("You lose!");
        return "computer";
        //computer++;
    }
    else if ((player === "paper") && (computer === "rock")) {
        console.log("You win!");
        return "palyer";
        //humanGame++;
    }
    else if ((player === "paper") && (computer === "scissors")) {
        console.log("You lose!");
        return "computer";
        //computer++;
    }

}

function games() {
    // var g = numberGames();
    var games = window.prompt("Number of games");
    var gamesN = Number(games);
    //if (isNaN(games)) {
      //  alert("The input cannot be parsed to a number");
       // games = window.prompt("plese try again");
    //}/
    //else {
       
        var humanGame = 0;
        var computer = 0;

        //for (var i = 0; i < g; i++)
        //for (var i = 0; i<5;i++)
        for (var i = 0; i < gamesN; i++) {
            var result = playRound(humanInput(), counterPlay());

            if (result === "player") {
                alert("win");
                ++humanGame;
            }
            else if (result === "computer") {
                ++computer;
                alert("lose");
            }
            else {
                console.log("draw!")
                alert("draw");
            }
        }

        if (humanGame > computer) {
            return console.log("YOU WIN!")
        }
        else if (humanGame < computer) {
            return console.log("YOU LOSE")
        }
        else { return console.log(" ITS A DRAW!") }
    }
//}



games();
