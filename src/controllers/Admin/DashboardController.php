<?php namespace Tresyz\Manager\Admin;
 
use App\Models\Page;
use Input, Redirect, Sentry, Str;

class DashboardController extends BaseAdminController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $this->layout->content = \View::make('manager::admin.dashboard.index');
  }


}