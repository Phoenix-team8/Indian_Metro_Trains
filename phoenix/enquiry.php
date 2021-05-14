<?php 
session_start();
$conn = mysqli_connect('localhost','root','','metro');
$source=$_POST['Source'];
$destination=$_POST['Destination'];
$st=$_POST['start_time'];
$et=$_POST['end_time'];
if (empty($source)) {
		header("Location: enq.php?error=Source Station is required");
	    exit();
	}else if(empty($destination)){
        header("Location: enq.php?error=Destination Station is required");
	    exit();
    }
    elseif (empty($st)) {
    	header("Location: enq.php?error=Start Time is required");
	    exit();
    }
    elseif (empty($et)) {
    	header("Location: enq.php?error=End Time is required");
	    exit();
    }
    elseif ($source == $destination) {
    	header("Location: enq.php?error=Invalid Input");
	    exit();
	}
	elseif ($st==$et) {
		header("Location: enq.php?error=Invalid Input");
	    exit();
	}

if($source == 'a' ){
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
 $pm =$_POST['start_time'] ;
 $mp =$_POST['end_time'];
 $j=0;
 $pos = array();
 $sval = array(); 
 $fvalue=array();
 $dp=0;
 while ($pm <= $mp){
 	if (array_search($pm, $a)) {
 		$pos[] = array_search($pm, $a);
 	}
 $pm=$pm+1;
 }
 foreach ($pos as $key ) {
 	  $fvalue[] = $a[$key];
 }
if(array_search(15, $fvalue)){
 $dp=1;
}
 foreach ($fvalue as $key) {
	$sval[] = array_search($key, $a);
}
day($sval,$a);

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
 $pm1 =$_POST['start_time'];
 $mp1 = $_POST['end_time'];
 $j=0;
 $pos1 = array();
 $sval1 = array();
 $fvalue1=array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $a1)) {
 		$pos1[] = array_search($pm1, $a1);
 	}
 $pm1=$pm1+1;
 }

 foreach ($pos1 as $key ) {
 	  $fvalue1[] = $a1[$key];
 }
 if($dp==1){
 $key = array_search(15, $fvalue1);
if (false !== $key) {
    unset($fvalue1[$key]);
}
}
 foreach ($fvalue1 as $key) {
	$sval1[] = array_search($key, $a1);
}
day1($sval1,$a1);

// foreach ($sval1 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$a1[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$a1[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$a1[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$a1[3]);
// 		echo ("<br>");
		
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$a1[4]);
// 		echo ("<br>");
		
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$a1[5]);
// 		echo ("<br>");
		
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$a1[6]);
// 		echo ("<br>");
// 	}
// }

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
$pm2 = $_POST['start_time'];
 $mp2 = $_POST['end_time'];
 $j=0;
 $pos2 = array();
 $sval2 = array();
 $fvalue2=array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $a2)) {
 		$pos2[] = array_search($pm2, $a2);
 	}
 $pm2=$pm2+1;
 }
