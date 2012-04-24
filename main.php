<?php
/**
 * The purpose of this file is to run an example of the Tree class and its traversal methods
 * As a test to make sure the class is at least basically working:
   Level-Order (input): F B G A D I C E H
   Inorder: A B C D E F G H I
   Preorder: F B A D C E G I H
   Postorder: A C E D B H I G F
 * @author Andrew Crites <explosion-pills@aysites.com>
 */
require 'src/Tree.php';
require 'src/node/Node.php';
require 'src/node/Branch.php';
require 'src/node/Leaf.php';

$values = array_slice($argv, 1);

$tree = new Tree;
$tree->addAll($values);

echo <<<TEXT
Inorder: {$tree->inorder()}
Preorder: {$tree->preorder()}
Postorder: {$tree->postorder()}

TEXT;
?>
