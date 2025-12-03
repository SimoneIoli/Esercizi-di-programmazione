function esercizio01() {
    let numero=window.prompt("inserisci un numero da 0 a 10");
    let trovare = Math.floor(Math.random() *10);
    while (numero != trovare) { 
        numero=window.prompt("Sbagliato, riprova!");
    }
    document.getElementById("es1-dataInserita").innerText ="il numero era "+ trovare;
    document.getElementById("es1-risultato").innerText="Congratulazioni";
}


function esercizio02() {
    let fattoriale=1;
    for (let numero = window.prompt("inserisci un numero per il calcolo fattoriale"); numero>0; numero--) {
        fattoriale *= numero;
    }
    document.getElementById("es2-risultato").innerText="il fattoriale è "+ fattoriale;
}