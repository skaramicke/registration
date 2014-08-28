<?php
/**
 * ownCloud - registration
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Pellaeon Lin <pellaeon@hs.ntnu.edu.tw>
 * @copyright Pellaeon Lin 2014
 */

namespace OCA\Registration\Controller;


use \OCP\IRequest;
use \OCP\AppFramework\Http\TemplateResponse;
use \OCP\AppFramework\Controller;

class RegistrationController extends Controller {

	public function __construct($appName, IRequest $request){
		parent::__construct($appName, $request);
	}

	/**
	 * @NoAdminRequired
	 * @PublicPage
	 */
	public function displayRegisterPage($errormsg, $entered) {
		OC_Template::printGuestPage('core/registration', 'register',
			array('errormsg' => $errormsg,
			'entered' => $entered));
	}
	public function index() {
		$params = array('user' => $this->userId);
		return new TemplateResponse('registration', 'main', $params);  // templates/main.php
	}


	/**
	 * Simply method that posts back the payload of the request
	 * @NoAdminRequired
	 */
	public function doEcho($echo) {
		return array('echo' => $echo);
	}


}