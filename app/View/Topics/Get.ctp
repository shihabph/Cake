<h2> Topic List</h2>
<table>
    <tr>
        <th>Title</th>
        <th>User</th>
        <th>Published</th>
        <th>Created</th>
        <th>Modified</th>

    </tr>
    <?php
    foreach ($topics as $topic) { ?>
        <tr>
            <td><?php echo $this->HTML->link($topic['Topic']['title'], array('controller' => 'topics', 'action' => 'view', $topic['Topic']['id'])); ?></td>
            <td><?php echo $topic['Topic']['user_id']; ?></td>
            <td><?php echo $topic['Topic']['visible']; ?></td>
            <td><?php echo $topic['Topic']['created']; ?></td>
            <td><?php echo $topic['Topic']['modified']; ?></td>
        </tr>
    <?php } ?>
    <?php unset($topic); ?>


</table>
<a style="float:right; Color: Green; font-size: 18px" href="generate">Return to Generation</a>