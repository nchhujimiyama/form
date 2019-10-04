<?php
$name = (!empty($_POST['name'])) ? $_POST['name'] : '';
?>
<!DOCTYPE html>
<html>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/head.php'); ?>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/header.php'); ?>
	<main>
		<section class="form-content">
			<h2>お問い合わせ</h2>
			<form action="./confirm.php" method="post" class="contact-form">
				<ul>
					<li>
						<label for="name">
							名前<em>*</em>
							<input type="text" name="name" id="name" value="<?php echo $name; ?>" />
							<p class="feedback name">名前を入力してください。</p>
						</label>
					</li>
					<li>
						<label for="email">
							メールアドレス<em>*</em>
							<input type="mail" name="email" id="email" />
							<p class="feedback email">有効なメールアドレスを入力してください。</p>
						</label>
					</li>
					<li>
						<label for="inquiry_content">
							お問い合わせ内容<br>
							<textarea name="inquiry_content" id="inquiry_content"></textarea>
						</label>
					</li>
				</ul>
				<input type="submit" name="form_post" id="form_post" value="入力内容の確認へ" />
			</form>
		</section>
	</main>
	<?php
	$pageType = 'contact-index';
	include($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php');
	?>
</body>
</html>