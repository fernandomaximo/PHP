
<?= form_open('profile/createnow'); ?>

<p>Nome do Usuario: </p>
<?=  form_input('name'); ?>

<p>Username: </p>
<?=  form_input('username'); ?>

<p>Password: </p>
<?= form_password('password'); ?>

<p>Email: </p>
<?=  form_input('email'); ?>

<p>Descrição: </p>
<?= form_textarea('about'); ?>

<br>
<?= form_submit('send','Salvar'); ?>


<?= form_close(); ?>