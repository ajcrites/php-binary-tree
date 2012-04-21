<?php
class Node {
   public $left = null;
   public $right = null;
   public $value;

   public function __construct($value) {
      $this->value = $value;
   }

   public function insert(Node $node) {
      if ($node->value < $this->value) {
         if ($this->left != null) {
            $this->left->insert($node);
         }
         else {
            $this->left = $node;
         }
      }
      else if ($node->value > $this->value) {
         if ($this->right != null) {
            $this->right->insert($node);
         }
         else {
            $this->right = $node;
         }
      }
      else {
         throw new TreeException("Node values cannot be equal");
      }
   }
}
?>
