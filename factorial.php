<html>
<body>
<form method="post">
enter a no:<input type="number" name="t1" required><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
function fact($f)
{

if($f==0)
{
return 1;
}
else
{
return $f*fact($f-1);
}
}
if(isset($_POST['submit']))
{
$f = $_POST['t1'];
echo "factorial of " .$f." is  " .fact($f);
}
?>
</body>
</html>