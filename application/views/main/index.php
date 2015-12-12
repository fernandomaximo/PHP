
<div id="content">
<?= form_open('authentication/login') ?>
<p>
    <?= form_input('username')?>
    <br>
    <br>
    <?= form_password('password')?>
    <br>
    <br>
    
    <?=  form_submit('send', 'Entrar')?>
</p>

<?= form_close()?>

<p>
       <?= anchor('profile/create', 'criar usuario'); ?></p>

</div>