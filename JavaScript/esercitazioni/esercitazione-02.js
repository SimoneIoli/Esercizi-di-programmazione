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

function esercizio03() {
    let studente = {
        nome: "",
        cognome: "",
        marticola: "",
        voti : []
    };
    //input
    for (chiave in studente) {
        if (chiave!="voti") {
            studente [chiave]= window.prompt("Inserire "+ chiave);
        } else {
            let stringaVoti = window.prompt("Inserire i voti separati da ',' ");
            studente[chiave] = stringaVoti.split(",");
        }
    }
    //media
    let mediavoti=0;
    for (voto of studente.voti) {
        mediavoti+= parseInt(voto);
    }
    studente.mediavoti= mediavoti / studente.voti.length;
    //stampa
    let risultato = "";
    for (chiave in studente) {
        if (chiave != "voti") {
            risultato += chiave + ": " + studente[chiave] + "<br/>";
        }
    }
    document.getElementById("es3-risultato"). innerHTML= risultato;
}