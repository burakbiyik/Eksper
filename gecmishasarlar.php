<?php
	error_reporting (E_ALL ^ E_NOTICE);
	require_once("baglanti.php");
	session_start();
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/gecmishasarlar.css">
	<title>Geçmiş Hasarlar</title>
</head>
<body>
	<div id="app">
    <div class="fixed-menu active">
        <div class="switch">
            <i class="fa fa-times-circle" aria-hidden="true"></i>
        </div>
        <div class="logo">
            <a href="javascript:;"></a>
            <p>Değer Kaybı</p>
        </div>
        <h3>GEÇMİŞ HASARLAR</h3>
        <ul>
            <li>
                <a href="degerbasvurusu.php">
                    <i class="fas fa-car" aria-hidden="true"></i>
                    Değer Kaybı Başvurusu
                </a>
            </li>
            <li>
                <a href="gecmishasarlar.php">
                    <i class="fas fa-history" aria-hidden="true"></i>
                    Geçmiş Hasarlar
                </a>
            </li>
            <li>
                <a href="itiraz.php">
                    <i class="fas fa-tasks" aria-hidden="true"></i>
                    Itiraz Paneli
                </a>
            </li>
            <li>
                <a href="itirazgecmisi.php">
                    <i class="fas fa-history" aria-hidden="true"></i>
                    Itiraz Geçmişi
                </a>
            </li>
            <li>
                <a href="eksperbasvuru.php">
                    <i class="fas fa-user" aria-hidden="true"></i>
                    Eksper Başvurusu
                </a>
            </li>
        </ul>
        <div class="btn-box">
            <a href="home.php" class="btn">Anasayfa</a>
            <a href="cikis.php" class="btn">Çıkış</a>
        </div>
        <div class="music">
        	<!--
            <div class="pic">
                <img src="https://picsum.photos/300/200?random=10" alt="" />
            </div>
            <p>music - name</p>
            <div class="control">
                <div class="prev btn">
                    <i class="fa fa-fast-backward" aria-hidden="true"></i>
                </div>
                <div class="play btn">
                    <i class="fa fa-play" aria-hidden="true"></i>
                </div>
                <div class="next btn">
                    <i class="fa fa-fast-forward" aria-hidden="true"></i>
                </div>
            </div>
        	-->
        </div>
    </div>
    <div class="content">
    	<!--
        <header>
            <div class="tips">
                <i class="fa fa-bell-o" aria-hidden="true"></i>
            </div>
        </header>
    	-->
        <main>
            <div class="info">
                <h1>Hakan Talha Övüç</h1>
                <p>
                    <i class="fa fa-suitcase" aria-hidden="true"></i>
                    Eksper
                </p>
                <p>
                    <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                    Medipol Üniversitesi
                </p>
                <p>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    Istanbul
                </p>
            </div>
            <div class="bar">
            	<!--
                <div class="item">
                    <a href="javascript:;"></a>
                    <p class="num photos">0</p>
                    <p>Photos</p>
                </div>
                <div class="item">
                    <a href="javascript:;"></a>
                    <p class="num videos">0</p>
                    <p>Videos</p>
                </div>
                <div class="item">
                    <a href="javascript:;"></a>
                    <p class="num connections">0</p>
                    <p>Connections</p>
                </div>
                <div class="item">
                    <a href="javascript:;"></a>
                    <p class="num mixes">0</p>
                    <p>Mixes</p>
                </div>
            	-->
            </div>
            <div class="post">
            	<!--
            	<h1>RWD List to Table</h1>
            	-->
				<table class="rwd-table">
  					<tr>
    					<th>Araç Markası</th>
    					<th>Araç Modeli</th>
   						<th>Araç KM</th>
    					<th>Araç Plaka</th>
    					<th>Değer Kaybı (TL)</th>
  					</tr>
  					<?php  
  						$kullanici_id =  $_SESSION["kullanici_id"];
  						$sql = mysqli_query($baglanti, "SELECT * FROM tbl_degerkaybibasvuru WHERE kullanici_id = '$kullanici_id'");
						
						/* foreach ($sql as $gecmis) {} */
						while ($row = mysqli_fetch_array($sql,MYSQLI_ASSOC)) {

						$arac_markasi = $row['arac_markasi'];
						$arac_modeli = $row['arac_modeli'];
						$arac_km = $row['arac_km'];
						$arac_plaka = $row['arac_plaka'];
                        $fiyat = $row['degerkaybi'];

						echo "<tr>
    					<td data-th='Araç Markası'>$arac_markasi</td>
    					<td data-th='Araç Modeli'>$arac_modeli</td>
    					<td data-th='Araç KM'>$arac_km</td>
    					<td data-th='Araç Plaka'>$arac_plaka</td>
    					<td data-th='Değer Kaybı (TL)'>$fiyat</td>
  						</tr>";

						}
  					?>
				</table>
				<!--
				<p>&larr; Drag window (in editor or full page view) to see the effect. &rarr;</p>
                <div class="item">
                    <a href="javascript:;"></a>
                    <div class="pic">
                        <img src="https://picsum.photos/300/300?random=11" alt="" />
                    </div>
                    <div class="txt">
                        <p>
                            Anger begins with folly, and ends in
                            repentance.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <a href="javascript:;"></a>
                    <div class="pic">
                        <img src="https://picsum.photos/300/300?random=12" alt="" />
                    </div>
                    <div class="txt">
                        <p>
                            He who commences many things finishes but a
                            few.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <a href="javascript:;"></a>
                    <div class="pic">
                        <img src="https://picsum.photos/300/300?random=13" alt="" />
                    </div>
                    <div class="txt">
                        <p>A friend in need is a friend indeed.</p>
                    </div>
                </div>
                <div class="item">
                    <a href="javascript:;"></a>
                    <div class="pic">
                        <img src="https://picsum.photos/300/300?random=14" alt="" />
                    </div>
                    <div class="txt">
                        <p>A still tongue makes a wise head.</p>
                    </div>
                </div>
            	-->
            </div>
        </main>
    </div>

    <?php
    	/*  
    	$kullanici_id =  $_SESSION["kullanici_id"];
		echo "<script type='text/javascript'>alert('$kullanici_id');</script>";
		*/
    ?>
</div>
</body>
<script src="js/gecmishasarlar.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/d860437f13.js" crossorigin="anonymous"></script>
</html>