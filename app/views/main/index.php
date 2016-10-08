<div style="margin: 3% 5%">
    <h1 align="center">Main page</h1><br><br>
    <?php foreach($posts as $post){?>
    <h1 align="center"> <?= $post->title?> </h1>
    <h4><?= $post->userdata->username?> <?= $post->updated_at ?>
    <p><?= substr($post->text,0,1000); ?> <a href="/view?id=<?= $post->id ?>">Read more...</a> </p></h4><hr>
    <?php }?>

    <div class="center">
        <ul class="pagination">
            <li><a href="/?page=1">&laquo;</a></li>

            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $start = ($page - 2 > 0) ? $page - 2 : 1;
            $end = ($lastPage - $page > 2) ? $start + 4 : $lastPage;

            for ($i = $start; $i <= $end; $i++){
                if($i == $page) {?>
                    <li><a class="active" href="/?page=<?=$i?>"><?=$i?></a></li>
                    <?
                }else{?>
                    <li><a href="/?page=<?=$i?>"><?=$i?></a></li>
                <?}
            }?>

            <li><a href="/?page=<?=$lastPage?>">&raquo;</a></li>
        </ul>
    </div>

</div>