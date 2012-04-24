<?php
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
}
?>
