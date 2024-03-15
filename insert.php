<?php
$dbName = "C:\\PHP\\hola.mdb";
if (!file_exists($dbName)) {
    die("Could not find database file.");
}

$user="";
$password="";
$base="holahola";

// Microsoft Access
$connection = odbc_connect($base, $user, $password);// Microsoft Access

//$_GET['user_id']

$sample=$_REQUEST["sample"];
$hora=$_REQUEST["hora"];
$start=$_REQUEST["start"];
$SubjectID=$_REQUEST["ID"];


$sql = "INSERT INTO timing ( sample, start, tiempo,SubjectID ) values ($sample,$start,'$hora','$SubjectID');";

//echo $sql;

//$sql = 'SELECT Field1 FROM table1';
//$res = $connection->Execute($sql);
$result = odbc_exec($connection, $sql);


//while(odbc_fetch_row($result)){
//         for($i=1;$i<=odbc_num_fields($result);$i++){
//        echo "Result is ".odbc_result($result,$i)."<BR>";
//    }
//}







$dsn = "hello";
$user = "";
$password = "";

$dbName = "C:\\PHP\\hola.mdb";
 $db = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)};DBQ=$dbName;", $user, $password);

$query=$db->query("SELECT * FROM table1;");

$return=array();
if($query) {
     while($result=$query->fetch(PDO::FETCH_ASSOC)) {
         $return[]=$result;
     }
}else $return['error']=1;

//close
$query=null;
$db=null;

print_r($return);
?>
