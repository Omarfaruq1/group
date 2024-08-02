<?php 
function total(){
	$db=new mysqli("localhost","root","","library7");
$sql="SELECT count(book_no)tiro from books";
$r=$db->query($sql);
if($r->num_rows > 0){
	while($row=$r->fetch_assoc()){
		echo $row['tiro'];
	}
}
}
// total();

function sum(){
	$db=new mysqli("localhost","root","","library7");
$sql="SELECT count(am_no)tiro from qaadasho";
$r=$db->query($sql);
if($r->num_rows > 0){
	while($row=$r->fetch_assoc()){
		echo $row['tiro'];
	}
}
}
// total1();
function sum1(){
	$db=new mysqli("localhost","root","","library7");
$sql="SELECT sum(Amount)total from qabasho";
$r=$db->query($sql);
if($r->num_rows > 0){
	while($row=$r->fetch_assoc()){
		echo $row['total'];
	}
}
}
// sum1();
function sum2(){
	$db=new mysqli("localhost","root","","library7");
$sql="SELECT count(id)tiro from users";
$r=$db->query($sql);
if($r->num_rows > 0){
	while($row=$r->fetch_assoc()){
		echo $row['tiro'];
	}
}
}

 ?>

