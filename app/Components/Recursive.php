<?php

namespace App\Components;

class Recursive {

    private $data;
    private $htmlSelect = '';

    public function __contruct($data) {

        $this->data  = $data;

    }
    public function categoryRecursive($id = 0 , $text = '') {


        foreach ($this->data as $value) {
            if($value['parent_id'] == $id) {
                $this->htmlSelect .= "<option>". $text. $value['name']."</option>";
                $this->categoryRecursive($value['id'], $text.'-');
            }
        }

            return $this->htmlSelect;
    }
}
