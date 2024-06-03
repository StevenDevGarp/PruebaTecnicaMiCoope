function calcularAmortizacion(monto, plazo, tasaInteres) {
    let saldo = monto;
    let cuotaFija = monto / plazo;
    let amortizacion = [];

    for (let periodo = 1; periodo <= plazo; periodo++) {
        let interes = saldo * tasaInteres;
        let pago = cuotaFija + interes;
        amortizacion.push({
            periodo: periodo,
            saldo: saldo.toFixed(2),
            interes: interes.toFixed(2),
            abono: cuotaFija.toFixed(2),
            pago: pago.toFixed(2)
        });
        saldo -= cuotaFija;
    }

    return amortizacion;
}

const monto = parseFloat(prompt("Ingrese el monto del préstamo:"));
const plazo = parseInt(prompt("Ingrese el plazo en meses:"), 10);
const tasaInteres = parseFloat(prompt("Ingrese la tasa de interés mensual (en porcentaje):")) / 100;

if (isNaN(monto) || isNaN(plazo) || isNaN(tasaInteres) || monto <= 0 || plazo <= 0 || tasaInteres <= 0) {
    console.log("Por favor, ingrese valores válidos.");
} else {
    const amortizacion = calcularAmortizacion(monto, plazo, tasaInteres);
    console.log("Periodo\tSaldo\t\tInteres\t\tAbono\t\tPago");

    amortizacion.forEach(cuota => {
        console.log(`${cuota.periodo}\tQ ${cuota.saldo}\tQ ${cuota.interes}\tQ ${cuota.abono}\tQ ${cuota.pago}`);
    });
}