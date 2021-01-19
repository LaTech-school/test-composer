<?php 

include_once __DIR__ ."/../vendor/autoload.php";

use Cocur\Slugify\Slugify;
use \Mon\Super\Projet\PHP\Test;




$fruits_str = "          Pommes vertes         ,         Poires       , Bananes            ";
// $fruits_arr = explode(",", $fruits_str);

// foreach ($fruits_arr as $key => $value)
// {
//     $fruits_arr[ $key ] = trim($value);
// }

$fruits_arr = xtrim(",", $fruits_str);
?>

<?php 
$test = new Test;
$test->isCool();
?>

<?= (new Test)->isCool() ?>

<hr>
<hr>
<hr>
<hr>


<pre><?php print_r($fruits_str) ?></pre>
<hr>
<pre><?php print_r($fruits_arr) ?></pre>

<?php foreach($fruits_arr as $fruit): ?>
<pre><?= $fruit ?></pre>
<?php endforeach ?>

<hr>

<?php 
$original = "Aujourd'hui, dernier jour pour Trump :-D";
$slugify = new Slugify();
$slug = $slugify->slugify($original);

?>
<div>Original : <?= $original ?></div>
<div>Slug souhaité : aujourd-hui-dernier-jour-pour-trump</div>
<div>Slug final : <?= $slug ?></div>
