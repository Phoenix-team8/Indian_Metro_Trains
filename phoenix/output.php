<?php 
$conn = mysqli_connect('localhost','root','','metro');


$source='g';
$destination='a';
if($source == 'a' or $destination=='a'){
$query = "Select * from a1";
$result = mysqli_query($conn,$query);
$data= array();
$a = array();
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $f) {
 	 $a=$f;
 }
 $pm = 9;
 $mp = 16;
 $j=0;
 $pos = array();
 $sval = array(); 
 while ($pm <= $mp){
 	if (array_search($pm, $a)) {
 		$pos[] = array_search($pm, $a);
 	}
 $pm=$pm+1;
 }
//  if ($destination=='b'){
//  	execute2($pos3,$b,$a);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute2($pos6,$c,$a);
//  }
//  elseif ($destination=='d') {
//  	# code...
//  	execute2($pos9,$d,$a);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute2($pos12,$e,$a);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute2($pos15,$f1,$a);
//  }
//  elseif ($destination=='g') {
//  	execute2($pos18,$g,$a);
//  	# code...
//  }
 
#a2 table...............

$query1 = "Select * from a2";
$result1 = mysqli_query($conn,$query1);
$data1= array();
$a1 = array();
while ($row = mysqli_fetch_array($result1)) {
 	$data1[]=$row;
 }
 foreach ($data1 as $f1) {
 	 $a1=$f1;
 }
 $pm1 = 8;
 $mp1 = 16;
 $j=0;
 $pos1 = array();
 $sval1 = array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $a1)) {
 		$pos1[] = array_search($pm1, $a1);
 	}
 $pm1=$pm1+1;
 }
//  if ($destination=='b'){
//  	execute1($pos4,$b1,$a1);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute1($pos7,$c1,$a1);
//  }
//  elseif ($destination=='d') {
//  	# code...
//  	execute1($pos10,$d1,$a1);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute1($pos13,$e1,$a1);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute1($pos16,$f2,$a1);
//  }
//  elseif ($destination=='g') {
//  	execute1($pos19,$g1,$a1);
//  	# code...
//  }

 #a3...........

 $query2 = "Select * from a3";
$result2 = mysqli_query($conn,$query2);
$data2= array();
$a2 = array();
while ($row = mysqli_fetch_array($result2)) {
 	$data2[]=$row;
 }
 foreach ($data2 as $f2) {
 	 $a2=$f2;
 }
$pm2 = 8;
 $mp2 = 10;
 $j=0;
 $pos2 = array();
 $sval2 = array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $a2)) {
 		$pos2[] = array_search($pm1, $a2);
 	}
 $pm2=$pm2+1;
 }
//  if ($destination=='b'){
//  	execute($pos5,$b2,$a2);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute($pos8,$c2,$a2);
//  }
//  elseif ($destination=='d') {
//  	# code...
//  	execute($pos11,$d2,$a2);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute($pos14,$e2,$a2);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute($pos17,$f3,$a2);
//  }
//  elseif ($destination=='g') {
//  	execute($pos20,$g2,$a2);
//  	# code...
//  }
 
}
 #b1...........
if($source == 'b' or $destination =='b'){
$query = "Select * from b1";
$result = mysqli_query($conn,$query);
$data= array();
$b = array();
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $f) {
 	 $b=$f;
 }
 $pm = 8;
 $mp = 16;
 $j=0;
 $pos3 = array();
 $sval = array(); 
 while ($pm <= $mp){
 	if (array_search($pm, $b)) {
 		$pos3[] = array_search($pm, $b);
 	}
 $pm=$pm+1;
 }
//  if ($destination=='a'){
//  	execute2($pos,$a,$b);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute2($pos6,$c,$b);
//  }
//  elseif ($destination=='d') {
//  	# code...
//  	execute2($pos9,$d,$c);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute2($pos12,$e,$c);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute2($pos15,$f1,$c);
//  }
//  elseif ($destination=='g') {
//  	execute2($pos18,$g,$c);
//  	# code...
//  }
//  #b2......

$query1 = "Select * from b2";
$result1 = mysqli_query($conn,$query1);
$data1= array();
$b1 = array();
while ($row = mysqli_fetch_array($result1)) {
 	$data1[]=$row;
 }
 foreach ($data1 as $f1) {
 	 $b1=$f1;
 }
 $pm1 = 8;
 $mp1 = 16;
 $j=0;
 $pos4 = array();
 $sval1 = array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $b1)) {
 		$pos4[] = array_search($pm1, $b1);
 	}
 $pm1=$pm1+1;
 }
