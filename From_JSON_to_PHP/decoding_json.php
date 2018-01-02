<?php 
require_once 'functions.php'
?>

<!DOCTYPE html>
<html lang="en">

<?php
echo '<p>'."We are in the JSON section".'</p>';
$booksJson = file_get_contents('books.json');
$books = json_decode($booksJson, true);
echo '<p>'."Processed JSON and converted to an array".'</p>';
?>

<?php 
echo '<p>'."Let's go to the loop".'</p>';
foreach ($books as $book): 
echo '<p>'."We are within the foreach".'</p>';
?>
<li>
<a href="?title=<?php echo $book['title']; ?>">
<?php echo printableTitle($book); ?>
</a>
</li>
<?php 
endforeach; 
echo '<p>'."We're out of the loop. We're finished :-)".'</p>';

?>
