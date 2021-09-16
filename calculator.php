<html>
<head>
<style>
table td,th
{
border:1px solid black;
width:40%;
text-align:left;
background-color:pink;
}
table{margin:auto;}
input,p{text-align:right;}
</style>
</head>

<body>
<form action="" method="post">
<table>
<caption><h2>SIMPLE CALCULATOR</h2></caption>
<tr>
<td>first number:</td> <td><input type="text"name="num1"/></td>
<td rowspan="2"><input type="submit" name="submit" value="calculate"/></td>
</tr>

<tr>
<td>Second number:</td>
<td><input type="text" name="num2"/></td>
</tr>

</form>

<?php
if(isset($_POST['submit']))
{
$num1=$_POST['num1'];
$num2=$_POST['num2'];
if(is_numeric($num1) and is_numeric($num2))
{
echo"<tr><td>addition:     </td><td> <p>".($num1+$num2)."</p></td>";
echo"<tr><td>subtraction:  </td><td> <p>".($num1-$num2)."</p></td>";
echo"<tr><td>multiplication:</td><td> <p>".($num1*$num2)."</p></td>";
echo"<tr><td>division:      </td><td> <p>".($num1/$num2)."</p></td>";
echo"</table>";
  }
}
?>

</body>
</html>