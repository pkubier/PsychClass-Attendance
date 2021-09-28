<?php


include_once 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {//Check it is comming from a form


    $name = $_POST['name'];
    $id = $_POST['id'];
    $seatrow = $_POST['seatrow'];
    $seatcolumn = $_POST['seatcolumn'];
    $timestamp = date("Y-m-d H:i:s");

/* Get the 'best known' client IP. */

if (!function_exists('getClientIP'))    {
        function getClientIP()            {
                if (isset($_SERVER["HTTP_CF_CONNECTING_IP"]))                    {
                        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                    };

                foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key)
                    {
                        if (array_key_exists($key, $_SERVER)) 
                            {
                                foreach (explode(',', $_SERVER[$key]) as $ip)
                                    {
                                        $ip = trim($ip);

                                        if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false)
                                            {
                                                return $ip;
                                            };
                                    };
                            };
                    };

                return false;
            };
    };

$best_known_ip = getClientIP();

if(!empty($best_known_ip))
    {
        $ip = $clients_ip = $client_ip = $client_IP = $best_known_ip;
    }
else
    {
        $ip = $clients_ip = $client_ip = $client_IP = $best_known_ip = '';
    };

	//Open a new connection to the MySQL server
	//see https://www.sanwebe.com/2013/03/basic-php-mysqli-usage for more info
	$mysqli = new mysqli($servername, $username, $password, $dbname);
	
	//Output any connection error
	if ($mysqli->connect_error) {
		die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
	}	
	
	$statement = $mysqli->prepare("INSERT INTO CRN11178 (timestamp,ip,id,name,seatrow,seatcolumn) VALUES(?,?,?,?,?,?)"); //prepare sql insert query
	//bind parameters for markers, where (s = string, i = integer, d = double,  b = blob)
	$statement->bind_param('ssssii', $timestamp, $ip, $id, $name, $seatrow, $seatcolumn); //bind values and execute insert query
    
$timestamp;



   // $headers = "From:" . $u_email;
   // $headers2 = "From:" . $to;
   // mail($to,$subject,$message2,$headers);
  //  mail($u_email,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    

	if($statement->execute()){
        echo "Attendance for today has been recorded successfully. Thank you.";

   }else{
       print $mysqli->error; //show mysql error if any
   }
}
?>