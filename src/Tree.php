<?php
class Tree {
   private $root;

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
      return $this->root->inorder();
   }

   public function preorder() {
      return $this->root->preorder();
   }

   public function postorder() {
      return $this->root->postorder();
   }
}

class TreeException extends Exception {}
?>
