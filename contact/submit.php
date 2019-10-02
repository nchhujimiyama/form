<!DOCTYPE html>
<html>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/head.php'); ?>
<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/header.php'); ?>
	<main>
        <section class="form-content">
            <h2>送信完了</h2>
            <p class="thanks">
                お問い合わせありがとうございます。<br>
                ご入力いただいたメールアドレス（<span><?php echo $_POST['email'];?></span>）宛に確認のメールをお送りいたしました。<br>
                お問い合わせいただきました内容につきましては、担当者より改めてご連絡させていただきます。<br>
                <span>万が一メールが届かない場合は、お手数ですが<b>test@mail.com</b>にご連絡いただきますようお願い致します。</span>
            </p>
            <p class="back-top"><a href="/contact/">お問い合わせに戻る</a></p>
        </section>
	</main>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/template/footer.php'); ?>
</body>
</html>