// if ($destination=='a'){
//  	execute1($pos1,$a1,$b1);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute1($pos7,$c1,$b1);
//  }
//  elseif ($destination=='d') {
//  	# code...
//  	execute1($pos10,$d1,$b1);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute1($pos13,$e1,$b1);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute1($pos16,$f2,$b1);
//  }
//  elseif ($destination=='g') {
//  	execute1($pos19,$g1,$b1);
//  	# code...
//  }

 #b3.............

$query2 = "Select * from b3";
$result2 = mysqli_query($conn,$query2);
$data2= array();
$b2 = array();
while ($row = mysqli_fetch_array($result2)) {
 	$data2[]=$row;
 }
 foreach ($data2 as $f2) {
 	 $b2=$f2;
 }
 $pm2 = 8;
 $mp2 = 16;
 $j=0;
 $pos5 = array();
 $sval = array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $b2)) {
 		$pos5[] = array_search($pm2, $b2);
 	}
 $pm2=$pm2+1;
 }
//  if ($destination=='a'){
//  	execute($pos2,$a2,$b2);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute($pos8,$c2,$b2);
//  }
//  elseif ($destination=='d') {
//  	# code...
//  	execute($pos11,$d2,$b2);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute($pos14,$e2,$b2);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute($pos17,$f3,$b2);
//  }
//  elseif ($destination=='g') {
//  	execute($pos20,$g2,$b2);
// }
}
#c1........
if($source=='c' or $destination=='c'){
$query = "Select * from c1";
$result = mysqli_query($conn,$query);
$data= array();
$c = array();
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $f) {
 	 $c=$f;
 }
 $pm = 8;
 $mp = 16;
 $j=0;
 $pos6 = array();
 $sval = array(); 
 while ($pm <= $mp){
 	if (array_search($pm, $c)) {
 		$pos6[] = array_search($pm, $c);
 	}
 $pm=$pm+1;
 }
//  if ($destination=='a'){
//  	execute2($pos,$a,$c);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute2($pos3,$b,$c);
//  }
//  elseif ($destination=='d') {
//  	# code...
//  	execute2($pos9,$d,$c);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute2($pos12,$e,$c);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute2($pos15,$f1,$c);
//  }
//  elseif ($destination=='g') {
//  	execute2($pos18,$g,$c);
//  	# code...
//  }
 #c2.............

$query1 = "Select * from c2";
$result1 = mysqli_query($conn,$query1);
$data1= array();
$c1 = array();
while ($row = mysqli_fetch_array($result1)) {
 	$data1[]=$row;
 }
 foreach ($data1 as $f1) {
 	 $c1=$f1;
 }
 $pm1 = 8;
 $mp1 = 16;
 $j=0;
 $pos7 = array();
 $sval1 = array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $c1)) {
 		$pos7[] = array_search($pm1, $c1);
 	}
 $pm1=$pm1+1;
 }
//  if ($destination=='a'){
//  	execute1($pos1,$a1,$c1);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute1($pos4,$b1,$c1);
//  }
//  elseif ($destination=='d') {
//  	# code...
//  	execute1($pos10,$d1,$c1);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute1($pos13,$e1,$c1);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute1($pos16,$f2,$c1);
//  }
//  elseif ($destination=='g') {
//  	execute1($pos19,$g1,$c1);
//  	# code...
//  }
 #c3...............

$query2 = "Select * from c3";
$result2 = mysqli_query($conn,$query2);
$data2= array();
$c2 = array();
while ($row = mysqli_fetch_array($result2)) {
 	$data2[]=$row;
 }
 foreach ($data2 as $f2) {
 	 $c2=$f2;
 }
 $pm2 = 8;
 $mp2 = 16;
 $j=0;
 $pos8 = array();
 $sval2 = array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $c2)) {
 		$pos8[] = array_search($pm2, $c2);
 	}
 $pm2=$pm2+1;
 }
