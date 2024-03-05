<?php
// code php here
$x = 10; // number string boolean array object
if($x > 5){
    echo "<h1>Hello age > 5</h1>";
}else{
    echo "<h1>Hello age < 5</h1>";
}
$menu = ["Phở bò","Phở gà","Hủ tiếu","Mì xào"];
?>
<ol>
<?php for($i=0;$i< count($menu);$i++){ ?>
    <li><?php echo $menu[$i];?> </li>
<?php } ?>
</ol>