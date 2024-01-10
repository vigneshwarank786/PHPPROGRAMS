<!-- <?php
$x='abc';
$$x=200;
echo $x."<br/>";
echo $$x."<br/>";
echo $abc;
?> -->



<?php
$name='Lion';
${$name}="Tiger";
${${$name}}="Jaguar";
echo $name."<br/>";
echo ${$name}."<br/>";
echo ${${$name}}."<br/>";
echo $Lion."<br/>";
echo $Tiger."<br/>"
?>
