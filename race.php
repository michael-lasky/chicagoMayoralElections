
<?php
// connect and login to FTP server
$ftp_server = "50.87.142.36";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
// $login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);
$login = ftp_login($ftp_conn, "chicaht5", "ZeWGNTV#09");

$server_file = "/public_html/elections/EVjob16.xml";

// open local file to write to
$local_file = "WGNelectionFlight.xml";
$fp = fopen($local_file,"w");

// download server file and save it to open local file
if (ftp_fget($ftp_conn, $fp, $server_file, FTP_ASCII, 0))
  {
  echo "Successfully written to $local_file.";
  }
else
  {
  echo "Error downloading $server_file.";
  }

// close connection and file handler
ftp_close($ftp_conn);
fclose($fp);
?>
