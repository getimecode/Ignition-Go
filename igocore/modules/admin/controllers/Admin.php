<?php defined('BASEPATH') || exit('No direct script access allowed');
/**
 *
 * Admin Controller.
 *
 * Provides redirect front-end functions for default page.
 *
 */
class Admin extends Front_Controller
{
    /** @var array Site's settings to be passed to the view. */
    private $siteSettings;

    /**
     * Setup the required libraries etc.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

    }

    // -------------------------------------------------------------------------
    // Authentication (Login/Logout)
    // -------------------------------------------------------------------------

    /**
     * Present the dashboard view.
     *
     * @return void
     */
    public function index()
    {
        Template::redirect('/admin/dashboard/index');
    }
}