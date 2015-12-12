
<?= form_open('profile/updateNow'); ?>

<p>Username: </p>
<?=  form_input('username',$this->user->getUsername()); ?>

<p>Password: </p>
<?= form_password('password')?>

<p>Email: </p>
<?=  form_input('email',$this->user->getEmail()); ?>

<p>Descrição: </p>
<?= form_textarea('about',$this->user->getAbout()); ?>

<br />
<?= form_submit('send', 'Atualizar Usuario')?>

<?= form_hidden('id',$this->user->getId()); ?>

<?= form_close(); ?>