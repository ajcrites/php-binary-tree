<?php
interface Node {
   /**
    * Add a node to the left or right branch, as appropriate
    */
   function insert($value);

   /**#@+
    * Traversal methods
    */
   function inorder();
   function preorder();
   function postorder();
   /**#@-*/
}
?>
