<?php
  $ROOT_DIR="../";
  include $ROOT_DIR . "mb-admin-templates/header.php";
  $user_list = user()->list();
  $totalClient = user()->count("role='Client'");
  $totalManager = user()->count("role='Manager'");
  $totalVa = user()->count("role='Va'");
?>
<div class="row mt-5">
          <div class="col-lg-6 col-xl-3 mb-4">
              <div class="card bg-primary text-white h-100">
                  <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="me-3">

                              <div class="text-white-75 small">CLIENTS</div>
                              <div class="text-lg fw-bold"><?=$totalClient?></div>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar feather-xl text-white-50"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
                      </div>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between small">
                      <a class="text-white stretched-link" href="user.php?role=Client">View Clients</a>
                      <div class="text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-xl-3 mb-4">
              <div class="card bg-warning text-white h-100">
                  <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="me-3">
                              <div class="text-white-75 small">PROJECT MANAGERS</div>
                              <div class="text-lg fw-bold"><?=$totalManager?></div>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign feather-xl text-white-50"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                      </div>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between small">
                      <a class="text-white stretched-link" href="user.php?role=Manager">View Managers</a>
                      <div class="text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6 col-xl-3 mb-4">
              <div class="card bg-success text-white h-100">
                  <div class="card-body">
                      <div class="d-flex justify-content-between align-items-center">
                          <div class="me-3">
                              <div class="text-white-75 small">VIRTUAL ASSISTANTS</div>
                              <div class="text-lg fw-bold"><?=$totalVa?></div>
                          </div>
                          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square feather-xl text-white-50"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                      </div>
                  </div>
                  <div class="card-footer d-flex align-items-center justify-content-between small">
                      <a class="text-white stretched-link" href="user.php?role=VA">View VA's</a>
                      <div class="text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                  </div>
              </div>
          </div>
          <div class="col-xxl-4 col-xl-6 mb-4">
              <div class="card card-header-actions h-100">
                  <div class="card-header">
                      Progress Tracker

                  </div>
                  <div class="card-body">
                      <h4 class="small">
                          Server Migration
                          <span class="float-end fw-bold">20%</span>
                      </h4>
                      <div class="progress mb-4"><div class="progress-bar bg-danger" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div></div>
                      <h4 class="small">
                          Sales Tracking
                          <span class="float-end fw-bold">40%</span>
                      </h4>
                      <div class="progress mb-4"><div class="progress-bar bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div></div>
                      <h4 class="small">
                          Customer Database
                          <span class="float-end fw-bold">60%</span>
                      </h4>
                      <div class="progress mb-4"><div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div></div>
                      <h4 class="small">
                          Payout Details
                          <span class="float-end fw-bold">80%</span>
                      </h4>
                      <div class="progress mb-4"><div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div></div>
                      <h4 class="small">
                          Account Setup
                          <span class="float-end fw-bold">Complete!</span>
                      </h4>
                      <div class="progress"><div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div></div>
                  </div>
                  <div class="card-footer position-relative">
                      <div class="d-flex align-items-center justify-content-between small text-body">

                      </div>
                  </div>
              </div>
          </div>






<?php include $ROOT_DIR . "mb-admin-templates/footer.php"; ?>