foreach ($pos2 as $key ) {
 	  $fvalue2[] = $a2[$key];
 }
 if($dp==1){
 $key = array_search(15, $fvalue2);
if (false !== $key) {
    unset($fvalue2[$key]);
}
}
 foreach ($fvalue2 as $key) {
	$sval2[] = array_search($key, $a2);
}
day2($sval2,$a2);
if(array_search(15, $fvalue2)){

}
// foreach ($sval2 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$a2[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$a2[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$a2[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$a2[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$a2[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$a2[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$a2[6]);
// 		echo ("<br>");
// 	}
// }
}
 if($source == 'b'){
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
 $pm = $_POST['start_time'];
 $mp = $_POST['end_time'];
 $j=0;
 $pos3 = array();
 $sval = array(); 
 $fvalue=array();
 $dp=0;
 while ($pm <= $mp){
 	if (array_search($pm, $b)) {
 		$pos3[] = array_search($pm, $b);
 	}
 $pm=$pm+1;
 }
 if(array_search(15, $fvalue)){
 $dp=1;
}
 foreach ($pos3 as $key ) {
 	  $fvalue[] = $b[$key];
 }
 foreach ($fvalue as $key) {
	$sval[] = array_search($key, $b);
}
day($sval,$b);
// foreach ($sval as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$b[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$b[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$b[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$b[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$b[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$b[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$b[6]);
// 		echo ("<br>");
// 	}
// }
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
 $pm1 = $_POST['start_time'];
 $mp1 = $_POST['end_time'];
 $j=0;
 $pos4 = array();
 $sval1 = array();
 $fvalue1=array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $b1)) {
 		$pos4[] = array_search($pm1, $b1);
 	}
 $pm1=$pm1+1;
 }
 foreach ($pos4 as $key ) {
 	  $fvalue1[] = $b1[$key];
 }

 if($dp==1){
 $key = array_search(15, $fvalue1);
if (false !== $key) {
    unset($fvalue1[$key]);
}
}
if($dp==0 and array_search(15, $fvalue1)){
 $dp=1;
}
 foreach ($fvalue1 as $key) {
	$sval1[] = array_search($key, $b1);
}
day1($sval1,$b1);
// foreach ($sval1 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$b1[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$b1[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$b1[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$b1[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Train:".$b1[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$b1[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$b1[6]);
// 		echo ("<br>");
// 	}
// }

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
 $pm2 = $_POST['start_time'];
 $mp2 = $_POST['end_time'];
 $j=0;
 $pos5 = array();
 $sval2 = array(); 
 $fvalue2=array();
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $b2)) {
 		$pos5[] = array_search($pm2, $b2);
 	}
 $pm2=$pm2+1;
 }
foreach ($pos5 as $key ) {
 	  $fvalue2[] = $b2[$key];
 }
 if($dp==1){
 $key = array_search(15, $fvalue2);
if (false !== $key) {
    unset($fvalue2[$key]);
}
}
 foreach ($fvalue2 as $key) {
	$sval2[] = array_search($key, $b2);
}
day2($sval2,$b2);
// foreach ($sval2 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$b2[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$b2[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$b2[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$b2[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$b2[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$b2[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$b2[6]);
// 		echo ("<br>");
// 	}
// }
}
 if($source=='c'){
$query = "Select * from c1";
$result = mysqli_query($conn,$query);
$data= array();
$c = array();
$dp=0;
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $f) {
 	 $c=$f;
 }
 $pm = $_POST['start_time'];
 $mp = $_POST['end_time'];
 $j=0;
 $pos6 = array();
 $sval = array(); 
 $fvalue= array(); 
 while ($pm <= $mp){
 	if (array_search($pm, $c)) {
 		$pos6[] = array_search($pm, $c);
 	}
 $pm=$pm+1;
 }
 if(array_search(15, $fvalue)){
 $dp=1;
}
 foreach ($pos6 as $key ) {
 	  $fvalue[] = $c[$key];
 }

 foreach ($fvalue as $key) {
	$sval[] = array_search($key, $c);
}
day($sval,$c);
// foreach ($sval as $key) {
// 	if($key==0){
// 		echo ("Train P");
// 		echo (" Time:".$c[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$c[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$c[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$c[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$c[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$c[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Z";
// 		echo (" Time:".$c[6]);
// 		echo ("<br>");
// 	}
// }

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
 $pm1 = $_POST['start_time'];
 $mp1 = $_POST['end_time'];
 $j=0;
 $pos7 = array();
 $sval1 = array(); 
  $fvalue1= array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $c1)) {
 		$pos7[] = array_search($pm1, $c1);
 	}
 $pm1=$pm1+1;
 }
 foreach ($pos7 as $key ) {
 	  $fvalue1[] = $c1[$key];
 }
