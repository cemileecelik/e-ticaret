<?php 
include 'header.php'; 
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Hesap Bilgilerim</div>
							<p></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/islem.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Kayıt Bilgileri</div>
				</div>

				<?php
				$durum = $_GET['durum'] ?? null;

				if ($durum != null) {



					if ($durum == "farklisifre") { ?>

						<div class="alert alert-danger">
							<strong>Hata!</strong> Girdiğiniz şifreler eşleşmiyor.
						</div>

					<?php } elseif ($durum == "eksiksifre") { ?>

						<div class="alert alert-danger">
							<strong>Hata!</strong> Şifreniz minimum 6 karakter uzunluğunda olmalıdır.
						</div>

					<?php } elseif ($durum == "mukerrerkayit") { ?>

						<div class="alert alert-danger">
							<strong>Hata!</strong> Bu kullanıcı daha önce kayıt edilmiş.
						</div>

					<?php } elseif ($durum == "basarisiz") { ?>

						<div class="alert alert-danger">
							<strong>Hata!</strong> Kayıt Yapılamadı Sistem Yöneticisine Danışınız.
						</div>

				<?php }
				}
				?>




				<div class="form-group dob">
					<div class="col-sm-12">

						<input type="text" class="form-control" required="" name="kullanici_adsoyad" value="<?php echo $kullanicicek['kullanici_adsoyad'] ?>">
					</div>

				</div>


				<div class="form-group dob">
					<div class="col-sm-6">
						<input type="text" class="form-control" name="kullanici_il" value="<?php echo $kullanicicek['kullanici_il'] ?>">
					</div>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="kullanici_ilce" value="<?php echo $kullanicicek['kullanici_ilce'] ?>">
					</div>
				</div>

				<input type="hidden" name="kullanici_id" value="<?php echo $kullanicicek['kullanici_id'] ?>">



				<button type="submit" name="kullanicikaydet" class="btn btn-default btn-red">Bilgilerimi Güncelle</button>
			</div>
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Şifrenizi mi Unuttunuz?</div>
				</div>


				<center><img width="400" src="http://www.emrahyuksel.com.tr/dimg/sifremi-unuttum.jpg"></center>
			</div>
		</div>
</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>