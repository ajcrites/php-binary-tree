<?php
class Tree {
   private $root;
   private $counter = 1;

   public function __construct() {
      $this->root = new Leaf;
   }

   public function add($value) {
      $this->root = $this->root->insert($value);
   }

   public function addAll($values) {
      foreach ($values as $value) {
         $this->add($value);
      }
   }

   public function inorder() {
      $this->root->inorder();
   }

   public function preorder() {
      $this->root->preorder();
   }

   public function postorder() {
      $this->root->postorder();
   }
}

class TreeException extends Exception {}
?>
