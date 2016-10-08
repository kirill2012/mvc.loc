<div style="margin: 3% 5%">
<h2><a href="/posts/">All</a></h2><br>

<a href="/posts/edit?id= <?= $post->id ?>" >Edit </a>
<a href="/posts/delete?id= <?= $post->id ?>" >Delete </a>

<h1 align="center"> <?= $post->title ?> </h1>
 <h5><?= $post->updated_at ?></h5>
<h4> <?= $post->text ?> </h4>
</div>