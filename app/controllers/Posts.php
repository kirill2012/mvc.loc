<?php

namespace controllers;

class Posts extends Controller
{
    public function index(){
        $data = \models\Posts::all();
        $this->render(__CLASS__, __METHOD__, $data);
    }

    public function view($id = ''){
        $data = \models\Posts::find($id);
        $this->render(__CLASS__, __METHOD__, $data);
    }

    public function create(){
        $this->render(__CLASS__, __METHOD__);
    }

    public function store(){
        $post = new \models\Posts();
        $post->title = $_POST['title'];
        $post->text = $_POST['text'];
        $post->save();
        echo '<script type="text/javascript"> window.location.href="' . URL . '/posts"</script>';
    }

    public function edit($id = ''){
        $data = \models\Posts::find($id);
        $this->render(__CLASS__, __METHOD__, $data);
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