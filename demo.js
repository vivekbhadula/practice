var randomNumber1 = Math.ceil(Math.random() * 6);
console.log("1: "+randomNumber1); 
document.querySelector("div .player1").innerText = randomNumber1;

var randomNumber2 = Math.ceil(Math.random() * 6);
console.log("2: "+randomNumber2); 
document.querySelector("div .player2").innerText = randomNumber2;

if (randomNumber1 > randomNumber2) {
    document.querySelector("h1").innerText = "Player 1 wins";
}
else if (randomNumber2 > randomNumber1) {
    document.querySelector("h1").innerText = "Player 2 wins";
}
else {
    document.querySelector("h1").innerText = "Draw!!!!";
}
