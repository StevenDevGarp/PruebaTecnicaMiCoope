function factorial(n) {
    if (n <= 1) {
        return 1;
    } else {
        return n * factorial(n - 1);
    }
}

const number = parseInt(prompt("Por favor, ingrese un número:"), 10);

if (isNaN(number) || number < 0) {
    console.log("Por favor, ingrese un número válido.");
} else {
    const result = factorial(number);
    let output = `${number}! = `;
    
    for (let i = number; i > 1; i--) {
        output += `${i}.`;
    }
    output += "1 = " + result;
    
    console.log(output);
}
