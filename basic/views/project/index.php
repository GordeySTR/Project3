<h1>TEST2</h1>

<?php 
//print_r($products);

foreach ($products as $p){
    echo $p->name.'<br>';
    echo $p->price.'<br>';
}

?>