if($dp==1){
 $key = array_search(15, $fvalue1);
if (false !== $key) {
    unset($fvalue1[$key]);
}
}
if($dp==0 and array_search(15, $fvalue1)){
 $dp=1;
}
 foreach ($fvalue1 as $key) {
	$sval1[] = array_search($key, $c1);
}
day1($sval1,$c1);
// foreach ($sval as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$c1[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$c1[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$c1[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$c1[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$c1[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$c1[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$c1[6]);
// 		echo ("<br>");
// 	}
// }

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
 $pm2 = $_POST['start_time'];
 $mp2 = $_POST['end_time'];
 $j=0;
 $pos8 = array();
 $sval2 = array(); 
  $fvalue2= array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $c2)) {
 		$pos8[] = array_search($pm2, $c2);
 	}
 $pm2=$pm2+1;
 }
foreach ($pos8 as $key ) {
 	  $fvalue2[] = $c2[$key];
 }
 if($dp==1){
 $key = array_search(15, $fvalue2);
if (false !== $key) {
    unset($fvalue2[$key]);
}
}
 foreach ($fvalue2 as $key) {
	$sval2[] = array_search($key, $c2);
}
day2($sval2,$c2);
// foreach ($sval2 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$c2[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$c2[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$c2[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$c2[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$c2[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$c2[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$c2[6]);
// 		echo ("<br>");
// 	}
// }
}
 if($source=='d' ){
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
 $pm = $_POST['start_time'];
 $mp = $_POST['end_time'];
 $j=0;
 $dp=0;
 $pos9 = array();
 $sval = array(); 
  $fvalue= array(); 
 while ($pm <= $mp){
 	if (array_search($pm, $d)) {
 		$pos9[] = array_search($pm, $d);
 	}
 $pm=$pm+1;
 }

 foreach ($pos9 as $key ) {
 	  $fvalue[] = $d[$key];
 }
 if(array_search(15, $fvalue)){
 $dp=1;
}
 foreach ($fvalue as $key) {
	$sval[] = array_search($key, $d);
}
day($sval,$d);
// foreach ($sval as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$d[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$d[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$d[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$d[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$d[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$d[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$d[6]);

// 		echo ("<br>");
// 	}
// }

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
 $pm1 = $_POST['start_time'];
 $mp1 = $_POST['end_time'];
 $j=0;
 $pos10 = array();
 $sval1 = array();
  $fvalue1= array();  
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $d1)) {
 		$pos10[] = array_search($pm1, $d1);
 	}
 $pm1=$pm1+1;
 }
 foreach ($pos10 as $key ) {
 	  $fvalue1[] = $d1[$key];
 }
if($dp==1){
 $key = array_search(15, $fvalue1);
if (false !== $key) {
    unset($fvalue1[$key]);
}
}
if($dp==0 and array_search(15, $fvalue1)){
 $dp=1;
}
 foreach ($fvalue1 as $key) {
	$sval1[] = array_search($key, $d1);
}
day1($sval1,$d1);
// foreach ($sval1 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$d1[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$d1[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$d1[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$d1[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$d1[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$d1[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$d1[6]);
// 		echo ("<br>");
// 	}
// }
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
 $pm2 = $_POST['start_time'];
 $mp2 = $_POST['end_time'];
 $j=0;
 $pos11 = array();
 $sval2 = array();
 $fvalue2= array();  
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $d2)) {
 		$pos11[] = array_search($pm2, $d2);
 	}
 $pm2=$pm2+1;
 }
foreach ($pos11 as $key) {
 	  $fvalue2[] = $d2[$key];
 }
 if($dp==1){
 $key = array_search(15, $fvalue2);
if (false !== $key) {
    unset($fvalue2[$key]);
}
}
 foreach ($fvalue2 as $key) {
	$sval2[] = array_search($key, $d2);
}
day2($sval2,$d2);
// foreach ($sval2 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$d2[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$d2[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$d2[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$d2[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$d2[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$d2[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$d2[6]);
// 		echo ("<br>");
// 	}
// }
}

 if($source=='e' ){
$query = "Select * from e1";
$result = mysqli_query($conn,$query);
$data= array();
$e = array();
$dp=0;
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $f) {
 	 $e=$f;
 }
 $pm = $_POST['start_time'];
 $mp = $_POST['end_time'];
 $j=0;
 $pos12 = array();
 $sval = array(); 
  $fvalue= array(); 
 while ($pm <= $mp){
 	if (array_search($pm, $e)) {
 		$pos12[] = array_search($pm, $e);
 	}
 $pm=$pm+1;
 }
 foreach ($pos12 as $key ) {
 	  $fvalue[] = $e[$key];
 }
 if(array_search(15, $fvalue)){
 $dp=1;
}
 foreach ($fvalue as $key) {
	$sval[] = array_search($key, $e);
}
day($sval,$e);
// foreach ($sval as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$e[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$e[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$e[2]);
		
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$e[3]);
		
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$e[4]);
		
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$e[5]);
		
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$e[6]);
		
