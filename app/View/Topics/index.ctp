<h2> Topic List</h2>
<table>
    <tr>
        <th>Title</th>
        <th>User</th>
        <th>Published</th>
        <th>Created</th>
        <th>Modified</th>
        <th>Edit</th>       
        <th>Delete</th>

    </tr>
    <?php
    foreach ($topics as $topic) { ?>
        <tr>
            <td><?php echo $this->HTML->link($topic['Topic']['title'], array('controller' => 'topics', 'action' => 'view', $topic['Topic']['id'])); ?></td>
            <td><?php echo $topic['Topic']['user_id']; ?></td>
            <td><?php echo $topic['Topic']['visible']; ?></td>
            <td><?php echo $topic['Topic']['created']; ?></td>
            <td><?php echo $topic['Topic']['modified']; ?></td>
            <td><?php echo $this->HTML->link('Edit', array('controller' => 'topics', 'action' => 'edit' /* Indicates the Edit Method*/, $topic['Topic']['id'])); ?></td>
            <td><?php echo $this->form->postLink('Delete'/* SHOWS UP as Title in table*/, array('controller' => 'topics', 'action' => 'delete' /* Indicates the delete Method*/, $topic['Topic']['id']), array('confirm'=>'Are you Sure, You wanna Delete this?')); ?></td>

        </tr>
    <?php } ?>
    <?php unset($topic); ?>


</table>
<a style="float:right; Color: Green; font-size: 18px" href="generate">Return to Generation</a>