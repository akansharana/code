<!-- File: src/Template/Topics/edit.ctp -->

<h1>Edit Lesson</h1>
<?php
    echo $this->Form->create($topic);
    echo $this->Form->input('title');
    echo $this->Form->input('content', ['rows' => '3']);
    echo $this->Form->input('lesson');
    echo $this->Form->input('author');
    echo $this->Form->button(__('Save Topic'));
    echo $this->Form->end();
?>
