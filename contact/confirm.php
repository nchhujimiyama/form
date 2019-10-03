<!DOCTYPE html>
<html>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/head.php'); ?>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/header.php'); ?>
	<main>
        <section class="form-content">
            <form action="./submit.php" method="post" id="form">
                <h2>お問い合わせ内容の確認</h2>
                <ul>
                    <li>
                        名前<br>
                        <span><?php echo $_POST['name'];?></span>
                    </li>
                    <li>
                        メールアドレス<br>
                        <span><?php echo $_POST['email'];?></span>
                    </li>
                    <li>
                        お問い合わせ内容<br>
                        <span><?php echo $_POST['inquiry_content'];?></span>
                    </li>
                </ul>
                <input type="hidden" name="name" value="<?php echo $_POST['name'];?>" />
                <input type="hidden" name="email" value="<?php echo $_POST['email'];?>" />
                <input type="hidden" name="inquiry_content" value="<?php echo $_POST['inquiry_content'];?>" />
                <input type="submit" name="form_post" id="form_post" value="送信する" />
                <a href="javascript:void(0)" class="back">修正する</a>
            </form>
        </section>
	</main>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
</body>
</html>