<!--calculator 2 example-->

<form method="post">
<table border="2">
<tr>
<th>Enter Number:1</th>
<td><input type="number" name="txtnum1"></td>
</tr>

<tr>
<th>Enter Number:2</th>
<td><input type="number" name="txtnum2"></td>
</tr>

<tr>
<th>Calculation :</th>
<td>
<input type="radio" name="btn_cal" value="+">+
<input type="radio" name="btn_cal" value="-">-
<input type="radio" name="btn_cal" value="*">*
<input type="radio" name="btn_cal" value="/">/
</td>
</tr>


<tr>
<th colspan="2"><input type="submit" name="btn_sub" value="calculate"></th>
</tr>
</table>
</form>

<?php
if(isset($_POST['btn_sub'])){
$cal=$_POST['btn_cal'];
if($cal=="+"){
	$num1=$_POST['txtnum1'];
	$num2=$_POST['txtnum2'];
	$num3=$num1+$num2;
	echo"Addition : ".$num3;	
}
elseif($cal=="-"){
    $num1=$_POST['txtnum1'];
	$num2=$_POST['txtnum2'];
	$num3=$num1-$num2;
	echo"Subtriction : ".$num3;	
}
elseif($cal=="*"){
    $num1=$_POST['txtnum1'];
	$num2=$_POST['txtnum2'];
	$num3=$num1*$num2;
	echo"Multipication : ".$num3;	
}
elseif($cal=="/"){
	$num1=$_POST['txtnum1'];
	$num2=$_POST['txtnum2'];
	$num3=$num1/$num2;
	echo"Division : ".$num3;
	
}
	
}

?>