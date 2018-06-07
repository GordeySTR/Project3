<h1>TEST2</h1>

<?php 
//print_r($products);

foreach ($products as $p){
    echo "<img src='../../catalog/$p->img_src'>".'<br>';
    echo $p->name.'<br>';
    echo $p->price.'<br>';
}

?>