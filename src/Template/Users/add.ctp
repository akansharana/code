<h1>Register new user </h1>
<?php
 echo $this->Flash->render('auth');
    echo $this->Form->create($user);
    echo $this->Form->input('fullname');
    echo $this->Form->input('password');
    echo $this->Form->input('password2',array('label'=>"confirm password",'type'=>'password'));
    echo $this->Form->input('email');
    echo $this->Form->button(__('Register'));
    echo $this->Form->end();
?>
