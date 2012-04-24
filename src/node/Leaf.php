<?php
/**
 * Empty Node class.  This could be replaced simply by NULL, but with Leaf, we obviate conditional
 * checks on a null value
 */
class Leaf implements Node {
   public function insert($value) {
      return new Branch($value);
   }
   /**#@+
    * Break the traversal chain
    */
   public function inorder() {}
   public function preorder() {}
   public function postorder() {}
   /**#@-*/

   public function queue(Queue $q) {}
}
?>
