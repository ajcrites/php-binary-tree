<?php
/**
 * The purpose of this file is to define the Branch class, which is a node that has a value
 * @author Andrew Crites <andrew@gleim.com>
 * @copyright 2012
 * @package php-tree
 */
class Branch implements Node {
   private $left;
   private $right;
   private $value;

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
      return $this->left->inorder()
         . "$this->value "
         . $this->right->inorder();
   }

   public function preorder() {
      return "$this->value "
         . $this->left->preorder()
         . $this->right->preorder();
   }

   public function postorder() {
      return $this->left->postorder()
         . $this->right->postorder()
         . "$this->value ";
   }
}
?>
