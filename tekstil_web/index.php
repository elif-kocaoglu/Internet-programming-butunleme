
<?php
      include "üst.php";
?>


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="https://static.zara.net/photos///contents/mkt/spots/aw22-sale/subhome-xmedia-launch-woman//w/1920/IMAGE-landscape-fill-8d97a747-2077-47bd-b055-d5420898f687-en_GB@RO_0.jpg?ts=1673720810202">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<a href="#" class="site-btn sb-line">KEŞFETMEYE BAŞLA</a>
							<a href="#" class="site-btn sb-white">SEPETE EKLE</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>520tl</h2>
						<p>ALIŞVERİŞE BAŞLA</p>
					</div>
				</div>
			</div>
			<div class="hs-item set-bg" data-setbg="img/bg-2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 text-white">
							<span>New Arrivals</span>
							<h2>denim jackets</h2>
							<a href="#" class="site-btn sb-line">KEŞFETMEYE BAŞLA</a>
							<a href="#" class="site-btn sb-white">SEPETE EKLE</a>
						</div>
					</div>
					<div class="offer-card text-white">
						<span>from</span>
						<h2>250tl</h2>
						<p>ALIŞVERİŞE BAŞLA</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="slide-num-holder" id="snh-1"></div>
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Features section -->
	<section class="features-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/1.png" alt="#">
						</div>
						<h2>Fast Secure Payments</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/2.png" alt="#">
						</div>
						<h2>Premium Products</h2>
					</div>
				</div>
				<div class="col-md-4 p-0 feature">
					<div class="feature-inner">
						<div class="feature-icon">
							<img src="img/icons/3.png" alt="#">
						</div>
						<h2>Free & fast Delivery</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Features section end -->


	<!-- letest product section -->
	<section class="top-letest-product-section">
		<div class="container">
			<div class="section-title">
				<h2>YENİ ÜRÜNLER</h2>
			</div>
			<div class="product-slider owl-carousel">
			<?php
			$urunler=$db->query(" SELECT * FROM urun ORDER BY urun_id DESC LIMIT 5 ");
			while ($urun = $urunler->fetch())
			 {
				UrunListeGorunumu($urun);
			}
				?>
					</div>
			</div>
		</div>
	</section>
	<!-- letest product section end -->
	<!-- Product filter section -->
	<section class="product-filter-section">
		<div class="container">
			<div class="section-title">
				<h2>ÖNE ÇIKAN ÜRÜNLER</h2>
			</div>
			
			<div class="row">
				<?php
				
				$urunler=$db->query("SELECT * FROM urun WHERE urun_vitrin=1 ORDER BY RAND() LIMIT 8");
				while($Urun=$urunler->fetch())
				{
				?>
				<div class="col-lg-3 col-sm-6">
					<?php UrunListeGorunumu($Urun)?>
				</div>
				<?php
				}
				?>
	
			</div>
			<div class="text-center pt-5">
				<button class="site-btn sb-line sb-dark">LOAD MORE</button>
			</div>
		</div>
	</section>
	<!-- Product filter section end -->


	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="banner set-bg" data-setbg="img/banner-bg.jpg">
				<div class="tag-new">NEW</div>
				<span>New Arrivals</span>
				<h2>STRIPED SHIRTS</h2>
				<a href="#" class="site-btn">SHOP NOW</a>
			</div>
		</div>
	</section>
	<!-- Banner section end  -->


	<?php
include "alt.php";
?>