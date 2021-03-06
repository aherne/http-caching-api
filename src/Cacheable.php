<?php
namespace Lucinda\Caching;

/**
 * Defines blueprints for algorithm that converts requested resource into an ETag or Last-Modified response header value
 */
interface Cacheable {
	/**
	 * Gets etag that matches resource.
	 * 
	 * @return string
	 */
	function getEtag();
	
	/**
	 * Gets last modified time that applies to resource.
	 * 
	 * @return integer
	 */
	function getTime();
}