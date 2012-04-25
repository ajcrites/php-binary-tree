<?php
class Tree {
   /**
    * @var Node base node of the tree
    */
   private $root;

   /**
    * Create a new Tree and initialize the empty root node
    */
   public function __construct() {
      $this->root = new Leaf;
   }

   /**
    * Add a value to the tree
    * @param mixed value (preferably this is comparable to other values you will use)
    */
   public function add($value) {
      $this->root = $this->root->insert($value);
   }

   /**
    * Add multiple values at once
    * @param array
    */
   public function addAll($values) {
      foreach ($values as $value) {
         $this->add($value);
      }
   }

   /**#@+
    * Perform the indicated traversal
    * TODO the Queue dependency should probably be injected
    * @return string space-separated values in traversal order
    */
   public function levelorder() {
      $q = new Queue;
      $q->enqueue($this->root);
      $lot = '';
      while ($q->peek()) {
         $node = $q->dequeue();
         $lot .= $node->queue($q);
      }
      return $lot;
   }

   public function toArray() {
      $nodes = $this->root->toArray();

      return array('root' => $nodes, 'height' => $this->root->height());
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
   /**#@-*/
}

/**
 * Exception for any unexpected error in the php-binary-tree project
 */
class TreeException extends Exception {}
?>
