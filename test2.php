<?php
# FRONT CONTROLLER

error_reporting(E_ALL);
ini_set("display_errors", "1");

include_once "Folder.class.php";

$folder = new Folder("F1");
$sf2 = $folder->addFolder(new Folder("F--2"));
$sf3 = $folder->addFolder("F--3");

$sf2->setDescription("desc2");
$sf3->setDescription("3desc3");

$sf3->addBookmark(new Bookmark("name1", "url1", "desc1", "icon1"));
$sf3->createBookmark("3name1", "3url1");
$bm = $sf3->createBookmark("2name1", "2url1", "2desc1", "2icon1");

$bm->addTag("kk");
$bm->addTag("aa");
$bm->addTag("bb");
$bm->addTag("kk");
$bm->addTag("cc");

echo "<p>";
echo "<PRE>";
print_r($folder);
echo "</PRE>";
echo "<p>===============================</p>";


?>