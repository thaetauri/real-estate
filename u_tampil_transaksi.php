<html>
    <body>
	<br /><br />
        <table class="table-list" width="670" border="0" cellspacing="1" cellpadding="2">
			<tr><td bgcolor="#CCCCCC"><b>No.</b>.</td>
            <td bgcolor="#CCCCCC"><b>ID Transaksi</b></td>
			<td bgcolor="#CCCCCC"><b>ID User</b></td>
			<td bgcolor="#CCCCCC"><b>Jatuh Tempo</b></td>
			<td bgcolor="#CCCCCC"><b>Waktu Pembayaran</b></td>
			<td bgcolor="#CCCCCC"><b>Tagihan PLN</b></td>
			<td bgcolor="#CCCCCC"><b>Tagihan PDAM</b></td>
			<td bgcolor="#CCCCCC"><b>Tagihan TELKOM</b></td></tr>
           
                <?php
				include_once "library/inc.connection.php";
                   
								   
                   $sql = "SELECT transaksi2.id_transaksi, 
				   			transaksi2.id_user, 
							transaksi2.jatuh_tempo, 
				   			transaksi2.waktu_pembayaran, 
							pln2.tagihan_pln, 
							pdam2.tagihan_pdam, 
							telkom2.tagihan_telkom 
				   			FROM transaksi2, pln2, pdam2, telkom2 
				   			WHERE transaksi2.id_pln=pln2.id_pln AND transaksi2.id_pdam=pdam2.id_pdam AND 
							transaksi2.id_telkom=telkom2.id_telkom AND 
							transaksi2.id_user = '$_SESSION[id_user]'";
                   $qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error());

                   $no = 0;

                    while ($row = mysql_fetch_array($qry)) {
                        $no++;
						echo "<tr><td>".$no."</td>";
                        echo "<td>".$row['id_transaksi']."</td>";
                        echo "<td>".$row['id_user']."</td>";
                        echo "<td>".$row['jatuh_tempo']."</td>";
                        echo "<td>".$row['waktu_pembayaran']."</td>";
                        echo "<td>".$row['tagihan_pln']."</td>";
						echo "<td>".$row['tagihan_pdam']."</td>";
						echo "<td>".$row['tagihan_telkom']."</td>";
                        
                   
                  //  $no++;
                    }              
                ?>       
        </table>
    
    </body>

</html>