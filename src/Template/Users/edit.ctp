<h1>Edit user data </h1>
<?php

    echo $this->Form->create($user);
    echo $this->Form->input('fullname');
 	echo $this->Form->input('email');
 	echo $this->Form->input('password');
 	echo $this->Form->input('password2');
    echo $this->Form->button(__('Save'));
    echo $this->Form->end();
?>
