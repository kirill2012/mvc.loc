<div style="margin: 3% 20%">
    <form action="<?=URL?>/posts/update?id=<?= $data['id'] ?>" method="post">
        <label for="title">Title</label><br>
        <input type="text" name="title" size="80" value="<?= $data['title'] ?>"><br>
        <label for="text">Text</label><br>
        <textarea name="text" cols="110" rows="35"><?= $data['text'] ?></textarea><br>
        <input type="submit" value="Edit">
    </form>
</div>