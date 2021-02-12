<h1>Manzon Development Business Information</h1>
<br>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('manzon-settings-group') ?>
    <?php do_settings_sections('manzon_theme') ?>
    <?php submit_button() ?>
</form>