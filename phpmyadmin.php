<?php


$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'blood';

$conn = mysqli_connect($servername,$username,$password,$database);
if ($conn) {
    echo'database working <hr>';
}else{
    echo'database not working <hr>';
}

// creating registeration table
$sql =  "CREATE TABLE registeration (
    name	varchar(30),
    gender	varchar(6),
    mobile	text,
    mail varchar(30),
    blood	varchar(3),
    age      integer(3),
    medication  char(1),
    location	varchar(24),
    password	varchar(30),

    PRIMARY KEY (mail)
) ";
$check = mysqli_query($conn,$sql);
if ($check) {
    echo'registeration working <hr>';
}else{
    echo'registeration not working <hr>';
}

// creating patient table
$sql =  "CREATE TABLE patient_table (
    pname	varchar(40),
    blood	varchar(3),
    paddres	varchar(100),
    state	varchar(30),
    detail	varchar(400),
    mail	varchar(30),
    hid    char(1),

    FOREIGN KEY (mail) REFERENCES registeration(mail)
) ";

$check = mysqli_query($conn,$sql);
if ($check) {
    echo'patient_table working <hr>';
}else{
    echo'patient_table not working <hr>';
}

// creating request table
$sql =  "CREATE TABLE request_table (
    from_mail	varchar(30),
    to_mail	varchar(50),
    status	varchar(2),

    FOREIGN KEY (from_mail) REFERENCES registeration(mail)
) ";
$check = mysqli_query($conn,$sql);
if ($check) {
    echo'request_table working <hr>';
}else{
    echo'request_table not working <hr>';
}

echo'everything has done <hr>';
echo'<h1 style = "text-align:center" >Ab chla le website!</h1>';


?>