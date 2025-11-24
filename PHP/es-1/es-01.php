<?php
    /**
     * Es 01
     * Dati due numeri, stampare nell'ordine:
     *  - Somma
     *  - Differenza
     *  - Moltiplicazione
     *  - Divisione
     */
    $a = 12;
    $b = 24;
    $somma = $a + $b ;
    $differenza = $a - $b ;
    $moltiplicazione = $a * $b ;
    $divisione = $a / $b ;
?> 
    <div>
        <h2>Esercizio-1</h2>
        <ul>
            <li><strong>Somma:</strong><?php echo $somma; ?></li> 
            <li><strong>Differenza:</strong><?php echo $differenza; ?></li> 
            <li><strong>Moltiplicazione:</strong><?php echo $moltiplicazione; ?></li> 
            <li><strong>Divisione:</strong><?php echo $divisione; ?></li> 
        </ul>
    </div>
<?php
    /**
     * Es 02
     * Data una parola, verificare se è uguale
     * a "casa"
     */
    $parola = "albero";
?> 
    <div>
        <h2>Esercizio-2</h2>
        <p> <?php if ($parola === "casa") {
        echo "<br/>La parola è uguale ad 'casa'<br/>" ;
    } else {
        echo "<br/>La parola è diversa da 'casa'<br/>" ;
    } ?> </p>
    </div>
    
<?php
    /** 
     * Es 03
     * Dato due valori numerici, verificarne l'uguaglianza
     */
    $c = "145";
    $d = 145;
?> 
    <div>
        <h2>Esercizio-3</h2>
        <p> <?php if ($c === $d) {
        echo "<br/>Le due parole sono uguali<br/>" ;
    } else {
        echo "<br/>Le due parole sono diverse<br/>" ;
    }?> </p>
    </div>
    
<?php 
    /**
     * Es 04
     * Dato un voto stampare:
     * insufficiente se è da 0 a 5
     * sufficiente se è 6
     * buono se è 7 o 8 
     * ottimo se è 9
     * eccellente se è maggiore di 8
     */
    $voto=6;
?>
    <div>
        <h2>Esercizio-4</h2>
        <p>Il tuo voto è:
        <span> <strong>  <?php 
        if ($voto <= 5 && $voto >= 0) {
            echo "Insufficiente";
        } elseif ($voto == 6) {
            echo "Sufficiente";
        } elseif ($voto == 7 || $voto == 8) {
            echo "Buono";
        } elseif ($voto == 9) {
            echo "Ottimo";
        } elseif ($voto <11 && $voto == 10) {
            echo "Eccellente";
        }
        ?></strong> </span></p>
    </div>
<?php
    /**Caso con lo switch
     * switch ($voto) {
        case 0:
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "Insufficiente";
            break;
        case 6:
            echo "Sufficiente";
            break;
        case 7:
        case 8:
            echo "Buono";
            break;
        case 9:
            echo "Ottimo";
            break;
        case 10:
            echo "Eccellente";
            break;
        default:
            echo "voto non valido";
     */

?>