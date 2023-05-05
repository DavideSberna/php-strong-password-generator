<?php
include './activity/function.php';
if(!empty($_GET['password'])){
    $realPass = prova($_GET['password']);    
} else{
    $realPass = '';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
</head>
<body>
    <header></header>

    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <input type="number" name="password">
        <button type="submit">Try</button>
        </form>
    </main>
    <?php echo $realPass?>


    <footer></footer>
    
</body>
</html>