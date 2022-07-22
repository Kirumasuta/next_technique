<main>
    <img src="../../images/tg.jpg">
    <?php session_start();
    if (isset($_SESSION['name'])){
        echo '<img src="../../images/frame.png">';
    }?>

</main>