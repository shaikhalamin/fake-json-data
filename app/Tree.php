<?php

namespace App;



class Tree
{
    public $key;
 
    public $parent  = null;
    public $left    = null;
    public $right   = null;
 
    public function __construct($key) 
    {
        $this->key = $key;
    }
 
    public function insert(Tree $n) 
    {
        if ($this->key < $n->key) {
            if ($this->right == null) {
                // insert
                $this->right = $n;
                $n->parent = $this;
            } else {
                $this->right->insert($n);
            }
        }
        if ($this->key > $n->key) {
            if ($this->left == null) {
                // insert
                $this->left = $n;
                $n->parent = $this;
            } else {
                $this->left->insert($n);
            }
        }
    }
}
