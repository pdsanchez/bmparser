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

/**
 * Represents a bookmark.
 * 
 * @package    bmparser
 * @author     Pablo D. Sánchez <pdsanchez.contacto@gmail.com>
 */
class Bookmark {
	private $name;
	private $url;
	private $description;
	private $icon;
	private $tags;
	
	/**
	 * Constructor
	 * 
	 * @param string $name             The name of the bookmark
	 * @param string $url              The url of the bookmark
	 * @param string $description|null The description of the bookmark
	 * @param string $icon|null        The icon of the bookmark 
	 */
	function __construct($name, $url, $description=null, $icon=null) {
		$this->name = $name;
		$this->url = $url;
		$this->description = $description;
		$this->icon = $icon;
		$this->tags = array();
	}
	
	/**
	 * Gets the url of the bookmark.
	 * 
	 * @return string    The url of the bookmark
	 */
	public function getUrl() {
		return $this->url;
	}
	
	/**
	 * Gets the name of the bookmark.
	 * 
	 * @return string    The name of the bookmark
	 */
	public function getName() {
		return $this->name;
	}
	
	/**
	 * Gets the description of the bookmark.
	 * 
	 * @return string    The description of the bookmark
	 */
	public function getDescription() {
		return $this->description;
	}
	
	/**
	 * Gets the icon of the bookmark.
	 * 
	 * @return string    The icon of the bookmark
	 */
	public function getIcon() {
		return $this->icon;
	}
	
	/**
	 * Add a new tag.
	 * 
	 * @param string $tag The tag
	 */
	public function addTag($tag) {
		if (isset($this->tags[$tag])) {
			$this->tags[$tag]++;
		}
		else {
			$this->tags[$tag] = 1;
		}
	}
	
	/**
	 * Gets the tag list
	 * 
	 * @return array    An array of tags
	 */
	public function getTags() {
		return array_keys($this->tags);
	}
}

?>