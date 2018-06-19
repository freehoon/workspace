<?php
require_once 'application/views/template/header.php';
?>

<h1> board index page </h1>
<?php
foreach ($list as $item) {
?>
    <h3>제목 : <?php echo $item->post_title;?></h3>
<?php
}
?>

<?php
require_once 'application/views/template/footer.php';
?>
