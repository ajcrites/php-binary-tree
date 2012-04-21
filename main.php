<?php
require 'Tree.php';
require 'Node.php';

$values = array_slice($argv, 1);

$tree = new Tree;
$tree->addAll($values);

echo "Inorder: ";
$tree->inorder();
echo "\n";
echo "Preorder: ";
$tree->preorder();
echo "\n";
echo "Postorder: ";
$tree->postorder();
echo "\n";
?>
