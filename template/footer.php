<footer>
<p>copyright 2019 t-yagi.</p>
</footer>
<?php
if($pageType == 'contact-index') {
    echo '<script src="/contact/js/index.js"></script>';
} else if($pageType == 'contact-confirm') {
    echo '<script src="/contact/js/confirm.js"></script>';
}
?>
