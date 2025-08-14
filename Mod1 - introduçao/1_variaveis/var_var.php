<?php
$a = 'hello';
$$a = "world";

echo "$a {$$a}";
print "<br>";
echo "$a $hello";