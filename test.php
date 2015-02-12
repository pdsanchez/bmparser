<?php
# FRONT CONTROLLER

error_reporting(E_ALL);
ini_set("display_errors", "1");

include_once "BookmarkHtmlFileParser.class.php";

$scrape = new BookmarkHtmlFileParser("tmp/bookmarks_prb.html");
$folderList = $scrape->getBookmarksTree();//$scrape->getAllBookmarks();

//$oneEntry = $allUsers->fetchObject();
//$testOut = print_r($oneEntry, true);
//$trace->info("<pre>$testOut</pre>");

echo "<PRE>";
print_r($folderList);
echo "</PRE>";

?>