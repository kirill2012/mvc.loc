<div style="margin: 3% 5%">
    <h2><a href="/posts/">All</a></h2><br>
    <form action="<?=URL?>/posts/store" method="post">
        <label for="title">Title</label><br>
        <input type="text" name="title" size="80"> <br>
        <label for="text">Text</label><br>
        <textarea name="text" cols="110" rows="35"></textarea><br>
        <input class="btn" type="submit" value="Create">
    </form>
</div>
