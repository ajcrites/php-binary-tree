<?php
class Tree {
   private $root = null;
   private $counter = 1;

   public function add($value) {
      if ($this->root == null) {
         $this->root = new Node($value);
      }
      else {
         $this->root->insert(new Node($value));
      }
   }

   public function addAll($values) {
      foreach ($values as $value) {
         $this->add($value);
      }
   }

   public function inorder() {
      $this->traverseInorder($this->root);
   }

   private function traverseInorder(Node $node = null) {
      if ($node == null) {
         return;
      }
      $this->traverseInorder($node->left);
      echo "$node->value ";
      $this->traverseInorder($node->right);
   }

   public function preorder() {
      $this->traversePreorder($this->root);
   }

   private function traversePreorder(Node $node = null) {
      if ($node == null) {
         return;
      }

      echo "$node->value ";
      $this->traversePreorder($node->left);
      $this->traversePreorder($node->right);
   }

   public function postorder() {
      $this->traversePostorder($this->root);
   }

   private function traversePostorder(Node $node = null) {
      if ($node == null) {
         return;
      }

      $this->traversePostorder($node->left);
      $this->traversePostorder($node->right);
      echo "$node->value ";
   }
}
?>
