<?php namespace Tresyz\Manager\Admin;
 
use App\Models\Page;
use Input, Redirect, Sentry, Str;

class BaseAdminController extends \BaseController {

  protected $layout = 'manager::admin.templates.layout';

}