//  if ($destination=='a'){
//  	execute($pos2,$a2,$c2);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute($pos5,$b2,$c2);
//  }
//  elseif ($destination=='d') {
//  	# code...
//  	execute($pos11,$d2,$c2);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute($pos14,$e2,$c2);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute($pos17,$f3,$c2);
//  }
//  elseif ($destination=='g') {
//  	execute($pos20,$g2,$c2);
// }
}
#d1.................
if($source=='d' or $destination=='d'){
$query = "Select * from d1";
$result = mysqli_query($conn,$query);
$data= array();
$d = array();
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $f) {
 	 $d=$f;
 }
 $pm = 8;
 $mp = 16;
 $j=0;
 $pos9 = array();
 $sval = array(); 
 while ($pm <= $mp){
 	if (array_search($pm, $d)) {
 		$pos9[] = array_search($pm, $d);
 	}
 $pm=$pm+1;
 }
// if ($destination=='a'){
//  	execute2($pos,$a,$d);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute2($pos3,$b,$d);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute2($pos6,$c,$d);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute2($pos12,$e,$d);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute2($pos15,$f1,$d);
//  }
//  elseif ($destination=='g') {
//  	execute2($pos18,$g,$d);
//  	# code...
//  }
 #d2...........

$query1 = "Select * from d2";
$result1 = mysqli_query($conn,$query1);
$data1= array();
$d1 = array();
while ($row = mysqli_fetch_array($result1)) {
 	$data1[]=$row;
 }
 foreach ($data1 as $f1) {
 	 $d1=$f1;
 }
 $pm1 = 8;
 $mp1 = 16;
 $j=0;
 $pos10 = array();
 $sval1 = array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $d1)) {
 		$pos10[] = array_search($pm1, $d1);
 	}
 $pm1=$pm1+1;
 }
//  if ($destination=='a'){
//  	execute1($pos1,$a1,$d1);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute1($pos4,$b1,$d1);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute1($pos7,$c1,$d1);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute1($pos13,$e1,$d1);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute1($pos16,$f2,$d1);
//  }
//  elseif ($destination=='g') {
//  	execute1($pos19,$g1,$d1);
//  	# code...
//  }

 #d3.......

$query2 = "Select * from d3";
$result2 = mysqli_query($conn,$query2);
$data2= array();
$d2 = array();
while ($row = mysqli_fetch_array($result2)) {
 	$data2[]=$row;
 }
 foreach ($data2 as $f2) {
 	 $d2=$f2;
 }
 $pm2 = 8;
 $mp2 = 16;
 $j=0;
 $pos11 = array();
 $sval2 = array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $d2)) {
 		$pos11[] = array_search($pm2, $d2);
 	}
 $pm2=$pm2+1;
 }
//  if ($destination=='a'){
//  	execute($pos2,$a2,$d2);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute($pos5,$b2,$d2);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute($pos8,$c2,$d2);
//  }
// elseif ($destination=='e') {
//  	# code...
//  	execute($pos14,$e2,$d2);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute($pos17,$f3,$d2);
//  }
//  elseif ($destination=='g') {
//  	execute($pos20,$g2,$d2);
// }
}
#e1............
if($source=='e' or $destination=='e'){
$query = "Select * from e1";
$result = mysqli_query($conn,$query);
$data= array();
$e = array();
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $f) {
 	 $e=$f;
 }
 $pm = 8;
 $mp = 16;
 $j=0;
 $pos12 = array();
 $sval = array(); 
 while ($pm <= $mp){
 	if (array_search($pm, $e)) {
 		$pos12[] = array_search($pm, $e);
 	}
 $pm=$pm+1;
 }
// if ($destination=='a'){
//  	execute2($pos,$a,$e);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute2($pos3,$b,$e);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute2($pos6,$c,$e);
//  }
// elseif ($destination=='d') {
//  	# code...
//  	execute2($pos9,$d,$f);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute2($pos15,$f1,$e);
//  }
//  elseif ($destination=='g') {
//  	execute2($pos18,$g,$e);
//  	# code...
//  }
#e2............

$query1 = "Select * from e2";
$result1 = mysqli_query($conn,$query1);
$data1= array();
$e1 = array();
while ($row = mysqli_fetch_array($result1)) {
 	$data1[]=$row;
 }
 foreach ($data1 as $f1) {
 	 $e1=$f1;
 }
 $pm1 = 8;
 $mp1 = 16;
 $j=0;
 $pos13 = array();
 $sval1 = array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $e1)) {
 		$pos13[] = array_search($pm1, $e1);
 	}
 $pm1=$pm1+1;
 }
//  if ($destination=='a'){
//  	execute1($pos1,$a1,$e1);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute1($pos4,$b1,$e1);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute1($pos7,$c1,$e1);
//  }
// elseif ($destination=='d') {
//  	# code...
//  	execute1($pos10,$d1,$e1);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute1($pos16,$f2,$e1);
//  }
//  elseif ($destination=='g') {
//  	execute1($pos19,$g1,$e1);
//  	# code...
//  }
 #e3..............

