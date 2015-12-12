<h1>Bem Vindo <?= $this->user->getusername()?> </h1>

<p> que você está fazendo agora? </p>
<?= form_open('timiline/createPweet') ?>

<?= form_textarea('content') ?>

<br> />
<?= form_submit('send', 'atualizar usuario') ?>

<? = form_close() ?>