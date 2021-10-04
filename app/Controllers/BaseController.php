<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;


/**
 * Class BaseController
 *
 * BaseController provides a convenient place for loading components
 * and performing functions that are needed by all your controllers.
 * Extend this class in any new controllers:
 *     class Home extends BaseController
 *
 * For security be sure to declare any new methods as protected or private.
 */

class BaseController extends Controller
{
	/**
	 * Instance of the main Request object.
	 *
	 * @var IncomingRequest|CLIRequest
	 */
	protected $request;

	/**
	 * An array of helpers to be loaded automatically upon
	 * class instantiation. These helpers will be available
	 * to all other controllers that extend BaseController.
	 *
	 * @var array
	 */
	protected $helpers = [];
	protected $session;
	/**
	 * Constructor.
	 *
	 * @param RequestInterface  $request
	 * @param ResponseInterface $response
	 * @param LoggerInterface   $logger
	 */
	//globaly use in all controller
	
	public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
	{
		// Do Not Edit This Line
		parent::initController($request, $response, $logger);

		//--------------------------------------------------------------------
		// Preload any models, libraries, etc, here.
		//--------------------------------------------------------------------
		 $this->session = \Config\Services::session();

		if (!defined('PATH'))
			define('PATH', base_url());
		if (!defined('BASE'))
			define('BASE', base_url() . '/');
		if (!defined('ASSETS'))
			define('ASSETS', base_url() . '/assets/');
		if (!defined('TITLE'))
			define('TITLE', 'KoffeeKodes IT Solutions');
		if (!defined('LOGODARK'))
			define('LOGODARK', ASSETS . '/img/brand/logo_dark.png');
		if (!defined('LOGO'))
			define('LOGO', PATH . '/uploads/company/logo.png');
		if (!defined('LOGOICON'))
			define('LOGOICON', '/uploads/company/logo.png');


		helper('base');
		
		$this->validation =  \Config\Services::validation();
	}
}
