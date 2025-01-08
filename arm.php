<html>
<body>
<form method="post">
enter a no:
<input type="number" name="number" required><br>
<input type="submit" name="submit" value="submit">
</form>
<?php
if(isset($_POST['submit']))
{
$num=$_POST['number'];
$temp=$num;
$sum=0;
while($temp!=0)
{
$rem=$temp%10;
$sum+=$rem*$rem*$rem;
$temp=(int)($temp/10);
}
if($num==$sum)
{
echo $num."is an armstrong number";
}
else
{
echo $num. "is not an armstrong number";
}
}
?>
</body></html>