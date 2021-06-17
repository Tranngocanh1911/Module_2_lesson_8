<?php
include_once ('Node.php');
include_once ('LinkedList.php');

$linkedList = new LinkedList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNode = $linkedList->totalNodes();
$linkData = $linkedList->readList();

echo $totalNode;
echo '<br>';
echo implode('-', $linkedList);