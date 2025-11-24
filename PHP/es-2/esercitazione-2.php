<?php
/**ES-1
 * Dato un insieme di valori, trovare il più alto */
$valori=[1, 3, 5, 2, 5, 3, 9, 4, 7];
$alto=0;
for ($i=0; $i<count($valori); $i++) {
    if ($valori[$i] > $alto) {
        $alto=$valori[$i];
    }
}
?>
<div>
    <h2>Es-1</h2>
    <p>Il valore più alto è: <strong><?php echo $alto;?></strong></p>
</div>
<?php 
/**ES-2
 * Stampa tutti gli elementi, finché l'elemento corrente è inferiore a 15 */
$valori=[12, 13, 5, 12, 15, 3, 19, 4, 17];
$i=0;
?>
<div>
    <h2>Es-2</h2>
</div>
<?php
while ($valori[$i]<15 && $i<count($valori)) {
    ?>
    <div>
        <p> <?php echo $valori[$i] ; ?> </p>
    </div>
    <?php
    $i++;
}
?>
<?php 
/**
 * ES-3
 * Stampa il nome di tutte le persone maggiorenni 
 * Stampa la media dell'eta (compresa i minorenni)
 */
$persone = [
    array(
        "nome" => "Mario",
        "eta" => 19
    ),
    array(
        "nome" => "Lucia",
        "eta" => 14
    ),
    array(
        "nome" => "Rosa",
        "eta" => 21
    ),
    array(
        "nome" => "Francesco",
        "eta" => 24
    ),
    array(
        "nome" => "Giuseppe",
        "eta" => 16
    ),
    array(
        "nome" => "Marta",
        "eta" => 22
    ),  
];
$somma=0;
$num=0;
/*
for ($i=0; $i < count($persone); $i++) {
    if ($persone[$i]["eta"] >= 18) { 
        echo $persone[$i]["nome"];
        echo "<br/>";
    }
    $somma+= $persone[$i]["eta"];
    $num++;
    $i++;
}
$media= $somma / $num;
echo "<br/>La media è: ".$media;
*/
foreach ($persone as $persona) {
    if ($persona["eta"] >= 18) {
        echo "<li>" .$persona["nome"]."</li>";
    }
    $somma += $persona["eta"];
    $num++;
}
$media= $somma / $num;
echo "<br/>La media è: ".$media;

/**
 * ES-4
 * Data l'eta di una persona, ritorna se può votare guidare il 125cc */
/**
 * vedere se è può guidare il 125cc
 * @param int $eta l'età della persona
 * @param bool vero se può, falso il contrario
 */
function può_guidare_125($eta) {
    if ($eta >= 16) 
        return true;

    return false;
}

/**
 * ES-5
 * Dato un numero, ritorna se è divisibile per 3
 */
/**
 * Numero divisibile per 3
 * @param int $numero il numero in ingresso
 * @param bool vero se è divisibile, altrimenti falso
 */
function divisione_3($numero) {
    if (($numero % 3) == 0) 
        return true;

    return false; 
}

/**
 * ES-6
 * Dato un numero, ritornalo in formato EURO (€ 10.00)
 */
/**
 * Trasformare in formato euro
 * @param int $valore Numero da trasformare
 * @param float ritorno del valore trasformato (€ 10.00)
 */
function formato_euro($valore) {
    return "€ ".number_format($valore, 2, ".", "'");
}
echo "<br/>";
$costo = 123000.5;
echo formato_euro($costo);