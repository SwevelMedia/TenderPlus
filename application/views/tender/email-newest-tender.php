<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Email Notifikasi Tender</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet"> 
</head>
<style>
	body {
		font-family: 'Ubuntu', sans-serif;
		font-size: 14px;
	}
	a {
		text-decoration: none;
	}
	a.btn {
		background: #B02D19;
		color: #fff;
		padding: 7px 10px;
		display: inline-block;
	}
	a.btn:hover {
		background: #992513;
	}
</style>

<body style="margin: 0; background: #f2f2f2; padding: 20px 0;">
	<table align="center" cellpadding="0" cellspacing="0" width="800" style="border-collapse: collapse; border-radius: 15px; background: #fff;">
		<tr>
			<td colspan="3">
				<div style="border-top: 8px solid #B02D19; border-radius: 15px; padding: 20px;"></div>
			</td>
		</tr>
		<tr>
			<td width="100"></td>
			<td width="600">
				<table cellpadding="0" cellspacing="0" width="100%">
					<tr>
						<td width="400">
							<h1 style="margin: 0;">TENDER TERBARU</h1>
							<h4 style="margin: 5px 0 10px 0; font-weight: 400;">Tender terbaru sesuai dengan konfigurasi filter Anda</h4>
							<a href="" class="btn">Lihat Semua Tender Terbaru<a>
						</td>
						<td width="200">
                                <img src="<?= $baseurl ?>/assets/img/notif_2.png" alt="notif_2.png" width="200" />
						</td>
					</tr>
					<tr>
						<td height="20" colspan="2"></td>
					</tr>

                    <?php if ($isUserFree): ?>
					<tr>
						<td colspan="2">
                        Total tender terbaru : <span style="background: #FFF2F2;border: 1px solid #B02D19;padding: 5px;font-size: 16px;"><strong><?= $count_tender ?></strong></span> Tender
						</td>
					</tr>
					<tr>
						<td height="20" colspan="2"></td>
					</tr>
                    <?php endif; ?>
                    
                    <?php if ($isUserTrial || $isUserPremium): ?>
                    <?php foreach ($tenders as $tender): ?>
					<tr>
						<td colspan="2" style="border-radius: 5px; box-shadow: 0 0 5px #eee; border: 1px solid #ddd; overflow: hidden;">
							<table cellpadding="0" cellspacing="0" width="100%" style="padding: 10px 15px; border-top: 5px solid #eb650d; background: #f5f5f5;">
								<tr>
                                    <td colspan="4"><h2 style="margin: 0;font-weight: 500;"><?= $tender[0]['lpse_name'] ?></h2></td>
								</tr>
							</table>
                            <?php foreach ($tender as $key => $item): ?>
							<table cellpadding="0" cellspacing="0" width="100%" style="padding: 0 15px 15px 15px;">
								<tr>
                                    <td width="30" style="padding: 5px; border-top: 1px solid #ddd;"><span style="padding: 5px 10px;display: block;text-align: center;"><strong><?= $key + 1 ?>.</strong></span></td>
                                    <td style=" border-top: 1px solid #ddd;" colspan="3"><h3 style="margin: 0;"><?= $item['tender_name'] ?></h3></td>
								</tr>
								<tr>
									<td style="padding: 5px">&nbsp;</td>
									<td width="150">Nilai HPS</td>
									<td width="15" style="text-align:center;">:</td>
                                    <td style="color: green;"><strong><?= $item['hps'] ?></strong></td>
								</tr>
								<tr>
									<td style="padding: 5px">&nbsp;</td>
									<td width="150">Akhir Pendaftaran</td>
									<td width="15" style="text-align:center;">:</td>
                                    <td><strong><?= $item['end_reg'] ?></strong></td>
								</tr>
								<tr>
									<td style="padding: 5px">&nbsp;</td>
									<td width="150">Link Paket</td>
									<td width="15" style="text-align:center;">:</td>
                                    <td><a href="<?= $item['link'] ?>" class="btn">Klik Disini<a></td>
								</tr>
							</table>
                            <?php endforeach; ?>
						</td>
					</tr>
					<tr>
						<td height="20"></td>
					</tr>
                    <?php endforeach; ?>

                    <?php if ($isUserTrial): ?>
					<tr>
                        <td colspan="2"><?= $footnoteTrial ?></td>
					</tr>
					<tr>
						<td height="20" colspan="2"></td>
					</tr>
                    <?php endif; ?>
                    
                    <?php endif; ?>
                    
                    <?php if ($isUserFree): ?>
					<tr>
                        <td colspan="2">
                        Halo <strong><?= $name ?></strong>,<br />
                        Terdapat <strong><?= $count_tender ?> paket baru</strong> yang dapat Anda menangkan bersama Tenderplus.id. silakan upgrade ke akun premium untuk dapat melihat daftar tender.
                        </td>
					</tr>
					<tr>
						<td height="20" colspan="2"></td>
					</tr>
                    <?php endif; ?>

					<tr>
						<td colspan="2" align="center">
                        <img src="<?= $baseurl ?>/assets/img/logo-tender.png" alt="logo-tender.png" width="150" />
						</td>
					</tr>
					<tr>
						<td colspan="2" height="10"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
							<a href="https://www.instagram.com/beecons/" target="_blank"><img src="<?= $baseurl ?>/assets/img/instagram-beecons.png" alt="instagram-beecons.png" width="30" /></a>
							<a href="https://www.linkedin.com/company/beeconsyogyakarta/" target="_blank"><img src="<?= $baseurl ?>/assets/img/linkedin-beecons.png" alt="linkedin-beecons.png" width="30" /></a>
							<a href="" target="_blank"><img src="<?= $baseurl ?>/assets/img/facebook-beecons.png" alt="facebook-beecons.png" width="30" /></a>
							<a href="" target="_blank"><img src="<?= $baseurl ?>/assets/img/twitter-beecons.png" alt="twitter-beecons.png" width="30" /></a>
						</td>
					</tr>
					<tr>
						<td colspan="2" height="10"></td>
					</tr>
					<tr>
						<td colspan="2" align="center">
                            <a href="<?= $baseurl ?>/tentang_kami" target="_blank" style="color: #000;padding: 0 5px;font-size: 13px;">Tentang Kami</a>
							<a href="<?= $baseurl ?>/hubungi_kami" target="_blank" style="color: #000;padding: 0 5px;font-size: 13px;">Kontak Kami</a>
							<a href="<?= $baseurl ?>/kebijakan_privasi" target="_blank" style="color: #000;padding: 0 5px;font-size: 13px;">Kebijakan Privasi</a>
							<a href="<?= $baseurl ?>/faq" target="_blank" style="color: #000;padding: 0 5px;font-size: 13px;">FAQ</a>
						</td>
					</tr>
					<tr>
						<td colspan="2" height="10"></td>
					</tr>
					<tr>
                        <td colspan="2" align="center"><span style="font-size: 11px">&copy;<?= date('Y') ?>. Tender+ All Rights Reserved</span></td>
					</tr>
				</table>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td colspan="3">
				<div style="border-bottom: 8px solid #B02D19; border-radius: 15px; padding: 20px;"></div>
			</td>
		</tr>
	</table>
</body>
</html>
