

<h1><?= h($user->name) ?></h1>
<p>Username<?= h($user->fullname) ?></p>
<p>Email :<?= h($user->email) ?></p>
<p><small>Created: <?= $user->created->format(DATE_RFC850) ?></small></p>
