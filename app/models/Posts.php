<?php

namespace models;

class Posts extends \core\Model
{
    public function userdata()
    {
        return $this->belongsTo('\Models\Users', 'author_id', 'id');
    }
}