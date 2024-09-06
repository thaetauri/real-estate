<html>
    <body>
	<? include_once "library/inc.sesadmin.php";?>
        <table border='1' align='center'>
            <tr><th>No</th><th>Nama</th><th>Alamat</th><th>No Telp</th><th>Email</th></tr>
           
                <?php
                    $host="localhost"; // Host name 
					$username="root"; // Mysql username 
					$password=""; // Mysql password 
					$db_name="but"; // Database name 
					$tbl_name="pemesanan"; // Table name 

					// Connect to server and select database.
					mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
					mysql_select_db("$db_name")or die("cannot select DB");
                   
								   
                   $query = "SELECT * FROM pemesanan ORDER BY no";
                    $exe = mysql_query($query);
                   // $no = 1;
                    while($row = mysql_fetch_assoc($exe)){
                        
                        $a = $row['no'];
                        $b = $row['nama'];
                        $c = $row['alamat'];
                        $d = $row['telp'];
                        $e = $row['email'];
						
                    echo "<tr><td>$a</td><td>$b</td><td>$c</td><td>$d</td><td>$e</td></tr>";
                  //  $no++;
                    }
					mysql_close();                
                ?>       
        </table>
    
    </body>

</html>