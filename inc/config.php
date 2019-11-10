<?php 
//contraseña
$passs="Palencia1";
//nombre de base de datos 
$bd="pagos";
//nombre de usuario 
$user="mysqldbuser@inventariorc-mysqldbserver";
//nombre de la empresa a la que le daras el servicio
$empresa="Developers";

//Configuración general
$config = array(
	"titulo"=>"SysPro",
	"subtitulo"=>"Inicio",
	"url"=>"http://{$_SERVER['HTTP_HOST']}/panel/", //Con / al final
	//"url" => "http://localhost/simpleCMS/",
	"charset"=>"utf-8",

	"friendlyurls"=>false,

	//Datos para la configuracion del envio de correo
	"emailadmin"=>"",
	"emailenvios"=>"",
	"nombreenvios"=>"SysPro",
	"servidor"=>"inventariorc-mysqldbserver.mysql.database.azure.com",
	"basedatos"=>"$bd",
	"usuario"=>"$user",
	"pass"=>"$passs",

	"googleanalytics"=>false,//Codigo UA- usado en las analiticas de Google
	"googlesiteverification"=>false,
	"mssiteverification"=>false
	); ?>

<?php
	$dbhost="inventariorc-mysqldbserver.mysql.database.azure.com";
	$dbname="$bd";
	$dbuser="$user";
	$dbpass="$passs";
	$db = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

	$mysqli_conn = new mysqli($dbhost, $dbuser, $dbpass,$dbname); //connect to MySql
	if ($mysqli_conn->connect_error) {//Output any connection error
	    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
	}
?>
