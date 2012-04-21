<?php
class Branch implements Node {
   public $left;
   public $right;
   public $value;

   public function __construct($value) {
      $this->value = $value;
      $this->left = new Leaf;
      $this->right = new Leaf;
   }

   public function insert($value) {
      if ($value < $this->value) {
         $this->left = $this->left->insert($value);
      }
      else if ($value > $this->value) {
         $this->right = $this->right->insert($value);
      }
      else {
         throw new TreeException("Node values cannot be equal");
      }
      return $this;
   }

   public function inorder() {
      $this->left->inorder();
      echo "$this->value " ;
      $this->right->inorder();
   }

   public function preorder() {
      echo "$this->value ";
      $this->left->preorder();
      $this->right->preorder();
   }

   public function postorder() {
      $this->left->postorder();
      $this->right->postorder();
      echo "$this->value ";
   }
}
?>
