<?php
session_start();

if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = ['-','-','-','-','-','-','-','-','-'];
    $_SESSION['current'] = 'X';
} 

if (isset($_POST['cell'])) {
    $_SESSION['board'][$_POST['cell']] = $_SESSION['current'];
    $_SESSION['current'] = ($_SESSION['current'] == 'X' ? 'O' : 'X');
}

$winning_combinations = [
    [0, 1, 2], [3, 4, 5], [6, 7, 8],
    [0, 3, 6], [1, 4, 7], [2, 5, 8],
    [0, 4, 8], [2, 4, 6]
];

foreach ($winning_combinations as $combination) {
    if ($_SESSION['board'][$combination[0]] != '-' &&
        $_SESSION['board'][$combination[0]] == $_SESSION['board'][$combination[1]] &&
        $_SESSION['board'][$combination[1]] == $_SESSION['board'][$combination[2]]) {
        echo $_SESSION['board'][$combination[0]]." a gagné<br>";
        $_SESSION['board'] = ['-','-','-','-','-','-','-','-','-'];
        break;
    }
}

if (!in_array('-', $_SESSION['board'])) {
    echo "Match nul<br>";
    $_SESSION['board'] = ['-','-','-','-','-','-','-','-','-'];
}

if (isset($_POST['reset'])) {
    $_SESSION['board'] = ['-','-','-','-','-','-','-','-','-'];
}
?>

<!DOCTYPE html>
<html>
<body>
<form method="post">
    <table>
        <?php for ($i=0; $i<3; $i++): ?>
            <tr>
                <?php for ($j=0; $j<3; $j++): ?>
                    <td>
                        <button type="submit" name="cell" value="<?php echo $i*3+$j; ?>">
                            <?php echo $_SESSION['board'][$i*3+$j]; ?>
                        </button>
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>
    <button type="submit" name="reset">Réinitialiser la partie</button>
</form>
</body>
</html>
