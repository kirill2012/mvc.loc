
<div style="margin: 3% 5%">
    <h1 align="center">Main page</h1><br><br>
    <?php foreach($data as $post){?>
    <h1 align="center"> <?= $post->title?> </h1>
    <h4><?= $post->userdata->username?> <?= $post->updated_at ?>
    <p><?= substr($post->text,0,1000); ?> <a href="/view?id=<?= $post->id ?>">Read more...</a> </p></h4><hr>
    <?php }?>

    <div align="center">
        <ul class="pagination">
            <li><a href="#">&laquo;</a></li>

            <?php
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            for ($i = 1; $i <= 5; $i++){
                if($i == $page) {?>
                    <li><a class="active" href="/?page=<?=$i?>"><?=$i?></a></li>
                    <?
                }else{?>
                    <li><a href="/?page=<?=$i?>"><?=$i?></a></li>
                <?}
            }?>
            <li><a href="#">&raquo;</a></li>
        </ul>
    </div>
</div>