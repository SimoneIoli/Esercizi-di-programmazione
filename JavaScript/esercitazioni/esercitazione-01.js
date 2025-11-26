//es1
var giorno = window.prompt("inserisci il giorno");
var mese = window.prompt("inserisci il mese");
var anno = window.prompt("inserisci l'anno ");
var inserita = document.getElementById("es1-dataInserita");
inserita.innerText = 'Data inserita: ' +giorno + '/'+ mese + '/' + anno;

function esercizio01() {
if(anno == '2025') {
    if (mese =='11') {
        if (giorno =='26') {
           document.getElementById("es1-risultato").innerText = 'La data è di oggi';
        } else if (giorno < '26') {
           document.getElementById("es1-risultato").innerText = 'La data è futura';
        } else {
           document.getElementById("es1-risultato").innerText = 'La data non è precendete a oggi';
        }
    } else if (mese<'11') {
       document.getElementById("es1-risultato").innerText = 'La data è futura';
    } else {
           document.getElementById("es1-risultato").innerText = 'La data è futura';
    }
} else if (anno <'2025') {
    document.getElementById("es1-risultato").innerText = 'La data è precendete a oggi';
} else {
document.getElementById("es1-risultato").innerText = 'La data non è precendete a oggi';
}
}

function esercizio02() {
    //converto in formato data
    let data = new date(giorno + '/' + mese + '/' + anno);
    //giorno della settimana (da 0 a 6)!!!
    let giorno1 = data.getday();
    switch (giorno1) {
        case 0:
            document.getElementById("es1-risultato").innerText = 'Domenica';
            break;
        case 1:
            document.getElementById("es1-risultato").innerText = 'Lunedì';
            break;
        case 2:
            document.getElementById("es1-risultato").innerText = 'Martedì';
            break;
        case 3:
            document.getElementById("es1-risultato").innerText = 'Mercoledì';
            break;
        case 4:
            document.getElementById("es1-risultato").innerText = 'Giovedì';
            break;
        case 5:
            document.getElementById("es1-risultato").innerText = 'Venerdì';
            break;
        case 6:
            document.getElementById("es1-risultato").innerText = 'Sabato';
            break;
        default: 
        document.getElementById("es1-risultato").innerText = 'Non valido';
    }
} 