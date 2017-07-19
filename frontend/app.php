<?php
	include "../classes/DBRequest.php";
	include "../classes/DBAccess.php";

	echo "<pre>";
	print_r($_POST);
	echo "</pre>";

	echo "<pre>";
	print_r($_SESSION['logged_user']['firstname']);
	echo "</pre>";


	if (isset($_POST['approve'])) {
		if (DBRequest::appIncert($__conn, $_POST, $_SESSION) == true) {
			echo "<div>Application successfuly created. <a href=\"dashboard.php\">Get dashboard.</a></div>";
		} else {
			echo "<div>Application successfuly created</div>";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>PMI Workflow</title>
	<link rel="shortcut icon" href="../image/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<header>

	</header>
	<main>
		<div class="container">
			<form action="app.php" method="POST"> <!-- возможно перевод на страничку предпросмотра??? -->
				<div class="author_part">
					<ul>
						<li>
							<label class="app_type">application type
								<select name="app_type">
								<?php
								if ($data = DBRequest::selectData($__conn, "application_type")) {
									foreach ($data as $key => $value) {	?>
										<option value="<?=$key?>"><?=$value['app_type']?></option>
								<?php
									}
								}
								?>
								</select>
							</label>
						</li>
						<li>
							<label class="app_urgency">urgency type
								<select name="urgency_type">
								<?php
								if ($data = DBRequest::selectData($__conn, "urgency")) {
									foreach ($data as $key => $value) { ?>
										<option value="<?=$key['urgency_id']?>"><?=$value['urgency_name']?></option>
								<?php
									}
								}
								?>
								</select>
							</label>
						</li>
						<li>
							<label class="app_description">app description
								<textarea name="description"></textarea>
							</label>
						</li>
					</ul>
				</div>
				<div class="material_part">
					<ul>
						<li>
							<label class="material_part_main">main unit
								<select name="material_main">
									<option></option>
								</select> <!-- основной материал  -->
							</label>
						</li>
						<li>
							<label class="material_part_сonstituent">sub unit
								<select name="material_сonstituent">
									<option></option>
								</select> <!-- составляющая основного материала  -->
							</label>
						</li>
					</ul>
				</div>
				<div class="app_part">
					<ul>
						<li>
							<label for="country" class="app_part_country">country
								<select name="country">
								<?php
								if ($data = DBRequest::selectData($__conn, "country")) {
									foreach($data as $key => $value) { ?>

										<option value="<?= $key ?>"><?= $value['country_name'] ?></option>

								<?php
									}
								}
								?>
								</select>
							</label>
						</li>

						<li>
							<label class="app_part_area">area
								<select name="area">
								<?php
								if ($data = DBRequest::selectData($__conn, "area")) {
									foreach ($data as $key => $value) { ?>

										<option value="<?= $key ?>"><?=$value['area_name']?></option>

								<?php
									}
								}
								?>
								</select>
							</label>
						</li>

						<li>
							<label class="app_part_region">region
								<select name="region">
								<?php
								if ($data = DBRequest::selectData($__conn, "regions")) {
										foreach ($data as $key => $value) { ?>

										<option value="<?=$key?>"><?=$value['region_name']?></option>

								<?php
										}
									}
								?>
								</select>
							</label>
						</li>

						<li>
							<label class="app_part_oblast">province
								<select name="province">
								<?php
								if ($data = DBRequest::selectData($__conn, "province")) {
									foreach ($data as $key => $value) { ?>
										<option value="<?=$key?>"><?=$value['province_name']?></option>
								<?php
									}
								}
								?>
								</select>
							</label>
						</li>

						<li>
							<label class="app_part_district">district
								<select name="district">
								<?php
								if ($data = DBRequest::selectData($__conn, "district")) {
									foreach ($data as $key => $value) { ?>
										<option value="<?=$key?>"><?=$value['district_name']?></option>
								<?php
									}
								}
								?>
								</select>
							</label>
						</li>

						<li>
							<label class="app_part_city">city
								<select name="city">
								<?php
								if ($data = DBRequest::selectData($__conn, "cities")) {
									foreach ($data as $key => $value) { ?>
										<option value="<?=$key?>"><?=$value['city_name']?></option>
								<?php
									}
								}
								?>
								</select>
							</label>
						</li>

						<li>
							<label class="app_part_spv">supervisor <!-- узнать полное название поля -->
								<select name="supervisor">
								<?php
								if ($data = DBRequest::selectData($__conn, "spv")) {
									foreach ($data as $key => $value) { ?>
										<option value="<?=$key?>"><?=$value['spv_name']?></option>
								<?php
									}
								}
								?>
								</select>
							</label>
						</li>

						<li>
							<label class="app_part_business_builder">business builder
								<select name="buss_builders">
								<?php
								if ($data = DBRequest::selectData($__conn, "buss_builders")) {
									foreach ($data as $key => $value) { ?>
										<option value="<?=$key?>"><?=$value['builder_name']?></option>
								<?php
									}
								}
								?>
								</select>
							</label>
						</li>

						<li>
							<label class="app_part_tse">teritory supervisor <!-- узнать полное название поля -->
								<select name="teritory_supervisor">
								<?php
								if ($data = DBRequest::selectData($__conn, "tse")) {
									foreach ($data as $key => $value) { ?>
										<option value="<?=$key?>"><?=$value['tse_name']?></option>
								<?php
									}
								}
								?>
								</select>
							</label>
						</li>

						<li>
							<label class="app_part_customer_name">customer
								<select name="customer_name">
								<?php
								if ($data = DBRequest::selectData($__conn, "customers")) {
									foreach ($data as $key => $value) { ?>
										<option value="<?=$key?>"><?=$value['customer_name']?></option>
								<?php
									}
								}
								?>
								</select>
							</label>
						</li>

						<li>
							<label class="app_part_address">customer address
								<select name="customer_address">
								<?php
								if ($data = DBRequest::selectData($__conn, "customers")) {
									foreach ($data as $key => $value) { ?>
										<option value="<?=$key?>"><?=$value['address']?></option>
								<?php
									}
								}
								?>d
								</select>
							</label>
						</li>
						<li>
							<label class="app_trade_category">trade category
								<select name="trade_category">
								<?php
								if ($data = DBRequest::selectData($__conn, "trade_categores")) {
									foreach ($data as $key => $value) { ?>
										<option value="<?=$key?>"><?=$value['tr_cat_name']?></option>
								<?php
									}
								}
								?>d
								</select>
							</label>
						</li>
						<li>
							<input type="hidden" name="app_deadline" value="<?=DBRequest::urgencyTime($_POST['urgency_type'])?>">
						</li>
					</ul>
			</div>
			<div class="button">
				<button type="submit" id="approve" name="approve">Approve</button> <!-- сохранить и передать на согл. -->
				<button type="submit" name="prepare">Prepare</button> <!-- сохранить, НЕ передавать на согл. -->
				<button type="????">Preview</button> <!-- предварительный просмотр -->
				<button type="reset">Reset</button> <!-- сбросить все  -->
			</div>
		</form>
	</div>
</main>
<footer>

</footer>
</body>
</html>