$query2 = "Select * from e3";
$result2 = mysqli_query($conn,$query2);
$data2= array();
$e2 = array();
while ($row = mysqli_fetch_array($result2)) {
 	$data2[]=$row;
 }
 foreach ($data2 as $f2) {
 	 $e2=$f2;
 }
 $pm2 = 8;
 $mp2 = 16;
 $j=0;
 $pos14 = array();
 $sval2 = array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $e2)) {
 		$pos14[] = array_search($pm2, $e2);
 	}
 $pm2=$pm2+1;
 }
//  if ($destination=='a'){
//  	execute($pos2,$a2,$e2);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute($pos5,$b2,$e2);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute($pos8,$c2,$e2);
//  }
// elseif ($destination=='d') {
//  	# code...
//  	execute($pos11,$d2,$e2);
//  }
//  elseif ($destination=='f') {
//  	# code...
//  	execute($pos17,$f3,$e2);
//  }
//  elseif ($destination=='g') {
//  	execute($pos20,$g2,$e2);
// }
}
#f1.............
if ($source=='f' or $destination=='f'){
$query = "Select * from f1";
$result = mysqli_query($conn,$query);
$data= array();
$f1 = array();
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $h) {
 	 $f1=$h;
 }
 $pm = 8;
 $mp = 16;

 $pos15= array();
 while ($pm <= $mp){
 	if (array_search($pm, $f1)) {
 		$pos15[] = array_search($pm, $f1);
 	}
 $pm=$pm+1;
 }
//  if ($destination=='a'){
//  	execute($pos,$a,$f1);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute($pos3,$b,$f1);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute($pos6,$c,$f1);
//  }
// elseif ($destination=='d') {
//  	# code...
//  	execute($pos9,$d,$f1);
//  }
//  elseif ($destination=='e') {
//  	# code...
//  	execute($pos12,$e,$f1);
//  }
//  elseif ($destination=='g') {
//  	execute($pos18,$g,$f1);
//  	# code...
//  }
 #f2..........

$query1 = "Select * from f2";
$result1 = mysqli_query($conn,$query1);
$data1= array();
$f2 = array();
while ($row = mysqli_fetch_array($result1)) {
 	$data1[]=$row;
 }
 foreach ($data1 as $h1) {
 	 $f2=$h1;
 }
 $pm1 = 8;
 $mp1 = 16;
 $j=0;
 $pos16 = array();
 $sval1 = array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $f2)) {
 		$pos16[] = array_search($pm1, $f2);
 	}
 $pm1=$pm1+1;
 }
//  if ($destination=='a'){
//  	execute1($pos1,$a1,$f2);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute1($pos4,$b1,$f2);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute1($pos7,$c1,$f2);
//  }
// elseif ($destination=='d') {
//  	# code...
//  	execute1($pos10,$d1,$f2);
//  }
//  elseif ($destination=='e') {
//  	# code...
//  	execute1($pos13,$e1,$f2);
//  }
//  elseif ($destination=='g') {
//  	execute1($pos19,$g1,$f2);
//  	# code...
//  }
 #f3...........

$query2 = "Select * from f3";
$result2 = mysqli_query($conn,$query2);
$data2= array();
$f3 = array();
while ($row = mysqli_fetch_array($result2)) {
 	$data2[]=$row;
 }
 foreach ($data2 as $h2) {
 	 $f3=$h2;
 }
 $pm2 = 8;
 $mp2 = 16;
 $j=0;
 $pos17 = array();
 $sval2 = array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $f3)) {
 		$pos17[] = array_search($pm2, $f3);
 	}
 $pm2=$pm2+1;
 }
//  if ($destination=='a'){
//  	execute2($pos2,$a2,$f3);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute2($pos5,$b2,$f3);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute2($pos8,$c2,$f3);
//  }
// elseif ($destination=='d') {
//  	# code...
//  	execute2($pos11,$d2,$f3);
//  }
//  elseif ($destination=='e') {
//  	# code...
//  	execute2($pos14,$e2,$f3);
//  }
//  elseif ($destination=='g') {
//  	execute2($pos20,$g2,$f3);
//  	# code...
//  }
}
 
