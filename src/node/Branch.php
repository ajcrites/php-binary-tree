<?php
/**
 * The purpose of this file is to define the Branch class, which is a node that has a value
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package php-binary-tree
 */

/**
 * Non-null tree node class.  Has a value and left and right children
 * @see Node for method detail
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

   public function queue(Queue $q) {
      $q->enqueue($this->left);
      $q->enqueue($this->right);
      return "$this->value ";
   }

   public function toArray() {
      return array('value' => $this->value
         , 'left' => $this->left->toArray()
         , 'right' => $this->right->toArray()
      );
   }

   public function height() {
      $lefth = $this->left->height();
      $righth = $this->right->height();
      return ($lefth > $righth) ? $lefth + 1 : $righth + 1;
   }
}
?>