// 		echo ("<br>");
// 	}
// }

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
 $pm1 = $_POST['start_time'];
 $mp1 = $_POST['end_time'];
 $j=0;
 $pos13 = array();
 $sval1 = array();
  $fvalue1= array();  
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $e1)) {
 		$pos13[] = array_search($pm1, $e1);
 	}
 $pm1=$pm1+1;
 }
 foreach ($pos13 as $key ) {
 	  $fvalue1[] = $e1[$key];
 }
 if($dp==1){
 $key = array_search(15, $fvalue1);
if (false !== $key) {
    unset($fvalue1[$key]);
}
}
if($dp==0 and array_search(15, $fvalue1)){
 $dp=1;
}
 foreach ($fvalue1 as $key) {
	$sval1[] = array_search($key, $e1);
}
day1($sval1,$e1);
// foreach ($sval1 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$e1[0]);
		
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$e1[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$e1[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$e1[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$e1[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$e1[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$e1[6]);
// 		echo ("<br>");
// 	}
// }

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
 $pm2 = $_POST['start_time'];
 $mp2 = $_POST['end_time'];
 $j=0;
 $pos14 = array();
 $sval2 = array(); 
 $fvalue2= array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $e2)) {
 		$pos14[] = array_search($pm2, $e2);
 	}
 $pm2=$pm2+1;
 }
foreach ($pos14 as $key ) {
 	  $fvalue2[] = $e2[$key];
 }
 if($dp==1){
 $key = array_search(15, $fvalue2);
if (false !== $key) {
    unset($fvalue2[$key]);
}
}
 foreach ($fvalue2 as $key) {
	$sval2[] = array_search($key, $e2);
}
day2($sval2,$e2);
// foreach ($sval2 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$e2[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$e2[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$e2[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$e2[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$e2[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$e2[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$e2[6]);
// 		echo ("<br>");
// 	}
// }
}
 if ($source=='f' ){
$query = "Select * from f1";
$result = mysqli_query($conn,$query);
$data= array();
$f1 = array();
$dp=0;
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $h) {
 	 $f1=$h;
 }
 $pm = $_POST['start_time'];
 $mp = $_POST['end_time'];

 $pos15= array();
 while ($pm <= $mp){
 	if (array_search($pm, $f1)) {
 		$pos15[] = array_search($pm, $f1);
 	}
 $pm=$pm+1;
 }
 foreach ($pos15 as $key ) {
 	  $fvalue[] = $f1[$key];
 }
 if(array_search(15, $fvalue)){
 $dp=1;
}
 foreach ($fvalue as $key) {
	$sval[] = array_search($key, $f1);
}
day($sval,$f1);
// foreach ($sval as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$f1[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$f1[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$f1[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$f1[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$f1[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$f1[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$f1[6]);
// 		echo ("<br>");
// 	}
// }

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
 $pm1 = $_POST['start_time'];
 $mp1 = $_POST['end_time'];
 $j=0;
 $pos16 = array();
 $sval1 = array(); 
 $fvalue1= array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $f2)) {
 		$pos16[] = array_search($pm1, $f2);
 	}
 $pm1=$pm1+1;
 }
 foreach ($pos16 as $key ) {
 	  $fvalue1[] = $f2[$key];
 }
 if($dp==1){
 $key = array_search(15, $fvalue1);
if (false !== $key) {
    unset($fvalue1[$key]);
}
}
if($dp==0 and array_search(15, $fvalue1)){
 $dp=1;
}
 foreach ($fvalue1 as $key) {
	$sval1[] = array_search($key, $f2);
}
day1($sval1,$f2);
// foreach ($sval1 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$f2[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$f2[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$f2[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$f2[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$f2[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$f2[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$f2[6]);
// 		echo ("<br>");
// 	}
// }

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
 $pm2 = $_POST['start_time'];
 $mp2 = $_POST['end_time'];
 $j=0;
 $pos17 = array();
 $sval2 = array();
 $fvalue2= array();  
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $f3)) {
 		$pos17[] = array_search($pm2, $f3);
 	}
 $pm2=$pm2+1;
 }
