<?php

/**
 * The MIT License (MIT)
 * 
 * Copyright (c) 2015 Pablo D. Sánchez
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */

require_once "Bookmark.class.php";

/**
 * Represents a folder with bookmarks and subfolders.
 * 
 * @package    bmparser
 * @author     Pablo D. Sánchez <pdsanchez.contacto@gmail.com>
 */
class Folder {
	/**
	 * @var String The name of the folder
	 */
	private $name;
	/**
	 * @var String The description of the folder
	 */
	private $description;
	/**
	 * @var array List of Bookmarks objects for this folder
	 */
	private $bookmarkList;
	/**
	 * @var array List of Folder objects (subfolders)
	 */
	private $folderList;
	
	/**
	 * Constructor
	 * 
	 * @param String $name The name of the folder
	 */
	function __construct($name) {
		$this->name = $name;
		$this->folderList = array();
		$this->bookmarkList = array();
	}
	
  /**
	 * Add a new bookmark
	 * 
	 * @param Bookmark $bookmark The Bookmark object
	 */
	public function addBookmark(Bookmark $bookmark) {
		if ($bookmark instanceof Bookmark) {
			array_push($this->bookmarkList, $bookmark);
		}
		else {
			trigger_error("Bookmark object expected");
		}
	}
	
	/**
	 * Create and add a new bookmark
	 * 
	 * @param string $name             The name of the bookmark
	 * @param string $url              The url of the bookmark
	 * @param string $description|null The description of the bookmark
	 * @param string $icon|null        The icon of the bookmark 
	 * 
	 * @return Bookmark    The Bookmark object created
	 */
	public function createBookmark($name, $url, $description=null, $icon=null) {
		$bookmark = new Bookmark($name, $url, $description, $icon);
		array_push($this->bookmarkList, $bookmark);
		return $bookmark;
	}
	
	/**
	 * Gets the bookmark list.
	 * 
	 * @return array    An array of Bookmark objects
	 */
	public function getBookmarks() {
		return $this->bookmarkList;
	}
	
	/**
	 * Add a new folder (subfolder)
	 * 
	 * @param Folder|string $folder The folder object or the name of the folder.
	 * 
	 * @return Folder    The Folder object added
	 */
	public function addFolder($folder) {
		if (! $folder instanceof Folder) {
			$folder = new Folder($folder);
		}
		array_push($this->folderList, $folder);
		return $folder;
	}
	
	/**
	 * Gets the subfolder list.
	 * 
	 * @return array    An array of Folder objects
	 */
	public function getFolders() {
		return $this->folderList;
	}
	
	/**
	 * Gets the name of the folder.
	 * 
	 * @return string    The name of the folder
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Gets the description of the folder.
	 * 
	 * @return string    The description of the folder
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * Sets the description of the folder.
	 * 
	 * @param string $description The description of the folder
	 */
	public function setDescription($description) {
		$this->description = $description;
	}
}

?>