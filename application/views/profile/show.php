<h1>Profile do Usuario</h1>


<p> Username: <?=$this->user->getUsername() ?></p>
<p> Email: <?= $this->user->getEmail() ?></p>
<p> About: <?= $this->user->getAbout() ?></p>

<p><?= anchor('profile/update', 'Editar Usuário') ?></p>


