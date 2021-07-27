
<h1>Edit Article</h1>
<?php
    echo $this->Form->create($article);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('title');
    echo $this->Form->control('body', ['rows' => '3']);
    // Get a list of tags.
    $tags = $this->Articles->Tags->find('list')->all();

    // Set tags to the view context
    $this->set('tags', $tags);
    echo $this->Form->button(__('Save Article'));
    echo $this->Form->end();
?>