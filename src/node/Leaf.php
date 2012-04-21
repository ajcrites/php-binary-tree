<?php
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
}
?>
