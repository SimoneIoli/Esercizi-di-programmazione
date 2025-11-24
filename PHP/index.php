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

    /**Operatori Logici:
     * AND -> and o &&  -- Se la prima condizione è falsa non guardo nemmeno la seconda 
     * OR -> or oppure ||  -- Se la prima condizione è vera non guardo nemmeno la seconda
     * NOT -> !
     * XOR -> xor
     * 
     */
    /**COSTRUTTI FOR   WHILE   DO-WHILE  */
    $voti =  [7, 8, 7.5, 9, 10, 8];

    $somma = 0;
    $num_voti = 0;
    for ($i=0; $i<count($voti); $i++) {
        if ($voti[$i] > 0 && $voti[$i] <= 10) {
            $somma += $voti[$i];
            $num_voti++;
        }
        
    }
    echo "La somma dei voti è: ". $somma;
    echo "<br/> Il numero dei voti validi è: " . $num_voti;
    $media= $somma / $num_voti;
    echo "<br/>La media dei voti è: ". $media;

    $numero =45;
    $valori=[10, 25, 45, 32, 78, 17, 15];
    $a=0;
    $trovato=false;
    while ($a<count($valori)) {
        if ($valori[$a] == $numero) {
            $trovato=true;
        }
        $a++;
    }
    if ($trovato) {
        echo "<br/>Il numero: ".$numero ; echo "\nè stato trovato";
    } else {
        echo "<br/>Il numero: ".$numero ; echo "\nnon è stato trovato";
    }
    /**Sintassi del ciclo do-while 
     * do {
     *  istruzione;
     * } while (condizione);
    */
?>