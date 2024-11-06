<?php
echo (int) (15.2 + 14.7) + (10.5 + 10.5); // 50
echo "<br>";
echo gettype((int) (15.2 + 14.7) + (int) (10.5 + 10.5)); // Integer
echo "<br>";



// 100
echo gettype(100); // Method One
echo "<br>";
var_dump(100); // Method Two
echo "<br>";
var_export(100); // Method Three => Optional
echo "<br>";



echo "Hello \"Elzero\" \\\\ \"\"\" We Love \"\$\$PHP\"";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"
echo "<br>";


echo nl2br("We \n Love \n Elzero \n Web \n School");

// Needed Output
// We
// Love
// Elzero
// Web
// School
echo "<br>";

echo nl2br(<<<'nowDoc'
  Hello "'Elzero'"
  We Love $Programming$
  Languages Specially "PHP"
nowDoc);

echo "<br>";

// Needed Output
// 
// 
// 

echo "<br>";


$something = "Programming";

echo <<<code
    Hello \PHP\
    We Love $something
    code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
// Hello \PHP\ We Love Programming


echo "<br>";


echo (int) "Hello PHP" + 1;
echo '<br>';
echo (int) is_int("Hello PHP") + 1;
echo '<br>';
echo gettype((int) "Hello PHP");
echo '<br>';
echo gettype((int) is_int("Hello PHP"));
// Needed Output
// 1
// integer
echo '<br>';


$arr = [
  "Frontend" => [
    "html",
    "css",
    "JS" => [
      "VeuJs" => [
        2 => "v2",
        "v3"
      ],
      "reactJS",
      "Svelte"
    ]
  ],
  "Backend" => [
    "PHP",
    "MySQL",
    "Security"
  ],
  "Git",
  "Github",
  "Testing" => [
    "Unit Testing",
    "End To End",
    "Integration"
  ]
];

echo <<<Arr
<pre>
  . print_r($arr, true) .
</pre>
Arr;

echo '<pre>';
echo print_r($arr);
echo '</pre>';

echo '<br>';



