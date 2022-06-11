<?php
include_once('classes/Page.php');
session_start();
if(isset($_REQUEST['calculate'])){
    $_SESSION['k'] = array(
        $_REQUEST['k'],
        $_SESSION['k'][0],
        $_SESSION['k'][1],
        $_SESSION['k'][2],
        $_SESSION['k'][3]
    );
    $_SESSION['k_result'] = array(
        calculate($_REQUEST['k']),
        $_SESSION['k_result'][0],
        $_SESSION['k_result'][1],
        $_SESSION['k_result'][2],
        $_SESSION['k_result'][3]
    );
    echo calculate($_REQUEST['k']);
}
function display_calc()
{
    echo "Kalkulator dla ciągu geometrycznego a_k = 1 * (k) ^ (k-1)";
?>
    <form method="post" action="index.php?page=calc">
        <table>
            <tr>
                <td><label for="k">Wartość k:</label></td>
                <td><input required type="text" name="k" id="k" />
            </tr>
            <tr>
                <td><input type="submit" id="submit" value="wylicz k" name="calculate" /></td>
            </tr>
        </table>
    </form>
    <form method="post" action="index.php?page=calc">
        <input type="submit" id="submit" value="Historia" name="show_history" />
    </form>
    
    <?php
    if(isset($_REQUEST['show_history'])){
        echo "5 ostatnich obliczeń wartości k:<br>";
        foreach( $_SESSION['k_result'] as $k){
            echo "$k <br>";
        }
    }
    echo "5 ostatnich wprowadzonych wartości k:<br>";
        foreach( $_SESSION['k'] as $k){
            echo "$k <br>";
        }
}

function calculate($k){
    return 1*pow($k,$k-1);
}
