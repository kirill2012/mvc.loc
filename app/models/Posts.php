<?php

namespace models;

class Posts
{
    public function findall(){

        return [
                    ['header' => 'header1', 'text' => 'text1'],
                    ['header' => 'header2', 'text' => 'text2'],
                    ['header' => 'header3', 'text' => 'text3']
                ];

        /*
        $mysqli = new \mysqli('localhost', 'root', '', 'mvc');

        $query = "
                    SELECT *
                    FROM posts
                    ";

        if ($result = $mysqli->query($query)) {

            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        $mysqli->close();

        return $data;
        */

    }

    public function findone($id){

        return ['header' => 'header'.$id, 'text' => 'text'.$id];

/*
        $mysqli = new \mysqli('localhost', 'root', '', 'mvc');

        $query = "
                    SELECT *
                    FROM posts
                    WHERE id=$id
                    ";

        if ($result = $mysqli->query($query)) {

            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        $mysqli->close();

        return $data;
*/
    }
}