<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 
Transitional//EN" 
"http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
<title>Form Input Transaksi</title>
</head>
<? include_once "library/inc.connection.php"; ?>
<body>
<table border="1">
  <tr>
    <td align="center">Form Input Transaksi BUT</td>
  </tr>
  <tr>
    <td>
      <table>
        <form method="post" action="input_transaksi.php">
        <tr>
          <td>ID Transaksi</td>
          <td><input type="text" name="id_transaksi" size="20">
          </td>
        </tr>
		<tr>
          <td>ID User</td>
          <td><input type="text" name="id_user" size="20">
          </td>
        </tr>
		
		<tr><td>Jatuh Tempo</td><td><select name="jatuh_tempo">
			  <option> </option>
			  <option>1</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			  <option>6</option>
			  <option>7</option>
			  <option>8</option>
			  <option>9</option>
			  <option>10</option>
			  <option>11</option>
			  <option>12</option>
			  <option>13</option>
			  <option>14</option>
			  <option>15</option>
			  <option>16</option>
			  <option>17</option>
			  <option>18</option>
			  <option>19</option>
			  <option>20</option>
			  <option>21</option>
			  <option>22</option>
			  <option>23</option>
			  <option>24</option>
			  <option>25</option>
			  <option>26</option>
			  <option>27</option>
			  <option>28</option>
			  <option>29</option>
			  <option>30</option>
			  <option>31</option>
			  </select>
			  <select name="Bulan2">
				<option> </option>
				<option>Jan</option>
				<option>Feb</option>
				<option>Mar</option>
				<option>Apr</option>
				<option>Mei</option>
				<option>Jun</option>
				<option>Jul</option>
				<option>Agst</option>
				<option>Sept</option>
				<option>Okt</option>
				<option>Nov</option>
				<option>Des</option>
			  </select>
			  <select name="Tahun2">
				<option> </option>
				<option>2010</option>
				<option>2011</option>
				<option>2012</option>
				<option>2013</option>
				<option>2014</option>
				<option>2015</option>
				<option>2016</option>
				<option>2017</option>
				<option>2018</option>
				<option>2019</option>
				<option>2020</option>
				<option>.....</option>
		</select></td></tr>
        <tr>
          <td>Total Tagihan</td>
          <td><input type="text" name="total_tagihan" size="20">
          </td>
        </tr>
		
		<tr><td>Waktu Pembayaran</td><td><select name="waktu_pembayaran">
			  <option> </option>
			  <option>1</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			  <option>5</option>
			  <option>6</option>
			  <option>7</option>
			  <option>8</option>
			  <option>9</option>
			  <option>10</option>
			  <option>11</option>
			  <option>12</option>
			  <option>13</option>
			  <option>14</option>
			  <option>15</option>
			  <option>16</option>
			  <option>17</option>
			  <option>18</option>
			  <option>19</option>
			  <option>20</option>
			  <option>21</option>
			  <option>22</option>
			  <option>23</option>
			  <option>24</option>
			  <option>25</option>
			  <option>26</option>
			  <option>27</option>
			  <option>28</option>
			  <option>29</option>
			  <option>30</option>
			  <option>31</option>
			  </select>
			  <select name="Bulan">
				<option> </option>
				<option>Jan</option>
				<option>Feb</option>
				<option>Mar</option>
				<option>Apr</option>
				<option>Mei</option>
				<option>Jun</option>
				<option>Jul</option>
				<option>Agst</option>
				<option>Sept</option>
				<option>Okt</option>
				<option>Nov</option>
				<option>Des</option>
			  </select>
			  <select name="Tahun">
				<option> </option>
				<option>2010</option>
				<option>2011</option>
				<option>2012</option>
				<option>2013</option>
				<option>2014</option>
				<option>2015</option>
				<option>2016</option>
				<option>2017</option>
				<option>2018</option>
				<option>2019</option>
				<option>2020</option>
				<option>.....</option>
  </select></td></tr>
		<tr>
          <td>Tagihan PLN</td>
		  <?php
			$sql = "SELECT id_pln, jumlah_tagihan FROM pln2, detail_kepemilikan_rumah2
					WHERE pln2.id_pln = detail_kepemilikan_rumah2.id_pln";
			$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error()); 
			while ($row1 = mysql_fetch_array($qry)) {
		  ?>
		  <td><?php echo $row1['jumlah_tagihan']; ?></td>
        </tr>
			<?
			}
			?>
		
        <tr>
          <td>Tagihan PDAM</td>
		  <?php
			$sql = "SELECT id_pdam, jumlah_tagihan FROM pdam2, detail_kepemilikan_rumah2
					WHERE pdam2.id_pdam = detail_kepemilikan_rumah2.id_pdam";
			$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error()); 
			while ($row2 = mysql_fetch_array($qry)) {
		  ?>
		  <td><?php echo $row2['jumlah_tagihan']; ?></td>
        </tr>
			<?
			}
			?>
		
		<tr>
          <td>Tagihan Telkom</td>
		  <?php
			$sql = "SELECT id_telkom, jumlah_tagihan FROM telkom2, detail_kepemilikan_rumah2
					WHERE telkom2.id_telkom = detail_kepemilikan_rumah2.id_telkom2";
			$qry = mysql_query($sql, $koneksidb)  or die ("Query salah : ".mysql_error()); 
			while ($row3 = mysql_fetch_array($qry)) {
		  ?>
		  <td><?php echo $row3['jumlah_tagihan']; ?></td>
        </tr>
			<?
			}
			?>
		
        <tr>
          <td></td>
          <td align="right"><input type="submit" 
          name="submit" value="Sent"></td>
        </tr>
        </table>
      </td>
    </tr>
</table>
</body>
</html>