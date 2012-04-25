<?php
/**
 * The purpose of this file is to provide a wrapper for the Binary Tree Node collection.
 * This essentially points to the root node and wraps functionality associated with it.
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package php-binary-tree
 */

/**
 * Tree container class
 */
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

   /**
    * Convert the tree representation to an array with the root node and height as keys
    * TODO add width as well
    */
   public function toArray() {
      $nodes = $this->root->toArray();

      return array('root' => $nodes, 'height' => $this->root->height());
   }
}

/**
 * Exception for any unexpected error in the php-binary-tree project
 */
class TreeException extends Exception {}
?>
