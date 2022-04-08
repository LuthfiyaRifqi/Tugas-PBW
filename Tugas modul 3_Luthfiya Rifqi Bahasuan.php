<?php
//no 1
$huruf = "A";
if (($huruf == "A") || ($huruf == "I") || ($huruf == "U") || ($huruf == "E") ||
($huruf == "O"))
{
echo "$huruf Termasuk huruf vokal"."<br>";
}
else
{
echo "$huruf Tidak termasuk huruf vokal"."<br>";
}
echo "<br>"; 

//no 2
$input = -10;

if($input < 0)
{
	echo "Bilangan $input adalah bilangan Negatif"."<br>";
}
	elseif($input > 0){
	echo "Bilangan $input adalah bilangan Positif"."<br>";
}
	else
{
	echo "Bilangan $input adalah netral";
}
echo "<br>"; 

//no 3
function hari(){
	$hari = date ("2");
	switch($hari){
		case '1':
			$hari = "Minggu";
		break;

		case '2':			
			$hari = "Senin";
		break;
 
		case '3':
			$hari = "Selasa";
		break;
 
		case '4':
			$hari = "Rabu";
		break;
 
		case '5':
			$hari = "Kamis";
		break;
 
		case '6':
			$hari = "Jumat";
		break;
 
		case '7':
			$hari = "Sabtu";
		break;
		
		default:
			$hari = "Tidak di ketahui";		
		break;
	}
	return $hari ;
}
echo "Hari ini adalah ". hari();
echo "<br>"; 

//no. 4

 $mobil1 = array("toyota","mitsubishi","tesla","honda");
 $mobil2 = array ("satu"=>"toyota", "dua"=> "mitsubishi", "tiga"=> "tesla", "empat" => "honda");

// a.
echo "<br>";
$i = 0;
    for($i=0;$i<=3;$i++)
    {
        echo $mobil1[$i] . "<br>";
    }

echo "<br>"; 

$i = 0;
    while($i<=3)
    {
        echo "$mobil1[$i] <br>";
        $i++;
    }

echo "<br>"; 

//b.
    foreach($mobil2 as $key=>$value)
    {
        echo $key . " : " . $value . "<br>";
    }
?>