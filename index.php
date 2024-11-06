<!-- 1 -->
<?php
$elzeroCourses = "Elzero Courses"

  ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content=<?php echo $elzeroCourses ?>>
  <title>Welcome To <?php echo $elzeroCourses ?></title>
</head>

<body>
  <h1><?php echo $elzeroCourses ?></h1>
  <p>Here In <?php echo $elzeroCourses ?> We Provide Front-End And Back-End Courses</p>
  <hr>
  <div><?php echo $elzeroCourses ?> Is The What You Need.</div>
  <footer>All Right Reserved To <?php echo $elzeroCourses ?></footer>
</body>

</html>

<!-- 2 -->

<!-- 
المطلوب طباعة كلمة Web بخمس طرق مختلفة بواسطة ما تعلمته
الخمس طرق يكونوا بواسطة Echo فقط
-->
<?php
$name = "elzero";
$$name = "Web";
echo 'Web';
echo '<br>';
echo $$name;
echo '<br>';
echo $elzero;
echo '<br>';
echo "$elzero";
echo '<br>';
echo ${$name};
echo '<br>';
echo ${"elzero"};
echo '<br>';
?>


<!-- 3 -->
<?php
$a = 200;
$b =& $a;
$a = 100;

echo $b; // 100
echo "<br />"; // 100
?>

<!-- 4 -->

<!--
  Needed this output
  "C:/xampp/htdocs"
  "localhost"
  "C:\WINDOWS"
  "C:/xampp/apache/bin/openssl.cnf" 
  -->


<?php

echo $_SERVER['DOCUMENT_ROOT'];
echo "<br />";
echo $_SERVER['SERVER_NAME'];
echo "<br />";
echo $_SERVER['SYSTEM_ROOT'];
echo "<br />";

?>

<!-- 5 -->
<!-- 
إنشيء Multiple Lines Comment
اكتب بداخله 10 كلمات من الكلمات المحجوزة في اللغة والتي لا يمكن إستخدمها في برمجياتك
-->

<?php
/**
 * if
 * else
 * while
 * clone
 * for
 * break
 * continue
 * switch
 * echo 
 * print
 * print_r
 */
?>

<!-- 6 -->


<?php
// needed output
// "60"
// "C:\xampp\htdocs\elzero\index.php"
// "C:\xampp\htdocs\elzero"

echo __LINE__;
echo "<br />";
echo __FILE__;
echo "<br />";
echo __DIR__;
echo "<br />";

?>