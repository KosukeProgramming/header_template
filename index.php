<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ヘッダーテンプレート</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php $upload_dir = wp_upload_dir(); ?>
	<?php $home_url = esc_url(home_url()); ?>
	<header>
		<div class="header-inner">
			
			<a class="header-logo-link" href="<?= $home_url; ?>"><h1><img src="<?php echo $upload_dir['baseurl'];?>/2022/03/header_logo_julie.jpg" alt="会社ロゴ" class="header-logo"></h1></a>

			<nav class="header-menu">
				<ul class="gnav-list">
					<li class="gnav-item">TOP<a href="<?= $home_url; ?>"></a></li>
					<li class="gnav-item">ごあいさつ<a href="<?= $home_url; ?>/about"></a></li>
					<li class="gnav-item">サービス・ご利用料金<a href="<?= $home_url; ?>/#service"></a></li>
					<li class="gnav-item">車両・介護器具<a href="<?= $home_url; ?>/#car"></a></li>
					<li class="gnav-item">ご利用方法<a href="<?= $home_url; ?>/#use"></a></li>
					<li class="gnav-item">Ｑ＆Ａ<a href="<?= $home_url; ?>/questions"></a></li>
				</ul>
			</nav>

			<div class="header-menu-sp">
				<!-- ハンバーガーメニュー -->
				<input type="checkbox" id="btn">
				<label for="btn" class="h-btn"><span></span></label>
				<label for="btn" class="modal-bg"></label>
				<div class="menu-list-inner-sp">
					
					<nav>
						<ul class="gnav-list-sp">
							<li class="gnav-item-sp">TOP<a href="<?php echo esc_url(home_url()); ?>"></a></li>
							<li class="gnav-item-sp">ごあいさつ<a href="<?php echo esc_url(home_url()); ?>/about"></a></li>
							<li class="gnav-item-sp in-page-link">事業所概要<a href="<?= $homue_url; ?>/info/#office"></a></li>
							<li class="gnav-item-sp in-page-link">サービス・ご利用料金<a href="<?php echo esc_url(home_url()); ?>/#service"></a></li>
							<li class="gnav-item-sp in-page-link">介助料・介護器具使用料<a href="<?= $homue_url; ?>/info/#careFee"></a></li>
							<li class="gnav-item-sp in-page-link">タクシー運賃・料金表<a href="<?= $homue_url; ?>/info/#taxiFee"></a></li>
							<li class="gnav-item-sp in-page-link">車両・介護器具<a href="<?php echo esc_url(home_url()); ?>/#car"></a></li>
							<li class="gnav-item-sp in-page-link">ご利用方法<a href="<?php echo esc_url(home_url()); ?>/#use"></a></li>
							<li class="gnav-item-sp">ご予約時の確認内容<a href="<?= $homue_url; ?>/info"></a></li>
							<li class="gnav-item-sp in-page-link">感染症対策<a href="<?= $homue_url; ?>/info/#infection"></a></li>
							<li class="gnav-item-sp in-page-link">個人情報保護方針<a href="<?= $homue_url; ?>/info/#privacy"></a></li>
							<li class="gnav-item-sp">Ｑ＆Ａ<a href="<?php echo esc_url(home_url()); ?>/questions"></a></li>
						</ul>
					</nav>
					
				</div>
			</div>

		</div>
	</header>
	
</body>
</html>