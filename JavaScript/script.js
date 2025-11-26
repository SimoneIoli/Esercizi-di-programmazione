/** 
//stampa in console
console.log ("Ciao, mondo!");
//mostra un popup con messaggio
window.alert ("Benvenuto");
//mostra un popup con una richiesta che può tornare o true o false
console.log(window.confirm("Sei sicuro?"));
//mostra un popoup che chiede un informazione
window.prompt("Inserisci un numero");
*/
//dichiarazione di variabili
var stringa1="Ciao Mondo";  // variabile globale
let stringa2="Ciao Mondo!"; //variabile locale
const costante="Ciao Mondo!" //variabile he resta constante per tutto il programma 

            //tipi di dato
//stringhe
var stringa="Insieme di caratteri";
console.log(stringa[2]); //stampa quello con indice 2
console.log(typeof stringa); //stringa
//interi -> int
var intero = 1; //number
console.log(typeof intero); //per sapere che tipo di dato è in quella variabile, se è una stringa o numero
//decimali -> float
var decimale = 1.2; //number
console.log(typeof decimale);
//Booleani
var bool = true;
console.log(typeof bool); //Boolean
//array
var array = [1, 2, 3, 4, 5, 6];
console.log(typeof array); //oggetto
//oggetto
var object = {
    "nome": "Mario",
    "eta": 30
};
console.log(typeof object); //oggetto
//operatori aritmetici (stessi in php)
var a=1;
var b=2;
var c=3;
console.log(a+b);
console.log(a-b);
console.log(a*b);
console.log(a/b);
console.log(a%b); //resto della divisone
//incremetni e decrementi
console.log(a++); //leggo e poi incremento
console.log(++a); //incremento e poi leggo
//operatori logici e restituiscono solo booleani
console.log(a<b);
console.log(a>=c); 
console.log(a==3); //uguaglianza 
console.log(a=="3"); //uguaglianza per valore  
console.log(a=== "3"); //uguaglianza per valore e tipo
console.log(!(a>=c));  //not
console.log(a==3 && b==1); //and
console.log(a==3 || b==1); //or

//concatenazione
console.log(stringa1 + stringa2);

a=2;
b=3;
c="1"
var somma= a+c;

console.log(a+b); //somma
console.log(a+c); //Concatenazione -> 2 attaccato a 1 -> 21 (inteso come stringa)
console.log(somma+b); //concatenazione -> 21 attaccato a 3 -> 213 (inteso come stringa)
console.log(somma > 20) //true perché con l'operatore logico essendo somma una stringa la trasforma in un numero -> 20
console.log(somma.length) //converte la stringa in un numero pari alla sua lunghezza
console.log(a+b+c); //51 perché legge da sinistra verso destra, quindi essendo i primi due dei numeri, li somma, poi concatena il risultato a c

var d;
console.log(d);//indefinito
d= undefined;

var e= null;
console.log(e); //nullo

var oggetto = {
    "nullo": null,
    "undefined": undefined
};
console.log(oggetto);
console.log(d == true); //falso!
console.log(e == true); //falso!
console.log(d == e); //vero (entrambi falsi -> true)
console.log(d === e); //falso nullo != undefined

