<?php
/**
 * The purpose of this file is to define Node, an interface for all methods that node
 * representations must implement in order to work with Tree
 * @author Andrew Crites <explosion-pills@aysites.com>
 * @copyright 2012
 * @package php-binary-tree
 */

/**
 * Node representation
 */
interface Node {
   /**
    * Add a node to the left or right branch, as appropriate
    * @param mixed
    */
   function insert($value);

   /**#@+
    * Traversal methods
    */
   function inorder();
   function preorder();
   function postorder();
   /**#@-*/

   /**
    * Enqueue the left and right nodes, if available, and return the value for level-order
    */
   function queue(Queue $q);

   /**
    * Convert tree to an array with exposed values/branches
    */
   function toArray();

   /**
    * Calculate tree height by comparing maximum left/right branch length
    */
   function height();
}
?>
