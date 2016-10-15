<?php

namespace controllers;

class PostsController extends \core\Controller
{
    public function index($page = 1, $perpage=15){
        $title = 'Posts';
        $lastPage = ceil(\models\Posts::count() / $perpage);
        $posts = \models\Posts::take($perpage)->skip(($page-1)*$perpage)->get();
        $data = compact('title', 'posts', 'lastPage');
        $this->render($data);
    }

    public function view($id = ''){
        $title = 'View';
        $post = \models\Posts::find($id);
        $data = compact('title', 'post');
        $this->render($data);
    }

    public function create(){
        $this->render();
    }

    public function store(){
        $post = new \models\Posts();
        $post->title = $_POST['title'];
        $post->text = $_POST['text'];
        $post->save();
        echo '<script type="text/javascript"> window.location.href="' . URL . '/posts"</script>';
    }

    public function edit($id = ''){
        $title = 'Edit';
        $post = \models\Posts::find($id);
        $data = compact('title', 'post');
        $this->render($data);
    }

    public function update($id = ''){
        $post = \models\Posts::find($id);
        $post->title = $_POST['title'];
        $post->text = $_POST['text'];
        $post->save();
        echo '<script type="text/javascript"> window.location.href="' . URL . '/posts"</script>';
    }

    public function delete($id = ''){
        \models\Posts::destroy($id);
        echo '<script type="text/javascript"> window.location.href="' . URL . '/posts"</script>';
    }
}