<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $size = $_REQUEST['size'];
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Sum of Two Dimensional Array</title>
</head>
<body>
<h2>Sum of Two Dimensional Array</h2>

<form action="action.php" method="post">
    <table border="1">
        <?php for ($i = 0; $i < $size; $i++): ?>
            <tr>
                <?php for ($j = 0; $j < $size; $j++): ?>
                    <td>
                        <input type="text" name="item-<?php echo $i . '-' . $j ?>" value="">
                    </td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
        <input type="hidden" name="size" value="<?php echo $size?>">
    </table>
    <button type="submit">Find Sum</button>
</form>

</body>
</html>









