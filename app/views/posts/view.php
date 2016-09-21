<div style="margin: 3% 5%">
<h2><a href="/posts/">All</a></h2><br>

<a href="/posts/edit?id= <?= $data['id'] ?>" >Edit </a>
<a href="/posts/delete?id= <?= $data['id'] ?>" >Delete </a>

<h1 align="center"> <?= $data['title'] ?> </h1>
 <h5><?= $data['updated_at'] ?></h5>
<h4> <?= $data['text'] ?> </h4>
</div>