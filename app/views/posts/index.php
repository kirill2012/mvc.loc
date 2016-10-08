<div style="margin: 3% 5%">
<a href="/posts/create">
    <button class="btn">Create new post</button></a><br><br>
<table style="border-collapse: collapse; border: 2px solid white;">
    <tr>
        <th>Title</th>
        <th>Text</th>
        <th>Options</th>
    </tr>

    <?php foreach($posts as $post){?>
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

    <div class="center">
        <ul class="pagination">
            <li><a href="/posts/?page=1">&laquo;</a></li>

            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 2 > 0) ? $page - 2 : 1;
            $end = ($lastPage - $page > 2) ? $start + 4 : $lastPage;
            if($end > $lastPage) {
                $end = $lastPage;
            }
            for ($i = $start; $i <= $end; $i++){
                if($i == $page) {?>
                    <li><a class="active" href="/posts/?page=<?=$i?>"><?=$i?></a></li>
                    <?
                }else{?>
                    <li><a href="/posts/?page=<?=$i?>"><?=$i?></a></li>
                <?}
            }?>

            <li><a href="/posts/?page=<?=$lastPage?>">&raquo;</a></li>
        </ul>
    </div>
</div>