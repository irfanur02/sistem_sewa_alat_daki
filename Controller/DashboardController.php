<?php

class DashboardController
{
  private $modelDashboard;

  public function __construct()
  {
    $this->modelDashboard = new DashboardModel();
  }

  public function view()
  {
    $BASE_URL = "http://localhost/projek-sewaalatdaki";
    require_once("Views/admin/view_dashboard.php");
  }
}
