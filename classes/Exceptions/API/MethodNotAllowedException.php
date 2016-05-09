<?php
namespace StartupAPI\Exceptions\API;

/**
 * Thrown when no endpoints accept HTTP method used
 */
class MethodNotAllowedException extends APIException {

	private $method;

	/**
	 * @param string $method HTTP Method
	 * @param string $message Exception message
	 * @param int $code Exception code
	 * @param Exception $previous previous exception
	 */
	function __construct($method = null, $message = "HTTP Method not allowed", $code = null, $previous = null) {
		parent::__construct($message, $code, $previous);

		$this->method = $method;
		if (!is_null($this->method)) {
			$this->message = $message . ": $method";
		}
	}

	private function getMethod() {
		return $this->method;
	}

}
