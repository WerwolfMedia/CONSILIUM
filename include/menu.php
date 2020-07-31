<body class="antialiased">
    <div class="page">
      <header class="navbar navbar-expand-md navbar-dark">
        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a href="." class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
            <img src="./static/logo-white.svg" alt="Tabler" class="navbar-brand-image">
          </a>
          <div class="navbar-nav flex-row order-md-last">
            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-toggle="dropdown">
                <span class="avatar" style="background-image: url(./static/avatars/000m.jpg)"></span>
                <div class="d-none d-xl-block pl-2">
                  <div><?php echo $_SESSION['vorname'];echo " ";echo $_SESSION['nachname'] ?> <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><polyline id="svg_1" stroke-width="2" stroke-miterlimit="10" stroke="#ffffff" points="21,8.5 12,17.5 3,8.5 " fill="none"/></svg></div>
                  <div class="mt-1 small text-muted"></div>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" /><circle cx="12" cy="12" r="3" /></svg>
                  Einstellungen
                </a>
                <a class="dropdown-item" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"> <g><path id="svg_2" class="st1" d="M11.9,14.9c-0.3,0-0.6-0.2-0.6-0.6V12c0-0.3,0.2-0.6,0.6-0.6c1.2,0,2.3-1,2.3-2.2S13.2,7,11.9,7 S9.6,8,9.6,9.2c0,0.3-0.2,0.6-0.6,0.6c-0.3,0-0.6-0.2-0.6-0.6c0-1.8,1.5-3.3,3.4-3.3s3.4,1.5,3.4,3.3c0,1.7-1.2,3-2.8,3.3v1.9 C12.5,14.7,12.3,14.9,11.9,14.9z"/><path id="svg_4" class="st1" d="M11.9,23.1c-6.2,0-11.3-5-11.3-11.1S5.7,1,11.9,1c2.6,0,4.9,0.8,7,2.3c0.2,0.2,0.3,0.6,0.1,0.8 c-0.2,0.2-0.6,0.3-0.8,0.1c-1.8-1.4-4-2.1-6.3-2.1C6.3,2.1,1.7,6.5,1.7,12S6.3,22,11.9,22s10.2-4.5,10.2-9.9c0-1.8-0.5-3.5-1.4-5.1 c-0.2-0.3-0.1-0.6,0.2-0.8c0.3-0.2,0.6-0.1,0.8,0.2c1,1.8,1.6,3.7,1.6,5.7C23.3,18.1,18.2,23.1,11.9,23.1z"/>	<path id="svg_6" class="st1" d="M11.9,18.9c-0.3,0-0.6-0.2-0.6-0.6v-1.5c0-0.3,0.2-0.6,0.6-0.6c0.3,0,0.6,0.2,0.6,0.6v1.5 C12.5,18.7,12.3,18.9,11.9,18.9z"/></g></svg>
                  Hilfe
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="icon dropdown-item-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><line x1="12" y1="5" x2="12" y2="19" /><line x1="5" y1="12" x2="19" y2="12" /></svg>
                  Abmelden</a>
              </div>
            </div>
          </div>
        </div>
      </header>
      <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
          <div class="navbar navbar-light">
            <div class="container-xl">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="./index.php" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Dateibrowser
                    </span>
                  </a>
                </li>
                <?php if ($_SESSION['grouprights'] <= "5") { ?>
                <li class="nav-item">
                  <a class="nav-link" href="./support.php" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><i class="fa fa-medkit"></i>
                    </span>
                    <span class="nav-link-title">
                      Support
                    </span>
                  </a>
                </li>
                <?php }; ?>
              </ul>
<!--                <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                <form action="." method="get">
                  <div class="input-icon">
                    <span class="input-icon-addon">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"/><circle cx="10" cy="10" r="7" /><line x1="21" y1="21" x2="15" y2="15" /></svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search…">
                  </div>
                </form>
              </div> -->
            </div>
          </div>
        </div>
      </div>