<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
* 
* @author Bo Watts http://c3webstudio.com
* @package CodeIgniter
* @subpackage Gravatar
*
*/

class Gravatar {

	function __construct()
	{
		
	}

	public function get_gravatar_url( $email = '', $size = '100', $default = 'mm' )
	{
		$email = strtolower($email);
		$email = trim($email);

		$base_url = 'https://www.gravatar.com/avatar/';
		$hash = md5( $email );

		$gravatar = $base_url . $hash . '?s='.$size.'d='.$default;

		return $gravatar;
	}

	public function get_gravatar_img( $email = '', $size = '100', $default = 'mm', $class = '' )
	{
		$email = strtolower($email);
		$email = trim($email);

		$base_url = 'https://www.gravatar.com/avatar/';
		$hash = md5( $email );

		$gravatar = '<img src="'.$base_url . $hash . '?s='.$size.'d='.$default.'" class="'.$class.'">';

		return $gravatar;
	}
	
}

/* End of file gravatar.php */
/* Location: ./application/libraries/gravatar.php */
