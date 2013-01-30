<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 
* @author Bo Watts http://c3webstudio.com
* @package CodeIgniter
* @subpackage Gravatar
*
*/

class Gravitar {

	function __construct()
	{
		
	}

	public function get_gravitar_url( $email = '', $size = '100', $default = 'mm' )
	{
		$email = strtolower($email);
		$email = trim($email);

		$base_url = 'https://www.gravatar.com/avatar/';
		$hash = md5( $email );

		$gravitar = $base_url . $hash . '?s='.$size.'d='.$default;

		return $gravitar;
	}

	public function get_gravitar_img( $email = '', $size = '100', $default = 'mm', $class = '' )
	{
		$email = strtolower($email);
		$email = trim($email);

		$base_url = 'https://www.gravatar.com/avatar/';
		$hash = md5( $email );

		$gravitar = '<img src="'.$base_url . $hash . '?s='.$size.'d='.$default.'" class="'.$class.'">';

		return $gravitar;
	}
	
}

/* End of file gravitar.php */
/* Location: ./application/libraries/gravitar.php */