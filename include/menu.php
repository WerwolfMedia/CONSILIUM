<body class="">
  <div class="page">
    <div class="page-main">
      <div class="header py-4">
        <div class="container">
          <div class="d-flex">
            <a class="header-brand" href="./index.php">
              <?php echo $projektname; ?>
            </a>
            <div class="d-flex order-lg-2 ml-auto">
              <div class="nav-item d-none d-md-flex">
                <a href="logout.php" class="btn btn-sm btn-outline-primary">Abmelden</a>
              </div>
              <div class="dropdown">
                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                  <span class="avatar" style="background-image: url(/backend/assets/images/user.png)"></span>
                  <span class="ml-2 d-none d-lg-block">
                    <span class="text-default"><?php echo $_SESSION['vorname'];
                                                echo " ";
                                                echo $_SESSION['nachname'] ?></span>
                  </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                  <a class="dropdown-item" href="logout.php">
                    <i class="dropdown-icon fe fe-log-out"></i> Abmelden
                  </a>
                </div>
              </div>
            </div>
            <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
              <span class="header-toggler-icon"></span>
            </a>
          </div>
        </div>
      </div>
      <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg order-lg-first">
              <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                <li class="nav-item">
                  <a href="./index.php" class="nav-link"><i class="fe fe-grid"></i>Dashboard</a>
                </li>
                <?php if ($_SESSION['grouprights'] <= "5") { ?>
                  <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-users"></i> Helfer</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <?php if ($_SESSION['grouprights'] <= "0") { ?>
                        <a href="./helfer_erfassung.php" class="dropdown-item ">Neuer Helfer erfassen</a>
                      <?php }; ?>
                      <?php if ($_SESSION['grouprights'] <= "0") { ?>
                        <a href="./helfer_liste.php" class="dropdown-item ">Liste</a>
                      <?php }; ?>
                      <?php if ($_SESSION['grouprights'] <= "5") { ?>
                        <a href="./helfer_map.php" class="dropdown-item ">Karte</a>
                      <?php }; ?>
                    </div>
                  </li>
                <?php }; ?>
                <?php if ($_SESSION['grouprights'] <= "0") { ?>
                  <li class="nav-item dropdown">
                    <a href="javascript:void(0)" class="nav-link" data-toggle="dropdown"><i class="fe fe-phone"></i> Unterstützungssuchende</a>
                    <div class="dropdown-menu dropdown-menu-arrow">
                      <?php if ($_SESSION['grouprights'] <= "3") { ?>
                        <a href="./suchende_erfassung.php" class="dropdown-item ">Neuer Suchende erfassen</a>
                      <?php }; ?>
                      <?php if ($_SESSION['grouprights'] <= "3") { ?>
                        <a href="./suchende_liste.php" class="dropdown-item ">Liste</a>
                      <?php }; ?>
                    </div>
                  </li>
                <?php }; ?>
                <?php if ($_SESSION['grouprights'] <= "5") { ?>
                  <li class="nav-item">
                    <?php if ($_SESSION['grouprights'] <= "5") { ?>
                      <a href="./vermittlung_erfassung_suchender.php" class="nav-link"><i class="fe fe-plus-circle"></i> Neue Vermittlung starten</a>
                    <?php }; ?>
                  </li>
                <?php }; ?>
                <?php if ($_SESSION['grouprights'] <= "5") { ?>
                  <li class="nav-item">
                    <?php if ($_SESSION['grouprights'] <= "5") { ?>
                      <a href="./support.php" class="nav-link"><i class="fa fa-medkit"></i> Support</a>
                    <?php }; ?>
                  </li>
                <?php }; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>