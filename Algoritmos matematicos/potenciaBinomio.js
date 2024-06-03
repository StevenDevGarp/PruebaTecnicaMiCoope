function binomialCoefficient(n, k) {
    if (k === 0 || k === n) {
        return 1;
    } else {
        return binomialCoefficient(n - 1, k - 1) + binomialCoefficient(n - 1, k);
    }
}

function binomialExpansion(n) {
    let terms = [];

    for (let k = 0; k <= n; k++) {
        let coefficient = binomialCoefficient(n, k);
        let term = `${coefficient !== 1 ? coefficient : ''}a${n - k !== 0 ? '^' + (n - k) : ''}${k !== 0 ? 'b' : ''}${k !== 1 ? '^' + k : ''}`;
        terms.push(term);
    }

    return terms.join(' + ');
}

const n = parseInt(prompt("Ingrese la potencia a la que desea elevar el binomio (a + b):"), 10);

if (isNaN(n) || n < 0) {
    console.log("Por favor, ingrese un número válido.");
} else {
    const result = binomialExpansion(n);
    console.log(`(a + b)^${n} = ${result}`);
}