#g1...........
if($source=='g' or $destination=='g'){
$query = "Select * from g1";
$result = mysqli_query($conn,$query);
$data= array();
$g = array();
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $f) {
 	 $g=$f;
 }
 $pm = 8;
 $mp = 16;
 $j=0;
 $pos18 = array();
 $sval = array(); 
 while ($pm <= $mp){
 	if (array_search($pm, $g)) {
 		$pos18[] = array_search($pm, $g);
 	}
 $pm=$pm+1;
 }
//   if ($destination=='a'){
//  	execute2($pos,$a,$g);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute2($pos3,$b,$g);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute2($pos6,$c,$g);
//  }
// elseif ($destination=='d') {
//  	# code...
//  	execute2($pos9,$d,$g);
//  }
//  elseif ($destination=='e') {
//  	# code...
//  	execute2($pos12,$e,$g);
//  }
//  elseif ($destination=='f') {
//  	execute2($pos15,$f1,$g);
//  	# code...
//  }
 
 #g2..............

$query1 = "Select * from g2";
$result1 = mysqli_query($conn,$query1);
$data1= array();
$g1 = array();
while ($row = mysqli_fetch_array($result1)) {
 	$data1[]=$row;
 }
 foreach ($data1 as $f1) {
 	 $g1=$f1;
 }
 $pm1 = 8;
 $mp1 = 16;
 $j=0;
 $pos19 = array();
 $sval1 = array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $g)) {
 		$pos19[] = array_search($pm1, $g1);
 	}
 $pm1=$pm1+1;
}
//   if ($destination=='a'){
//  	execute1($pos1,$a1,$g1);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute1($pos1,$b1,$g1);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute1($pos7,$c1,$g1);
//  }
// elseif ($destination=='d') {
//  	# code...
//  	execute1($pos10,$d1,$g1);
//  }
//  elseif ($destination=='e') {
//  	# code...
//  	execute1($pos13,$e1,$g1);
//  }
//  elseif ($destination=='f') {
//  	execute1($pos16,$f2,$g1);
//  	# code...
//  }

 #g3............

$query2 = "Select * from g3";
$result2 = mysqli_query($conn,$query2);
$data2= array();
$g2 = array();
while ($row = mysqli_fetch_array($result2)) {
 	$data2[]=$row;
 }
 foreach ($data2 as $f2) {
 	 $g2=$f2;
 }
 $pm2 = 8;
 $mp2 = 18;
 $j=0;
 $pos20 = array();
 $sval2 = array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $g2)) {
 		$pos20[] = array_search($pm2, $g2);
 	}
 $pm2=$pm2+1;
 }

//  if ($destination=='a'){
//  	execute($pos2,$a2,$g2);
//  }
//  elseif ($destination=='b') {
//  	# code...
//  	execute($pos5,$b2,$g2);
//  }
//  elseif ($destination=='c') {
//  	# code...
//  	execute($pos8,$c2,$g2);
//  }
// elseif ($destination=='d') {
//  	# code...
//  	execute($pos11,$d2,$g2);
//  }
//  elseif ($destination=='e') {
//  	# code...
//  	execute($pos14,$e2,$g2);
//  }
//  elseif ($destination=='f') {
//  	execute($pos17,$f3,$g2);
//  	# code...
//  }
}
#addd.........................
$fv=retrieve($pos20,$g2);
print_r($fv);
echo "<br>";
print_r($pos);
echo "<br>";
$j=0;
$sval=array();
foreach ($pos20 as $key) {
	if($a2[$key]< $fv[$j]){
	$sval[]=($a2[$key]);
    }
    $j=$j+1;
}
print_r($sval);
echo "<br>";
$k=0;
$fvalue= array( );
foreach ($sval as $key) {
	$fvalue[] = array_search($key, $g2);
}
foreach ($fvalue as $key) {
	if($key==0){
		echo ("P");
	}
	elseif ($key==1) {
		echo ("M");
		
	}
	elseif ($key==2) {
		echo "V";
		
	}
	elseif ($key==3) {
		echo "K";
		
	}
	elseif ($key==4) {
		echo "X";
		
	}
	elseif ($key==5) {
		echo "Y";
		
	}
	elseif ($key==6) {
		echo "Z";
		
	}
}
function retrieve($pos,$ab){  
$val = array(); 
foreach ($pos as $v ) {
 	$val[]= $ab[$v];
 }
return $val ;
}
function retrieve1($pos,$ab){  
$val = array(); 
foreach ($pos as $v ) {
 	$val[]= $ab[$v];
 }
return $val ;
}
 ?>
