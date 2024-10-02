const randomNumber = Math.random() * 10;
const result = randomNumber > 5 ? "greater than five!" : "less than five!";

document.write(`<p>The number is ${randomNumber} and it is ${result}</p>`);
