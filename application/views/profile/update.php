
<?= form_open('profile/update'); ?>

<p>Username: </p>
<?=  form_input('username',$this->user->getUsername()); ?>

<p>Password: </p>
<?= form_input('password')?>

<p>Email: </p>
<?=  form_input('email',$this->user->getEmail()); ?>

<p>Descrição: </p>
<?= form_textarea('about',$this->user->getAbout()); ?>

<br />
<?= form_submit('send', 'Atualizar Usuario')?>

<?= form_close(); ?>