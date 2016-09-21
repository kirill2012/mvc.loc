<div style="margin: 3% 5%">
<a href="/posts/create">
    <button class="btn">Create new post</button></a><br><br>
<table style="border-collapse: collapse; border: 2px solid white;">
    <tr>
        <th>Title</th>
        <th>Text</th>
        <th>Options</th>
    </tr>

    <?php foreach($data as $post){?>
        <tr style="border-bottom: 2px solid silver">
            <td> <?= $post->title ?> </td>
            <td> <?= substr($post->text,0,500); ?>... </td>
            <td>
                <a href="/posts/view?id=<?= $post->id ?>">View</a><br>
                <a href="/posts/edit?id=<?= $post->id ?>">Edit</a><br>
                <a href="/posts/delete?id=<?= $post->id ?>">Delete</a>
            </td>
        </tr>
    <?php }?>

</table>
</div>