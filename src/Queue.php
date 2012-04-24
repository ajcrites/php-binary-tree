<?php
/**
 * The purpose of this file is to define a simple Queue class
 * @author Andrew Crites <andrew@gleim.com>
 * @copyright 2012
 * @package php-binary-tree
 */

class Queue {
   private $q = array();

   public function enqueue(Node $node) {
      $this->q[] = $node;
   }

   public function dequeue() {
      return array_shift($this->q);
   }

   public function peek() {
      return isset($this->q[0]) ? $this->q[0] : null;
   }
}
?>
