<!DOCTYPE html>
<html>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/head.php'); ?>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/header.php'); ?>
	<main>
		<section class="form-content">
			<h2>お問い合わせ</h2>
			<form action="./confirm.php" method="post">
				<ul>
					<li>
						<label for="name">
							名前<br>
							<input type="text" name="name" id="name" />
						</label>
					</li>
					<li>
						<label for="email">
							メールアドレス<br>
							<input type="mail" name="email" id="email" />
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
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
</body>
</html>