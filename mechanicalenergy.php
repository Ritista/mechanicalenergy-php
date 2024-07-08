<html>
<head>
<title>php program for mechanical energy</title>
</head>
<body>
<form method ="post">
<table border="0">
<tr>
<td><input type ="text" name="num1" value="" placeholder="enter a value"/></td>
</tr>
<tr>
<td><input type ="text" name ="num2" value="" placeholder="enter b value"/></td>
</tr>
<tr>
<td><input type ="text" name ="num3" value="" placeholder="enter c value"/></td>
</tr>
<tr>
<td><input type ="submit" name="submit" value="submit"/></td>
</tr>
</table>
</form>
<?php
if (isset($_POST["submit"]))
{
    $m=$_POST['num1'];
    $h=$_POST['num2'];
    $v=$_POST['num3'];
    $p=$m*9.8*$v*$v;
    $k=0.5*$m*$v*$v;
    $me=$p+$k;
    echo "potential energy=".$p;
    echo "kinetic energy=".$k;
    echo "mechanical energy=".$me;
    return 0;
}
?>
</body>
</html>
 
