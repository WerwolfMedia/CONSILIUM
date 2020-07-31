<?php
include_once $_SERVER['DOCUMENT_ROOT'] . '/config/config.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/functions.php';

$sitelevel = "5";
if (!login_check($sitelevel)) {
  header("Location: /login.php");
  die();
}

include_once $_SERVER['DOCUMENT_ROOT'] . '/include/header.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/include/menu.php';

?>

<div class="content">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header">
            <div class="row align-items-center">
              <div class="col-auto">
                <h2 class="page-title">
                  Tables
                </h2>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-vcenter card-table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td >Paweł Kuna</td>
                      <td class="text-muted" >
                        UI Designer, Training
                      </td>
                      <td class="text-muted"><a href="#" class="text-reset">paweluna@howstuffworks.com</a></td>
                      <td class="text-muted" >
                        User
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Jeffie Lewzey</td>
                      <td class="text-muted" >
                        Chemical Engineer, Support
                      </td>
                      <td class="text-muted"><a href="#" class="text-reset">jlewzey1@seesaa.net</a></td>
                      <td class="text-muted" >
                        Admin
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Mallory Hulme</td>
                      <td class="text-muted" >
                        Geologist IV, Support
                      </td>
                      <td class="text-muted"><a href="#" class="text-reset">mhulme2@domainmarket.com</a></td>
                      <td class="text-muted" >
                        User
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Dunn Slane</td>
                      <td class="text-muted" >
                        Research Nurse, Sales
                      </td>
                      <td class="text-muted"><a href="#" class="text-reset">dslane3@epa.gov</a></td>
                      <td class="text-muted" >
                        Owner
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Emmy Levet</td>
                      <td class="text-muted" >
                        VP Product Management, Accounting
                      </td>
                      <td class="text-muted"><a href="#" class="text-reset">elevet4@senate.gov</a></td>
                      <td class="text-muted" >
                        Admin
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-vcenter card-table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Email</th>
                      <th>Role</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td >Maryjo Lebarree</td>
                      <td class="text-muted" >
                        Civil Engineer, Product Management
                      </td>
                      <td class="text-muted"><a href="#" class="text-reset">mlebarree5@unc.edu</a></td>
                      <td class="text-muted" >
                        User
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Egan Poetz</td>
                      <td class="text-muted" >
                        Research Nurse, Engineering
                      </td>
                      <td class="text-muted"><a href="#" class="text-reset">epoetz6@free.fr</a></td>
                      <td class="text-muted" >
                        Admin
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Kellie Skingley</td>
                      <td class="text-muted" >
                        Teacher, Services
                      </td>
                      <td class="text-muted"><a href="#" class="text-reset">kskingley7@columbia.edu</a></td>
                      <td class="text-muted" >
                        User
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Christabel Charlwood</td>
                      <td class="text-muted" >
                        Tax Accountant, Engineering
                      </td>
                      <td class="text-muted"><a href="#" class="text-reset">ccharlwood8@nifty.com</a></td>
                      <td class="text-muted" >
                        Owner
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >Haskel Shelper</td>
                      <td class="text-muted" >
                        Staff Scientist, Legal
                      </td>
                      <td class="text-muted"><a href="#" class="text-reset">hshelper9@woothemes.com</a></td>
                      <td class="text-muted" >
                        Admin
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-vcenter card-table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Role</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td >
                        <div class="d-flex lh-sm py-1 align-items-center">
                          <span class="avatar mr-2" style="background-image: url(./static/avatars/006m.jpg)"></span>
                          <div class="flex-fill">
                            <div class="strong">Lorry Mion</div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset">lmiona@livejournal.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td >
                        <div>Automation Specialist IV</div>
                        <div class="text-muted text-h5">Accounting</div>
                      </td>
                      <td class="text-muted" >
                        User
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <div class="d-flex lh-sm py-1 align-items-center">
                          <span class="avatar mr-2" style="background-image: url(./static/avatars/004f.jpg)"></span>
                          <div class="flex-fill">
                            <div class="strong">Leesa Beaty</div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset">lbeatyb@alibaba.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td >
                        <div>Editor</div>
                        <div class="text-muted text-h5">Services</div>
                      </td>
                      <td class="text-muted" >
                        Admin
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <div class="d-flex lh-sm py-1 align-items-center">
                          <span class="avatar mr-2" style="background-image: url(./static/avatars/007m.jpg)"></span>
                          <div class="flex-fill">
                            <div class="strong">Perren Keemar</div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset">pkeemarc@yahoo.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td >
                        <div>Analog Circuit Design manager</div>
                        <div class="text-muted text-h5">Services</div>
                      </td>
                      <td class="text-muted" >
                        User
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <div class="d-flex lh-sm py-1 align-items-center">
                          <span class="avatar mr-2">SA</span>
                          <div class="flex-fill">
                            <div class="strong">Sunny Airey</div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset">saireyd@prlog.org</a></div>
                          </div>
                        </div>
                      </td>
                      <td >
                        <div>Nuclear Power Engineer</div>
                        <div class="text-muted text-h5">Engineering</div>
                      </td>
                      <td class="text-muted" >
                        Owner
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                    <tr>
                      <td >
                        <div class="d-flex lh-sm py-1 align-items-center">
                          <span class="avatar mr-2" style="background-image: url(./static/avatars/009m.jpg)"></span>
                          <div class="flex-fill">
                            <div class="strong">Geoffry Flaunders</div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset">gflaunderse@loc.gov</a></div>
                          </div>
                        </div>
                      </td>
                      <td >
                        <div>Software Test Engineer II</div>
                        <div class="text-muted text-h5">Accounting</div>
                      </td>
                      <td class="text-muted" >
                        Admin
                      </td>
                      <td>
                        <a href="#">Edit</a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="box">
            <div class="card">
              <div class="table-responsive">
                <table class="table table-vcenter table-mobile-md card-table">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Role</th>
                      <th class="w-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td data-label="Name">
                        <div class="d-flex lh-sm py-1 align-items-center">
                          <span class="avatar mr-2" style="background-image: url(./static/avatars/010m.jpg)"></span>
                          <div class="flex-fill">
                            <div class="strong">Thatcher Keel</div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset">tkeelf@blogger.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Title">
                        <div>VP Sales</div>
                        <div class="text-muted text-h5">Business Development</div>
                      </td>
                      <td class="text-muted" data-label="Role">
                        User
                      </td>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="#" class="btn btn-white">
                            Edit
                          </a>
                          <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="Name">
                        <div class="d-flex lh-sm py-1 align-items-center">
                          <span class="avatar mr-2" style="background-image: url(./static/avatars/005f.jpg)"></span>
                          <div class="flex-fill">
                            <div class="strong">Dyann Escala</div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset">descalag@usatoday.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Title">
                        <div>Mechanical Systems Engineer</div>
                        <div class="text-muted text-h5">Sales</div>
                      </td>
                      <td class="text-muted" data-label="Role">
                        Admin
                      </td>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="#" class="btn btn-white">
                            Edit
                          </a>
                          <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="Name">
                        <div class="d-flex lh-sm py-1 align-items-center">
                          <span class="avatar mr-2" style="background-image: url(./static/avatars/006f.jpg)"></span>
                          <div class="flex-fill">
                            <div class="strong">Avivah Mugleston</div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset">amuglestonh@intel.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Title">
                        <div>Actuary</div>
                        <div class="text-muted text-h5">Sales</div>
                      </td>
                      <td class="text-muted" data-label="Role">
                        User
                      </td>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="#" class="btn btn-white">
                            Edit
                          </a>
                          <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="Name">
                        <div class="d-flex lh-sm py-1 align-items-center">
                          <span class="avatar mr-2">AA</span>
                          <div class="flex-fill">
                            <div class="strong">Arlie Armstead</div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset">aarmsteadi@yellowpages.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Title">
                        <div>VP Quality Control</div>
                        <div class="text-muted text-h5">Accounting</div>
                      </td>
                      <td class="text-muted" data-label="Role">
                        Owner
                      </td>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="#" class="btn btn-white">
                            Edit
                          </a>
                          <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td data-label="Name">
                        <div class="d-flex lh-sm py-1 align-items-center">
                          <span class="avatar mr-2" style="background-image: url(./static/avatars/008f.jpg)"></span>
                          <div class="flex-fill">
                            <div class="strong">Tessie Curzon</div>
                            <div class="text-muted text-h5"><a href="#" class="text-reset">tcurzonj@hp.com</a></div>
                          </div>
                        </div>
                      </td>
                      <td data-label="Title">
                        <div>Research Nurse</div>
                        <div class="text-muted text-h5">Product Management</div>
                      </td>
                      <td class="text-muted" data-label="Role">
                        Admin
                      </td>
                      <td>
                        <div class="btn-list flex-nowrap">
                          <a href="#" class="btn btn-white">
                            Edit
                          </a>
                          <div class="dropdown">
                            <button class="btn btn-white dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a class="dropdown-item" href="#">
                                Action
                              </a>
                              <a class="dropdown-item" href="#">
                                Another action
                              </a>
                            </div>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Invoices</h3>
            </div>
            <div class="card-body border-bottom py-3">
              <div class="d-flex">
                <div class="text-muted">
                  Show
                  <div class="mx-2 d-inline-block">
                    <input type="text" class="form-control form-control-sm" value="8" size="3">
                  </div>
                  entries
                </div>
                <div class="ml-auto text-muted">
                  Search:
                  <div class="ml-2 d-inline-block">
                    <input type="text" class="form-control form-control-sm">
                  </div>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <table class="table card-table table-vcenter text-nowrap datatable">
                <thead>
                  <tr>
                    <th class="w-1"><input class="form-check-input m-0 align-middle" type="checkbox"></th>
                    <th class="w-1">No. <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-sm text-dark icon-thick" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="6 15 12 9 18 15" /></svg>
                    </th>
                    <th>Invoice Subject <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                    </th>
                    <th>Client <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                    </th>
                    <th>VAT No. <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                    </th>
                    <th>Created <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                    </th>
                    <th>Status <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                    </th>
                    <th>Price <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="7 8 3 12 7 16" /><polyline points="17 8 21 12 17 16" /><line x1="14" y1="4" x2="10" y2="20" /></svg>
                    </th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001401</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Design Works</a></td>
                    <td>
                      <span class="flag flag-country-us"></span>
                      Carlson Limited
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      15 Dec 2017
                    </td>
                    <td>
                      <span class="status-icon bg-success"></span> Paid
                    </td>
                    <td>$887</td>
                    <td class="text-right">
                      <span class="dropdown ml-1">
                        <button class="btn btn-white btn-sm dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001402</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">UX Wireframes</a></td>
                    <td>
                      <span class="flag flag-country-gb"></span>
                      Adobe
                    </td>
                    <td>
                      87956421
                    </td>
                    <td>
                      12 Apr 2017
                    </td>
                    <td>
                      <span class="status-icon bg-warning"></span> Pending
                    </td>
                    <td>$1200</td>
                    <td class="text-right">
                      <span class="dropdown ml-1">
                        <button class="btn btn-white btn-sm dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001403</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">New Dashboard</a></td>
                    <td>
                      <span class="flag flag-country-de"></span>
                      Bluewolf
                    </td>
                    <td>
                      87952621
                    </td>
                    <td>
                      23 Oct 2017
                    </td>
                    <td>
                      <span class="status-icon bg-warning"></span> Pending
                    </td>
                    <td>$534</td>
                    <td class="text-right">
                      <span class="dropdown ml-1">
                        <button class="btn btn-white btn-sm dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001404</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Landing Page</a></td>
                    <td>
                      <span class="flag flag-country-br"></span>
                      Salesforce
                    </td>
                    <td>
                      87953421
                    </td>
                    <td>
                      2 Sep 2017
                    </td>
                    <td>
                      <span class="status-icon bg-secondary"></span> Due in 2 Weeks
                    </td>
                    <td>$1500</td>
                    <td class="text-right">
                      <span class="dropdown ml-1">
                        <button class="btn btn-white btn-sm dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001405</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Marketing Templates</a></td>
                    <td>
                      <span class="flag flag-country-pl"></span>
                      Printic
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      29 Jan 2018
                    </td>
                    <td>
                      <span class="status-icon bg-danger"></span> Paid Today
                    </td>
                    <td>$648</td>
                    <td class="text-right">
                      <span class="dropdown ml-1">
                        <button class="btn btn-white btn-sm dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001406</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Sales Presentation</a></td>
                    <td>
                      <span class="flag flag-country-br"></span>
                      Tabdaq
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      4 Feb 2018
                    </td>
                    <td>
                      <span class="status-icon bg-secondary"></span> Due in 3 Weeks
                    </td>
                    <td>$300</td>
                    <td class="text-right">
                      <span class="dropdown ml-1">
                        <button class="btn btn-white btn-sm dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001407</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Logo & Print</a></td>
                    <td>
                      <span class="flag flag-country-us"></span>
                      Apple
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      22 Mar 2018
                    </td>
                    <td>
                      <span class="status-icon bg-success"></span> Paid Today
                    </td>
                    <td>$2500</td>
                    <td class="text-right">
                      <span class="dropdown ml-1">
                        <button class="btn btn-white btn-sm dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-check-input m-0 align-middle" type="checkbox" aria-label="Select invoice"></td>
                    <td><span class="text-muted">001408</span></td>
                    <td><a href="invoice.html" class="text-reset" tabindex="-1">Icons</a></td>
                    <td>
                      <span class="flag flag-country-pl"></span>
                      Tookapic
                    </td>
                    <td>
                      87956621
                    </td>
                    <td>
                      13 May 2018
                    </td>
                    <td>
                      <span class="status-icon bg-success"></span> Paid Today
                    </td>
                    <td>$940</td>
                    <td class="text-right">
                      <span class="dropdown ml-1">
                        <button class="btn btn-white btn-sm dropdown-toggle align-text-top" data-boundary="viewport" data-toggle="dropdown">Actions</button>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                            Action
                          </a>
                          <a class="dropdown-item" href="#">
                            Another action
                          </a>
                        </div>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="card-footer d-flex align-items-center">
              <p class="m-0 text-muted">Showing <span>1</span> to <span>8</span> of <span>16</span> entries</p>
              <ul class="pagination m-0 ml-auto">
                <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="15 6 9 12 15 18" /></svg>
                    prev
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item active"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="#">
                    next <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="9 6 15 12 9 18" /></svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <footer class="footer footer-transparent">
          <div class="container">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ml-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="./docs/index.html" class="link-secondary">Documentation</a></li>
                  <li class="list-inline-item"><a href="./faq.html" class="link-secondary">FAQ</a></li>
                  <li class="list-inline-item"><a href="https://github.com/tabler/tabler" target="_blank" class="link-secondary">Source code</a></li>
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                Copyright © 2020
                <a href="." class="link-secondary">Tabler</a>.
                All rights reserved.
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="./dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <script>
      document.body.style.display = "block"
    </script>
  </body>
</html>