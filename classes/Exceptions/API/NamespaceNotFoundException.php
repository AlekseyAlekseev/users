<?php
namespace StartupAPI\Exceptions\API;

/**
 * Thrown when API namespace is not found
 */
class NamespaceNotFoundException extends NotFoundException {

	private $namespace_slug;

	function __construct($namespace_slug, $message = "API Namespace not found") {
		parent::__construct($message);

		$this->namespace_slug = $namespace_slug;
		$this->message = $message . ": $namespace_slug";
	}

	private function getNamespaceSlug() {
		return $this->namespace_slug;
	}

}