foreach ($pos17 as $key ) {
 	  $fvalue2[] = $f3[$key];
 }
if($dp==1){
 $key = array_search(15, $fvalue2);
if (false !== $key) {
    unset($fvalue2[$key]);
}
}
 foreach ($fvalue2 as $key) {
	$sval2[] = array_search($key, $f3);
}
day2($sval2,$f3);
// foreach ($sval2 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$f3[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo("Train:".$f3[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$f3[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$f3[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$f3[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$f3[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$f3[6]);
// 		echo ("<br>");
// 	}
// }
}
 if($source=='g'){
$query = "Select * from g1";
$result = mysqli_query($conn,$query);
$data= array();
$g = array();
$dp=0;
while ($row = mysqli_fetch_array($result)) {
 	$data[]=$row;
 }
 foreach ($data as $f) {
 	 $g=$f;
 }
 $pm = $_POST['start_time'];
 $mp = $_POST['end_time'];
 $j=0;
 $pos18 = array();
 $sval = array(); 
 $fvalue= array(); 
 while ($pm <= $mp){
 	if (array_search($pm, $g)) {
 		$pos18[] = array_search($pm, $g);
 	}
 $pm=$pm+1;
 }
foreach ($pos18 as $key ) {
 	  $fvalue[] = $g[$key];
 }
if(array_search(15, $fvalue)){
 $dp=1;
}
 foreach ($fvalue as $key) {
	$sval[] = array_search($key, $g);
}
day($sval,$g);
// foreach ($sval as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$g[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$g[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$g[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$g[3]);
// 	    echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$g[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$g[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$g[6]);
// 		echo ("<br>");
// 	}
// }
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
 $pm1 = $_POST['start_time'];
 $mp1 = $_POST['end_time'];
 $j=0;
 $pos19 = array();
 $sval1 = array(); 
 $fvalue1= array(); 
 while ($pm1 <= $mp1){
 	if (array_search($pm1, $g1)) {
 		$pos19[] = array_search($pm1, $g1);
 	}
 $pm1=$pm1+1;
}
foreach ($pos19 as $key ) {
 	  $fvalue1[] = $g1[$key];
 }
if($dp==1){
 $key = array_search(15, $fvalue1);
if (false !== $key) {
    unset($fvalue1[$key]);
}
}
if($dp==0 and array_search(15, $fvalue1)){
 $dp=1;
}
 foreach ($fvalue1 as $key) {
	$sval1[] = array_search($key, $g1);
}
day1($sval1,$g1);
// foreach ($sval1 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$g1[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$g1[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$g1[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$g1[3]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$g1[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$g1[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$g1[6]);
// 		echo ("<br>");
// 	}
// }
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
 $pm2 = $_POST['start_time'];
 $mp2 = $_POST['end_time'];
 $j=0;
 $pos20 = array();
 $sval2 = array();
 $fvalue2= array(); 
 while ($pm2 <= $mp2){
 	if (array_search($pm2, $g2)) {
 		$pos20[] = array_search($pm2, $g2);
 	}
 $pm2=$pm2+1;
 }
 foreach ($pos20 as $key ) {
 	  $fvalue2[] = $g2[$key];
 }
if($dp==1){
 $key = array_search(15, $fvalue2);
if (false !== $key) {
    unset($fvalue2[$key]);
}
}
 foreach ($fvalue2 as $key) {
	$sval2[] = array_search($key, $g2);
}
day2($sval2,$g2);
// foreach ($sval2 as $key) {
// 	if($key==0){
// 		echo ("Train:P");
// 		echo (" Time:".$g2[0]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==1) {
// 		echo ("Train:M");
// 		echo (" Time:".$g2[1]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==2) {
// 		echo "Train:V";
// 		echo (" Time:".$g2[2]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==3) {
// 		echo "Train:K";
// 		echo (" Time:".$g2[3]);
// 		echo "<br>";
// 	}
// 	elseif ($key==4) {
// 		echo "Train:X";
// 		echo (" Time:".$g2[4]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==5) {
// 		echo "Train:Y";
// 		echo (" Time:".$g2[5]);
// 		echo ("<br>");
// 	}
// 	elseif ($key==6) {
// 		echo "Train:Z";
// 		echo (" Time:".$g2[6]);
// 		echo ("<br>");
// 	}
// }
}
function day($val,$ab)
{
	foreach ($val as $key) {
	if($key==0){
		echo ("Train:P");
		echo (" Time:".$ab[0]);
		echo ("<br>");
	}
	elseif ($key==1) {
		echo ("Train:M");
		echo (" Time:".$ab[1]);
		echo ("<br>");
	}
	elseif ($key==2) {
		echo "Train:V";
		echo (" Time:".$ab[2]);
		echo ("<br>");
	}
	elseif ($key==3) {
		echo "Train:K";
		echo (" Time:".$ab[3]);
		echo ("<br>");
	}
	elseif ($key==4) {
		echo "Train:X";
		echo (" Time:".$ab[4]);
		echo ("<br>");
	}
	elseif ($key==5) {
		echo "Train:Y";
		echo("   Time:".$ab[5]);
		echo ("<br>");
	}
	elseif ($key==6) {
		echo "Train:Z";
		echo (" Time:".$ab[6]);
		echo ("<br>");
	}
}
}
function day1($val,$ab)
{
	foreach ($val as $key) {
	if($key==0){
		echo ("Train:P"."  ");
		echo ("Time:".$ab[0]);
		echo ("<br>");
	}
	elseif ($key==1) {
		echo ("Train:M");
		echo ("Time:".$ab[1]);
		echo ("<br>");
	}
	elseif ($key==2) {
		echo "Train:V    ";
		echo ("Time:".$ab[2]);
		echo ("<br>");
	}
	elseif ($key==3) {
		echo "Train:K      ";
		echo ("Time:".$ab[3]);
		echo ("<br>");
	}
	elseif ($key==4) {
		echo "Train:X      ";
		echo ("Time:".$ab[4]);
		echo ("<br>");
	}
	elseif ($key==5) {
		echo "Train:Y     ";
		echo("Time:".$ab[5]);
		echo ("<br>");
	}
	elseif ($key==6) {
		echo "Train:Z    ";
		echo ("Time:".$ab[6]);
		echo ("<br>");
	}
}
}
function day2($val,$ab)
{
	foreach ($val as $key) {
	if($key==0){
		echo ("Train:P");
		echo (" Time:".$ab[0]);
		echo ("<br>");
	}
	elseif ($key==1) {
		echo ("Train:M");
		echo (" Time:".$ab[1]);
		echo ("<br>");
	}
	elseif ($key==2) {
		echo "Train:V";
		echo (" Time:".$ab[2]);
		echo ("<br>");
	}
	elseif ($key==3) {
		echo "Train:K";
		echo (" Time:".$ab[3]);
		echo ("<br>");
	}
	elseif ($key==4) {
		echo "Train:X";
		echo (" Time:".$ab[4]);
		echo ("<br>");
	}
	elseif ($key==5) {
		echo "Train:Y";
		echo("   Time:".$ab[5]);
		echo ("<br>");
	}
	elseif ($key==6) {
		echo "Train:Z";
		echo (" Time:".$ab[6]);
		echo ("<br>");
	}
}
}
?>
