console.log(7 + 9);

console.log(1, 2, 3, 4, 5, 6);

console.log((4 + 6 + 9) / 77);

let a = 11;

console.log(a);

console.log(11 * a);

let b = 7 * a;

console.log(b);

let max = 57;

let actual = max - 13;

let percentage = actual / max;

const month = new Date().getMonth();

switch (month) {
    // January, February, March
    case 0:
    case 1:
    case 2:
        console.log("Winter");
        break;
    // April, May, June
    case 3:
    case 4:
    case 5:
        console.log("Spring");
        break;
    // July, August, September
    case 6:
    case 7:
    case 8:
        console.log("Summer");
        break;
    // October, November, December
    case 9:
    case 10:
    case 11:
        console.log("Autumn");
        break;
    default:
        console.log("Something went wrong.");
}

var container = document.getElementById("container");
container.innerHTML = "New Content!";

function add7(adding7) {

    console.log(adding7 + 7); {
    }
}


add7(16);

function multiply(number1, number2) {

    console.log(number1 * number2);
}

multiply(2, 2);
