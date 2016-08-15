<? php class Person {
	private $firstname;
	public
	function getName($fname) {
		return $this - > firstname = $fname;
	}
}
class Singleton {
	private static $instance = NULL;
	private
	function _construct() {}
	private
	function _clone() {}
	public static
	function getInstance() {
		if (!isset(self: : instance)) {
			self: : instance = new $instance("Noel");
		}
		return
		self::$instance;
	}
} ?>