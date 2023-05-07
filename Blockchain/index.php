<?php

require "Chain.php";
require "Block.php";

$chain = new Chain();
$chain->addBlock(new Block("Ústí nad Labem"));
$chain->addBlock(new Block("Varnsdorf"));
$chain->addBlock(new Block("Děčín"));

var_dump($chain->isValid());

$block = $chain->getBlock(1);
if ($block !== null) {
    var_dump($block->content);
}

$lastBlock = $chain->getLastBlock();
if ($lastBlock !== null) {
    var_dump($lastBlock->id); 
}