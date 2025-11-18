<?php 
//Commento in linea
/*Coomento
su più linee*/ 
    /*Stringhe*/
    echo "<h1 class='classe'>Hello World</h1>"; //le virgolette dentro per funzionare devono essere diverse da quelle all'esterno
    echo '<h2 class="classe" attr= \'qui sono dentro nella stringa \'>Tipi di dato:</h2>'; //possono essere usate con \ per essere usate anche dentro
    
    /*Booleani*/ 
    //vero -> true = 1
    //falso -> false = 0

    /*Numeri*/
    //echo 10;
    //echo "\n", // per andare a capo nel documento di output, ma non in html
    //echo 1.15;

    /*Nome delle variabili*/
    $nome_variabile ;
    $NomeVariabile ;

    /*Array*/
    $array_1 = [1, 2, 3, 4, 5]; //sono anonimi con l'uso delle parentesi quadre, si accede usando l'indice numerico
    $array_2 = array(1, 2, 3, 4, 5);
    $array_3 = array( //array con chiavi per accedere ai valori
        "nome" => "Mario",
        "cognome" => "Rossi",
        "eta" => 21
    );
    //echo $array_3; //non stampa l'array così
    print_r($array_3); //stampa l'array in modo leggibile
    echo "<br>";
    var_dump($array_3); //stampa l'array con informazioni dettagliate sui tipi di dato
    echo "<br>";

    //verifica se Mario Rossi è maggiorenne
    if ($array_3["eta"] >= 18) {  // = assegnazione 
        echo "utente maggiorenne</br>";
    } else {
        echo "utente minorenne </br>";
    }
    //veridico se Mario rosi ha 18 anni
    if ($array_3["eta"] == 18) {  // == confronto 
        echo "utente di 18 anni</br>";
    } else {
        echo "utente non di 18 anni</br>";
    }
    //Uguaglianza stretta, controlla valore e tipo di dato
    if ($array_3["eta"] == 18) { } //Questa condizione è vera anche se "eta" fosse la stringa "18"
    if ($array_3["eta"] === "18") { } //Questa condizione è falsa 
    // intero senza virgolette, stringa con virgolette
    
?>