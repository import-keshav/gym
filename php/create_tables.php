<?php
	$con = mysqli_connect('localhost' , 'root' , 'ihawcwit@9643' , 'gym');
	//mysqli_select_db($con , 'gym');
	$sql = "CREATE TABLE user_primary_info(
			name varcar(30) not null,
			email varcar(60) not null,
			username varcar(30) not null,
			password varcar(30) not null,
			address varcar(200) not null
			bmi varcar(10) not null,
			mobile_num varcar(15) not null,
			gender varcar(10) not null
			)" ;

	mysqli_query($con , $sql);
	echo "done";
	mysqli_close($con); 
/*
	$dbhost =   'localhost';
    $dbuser =   'root'; 
    $dbpwd  =   'ihawcwit@9643'; 
    $dbname =   'gym';

    $conn   =   new mysqli( $dbhost, $dbuser, $dbpwd, $dbname );
    echo ( $conn ? 'db connection ok' : 'db connection failed' ).'<br />';

    $sql='select `username` from `users`';

    $res=$conn->query( $sql );

    echo ( $res ? 'ok result' : 'no result' ) . '<br />';

    while( $rs=$res->fetch_object() ) echo $rs->username.'<br />';

    $conn->close();
*/
?>