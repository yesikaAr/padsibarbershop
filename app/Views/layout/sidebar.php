<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="<?= base_url() ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Transaksi</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                    Penjualan
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('jual') ?>">Transaksi</a>
                        <a class="nav-link" href="/jual/laporan">Laporan</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
                    aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-shopping-cart"></i></div>
                    Pembelian
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="<?= base_url('beli') ?>">Transaksi</a>
                        <a class="nav-link" href="/beli/laporan">Laporan</a>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Interface</div>



                <!-- <a class="nav-link collapsed" href="<?= base_url('/mahasiswa') ?>"> 
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Mahasiswa
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a> -->
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Static Navigation</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages"
                    aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo"
                    data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse"
                            data-bs-target="#pagesCollapseError" aria-expanded="false"
                            aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne"
                            data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                        </div>
                    </nav>
                </div>

                <!-- <a class="nav-link" href="<?= base_url('/tugas') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Container
                            </a> -->
                <?php if(session()->role == "Admin") : ?>
                <a class="nav-link collapsed" href="<?= base_url('/customer') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Customer
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link" href="<?= base_url('/komik') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Komik
                </a>
                <a class="nav-link collapsed" href="<?= base_url('/book') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Book
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="<?= base_url('/users') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    DATA USER
                </a>
                <?php endif; ?>

                <?php if(session()->role == "Karyawan") : ?>
                <a class="nav-link" href="<?= base_url('/komik') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Komik
                </a>
                <a class="nav-link collapsed" href="<?= base_url('/book') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Book
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <?php endif; ?>

                <?php if(session()->role == "Owner") : ?>
                <a class="nav-link collapsed" href="<?= base_url('/customer') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Customer
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link" href="<?= base_url('/komik') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Komik
                </a>
                <a class="nav-link collapsed" href="<?= base_url('/book') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Book
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="<?= base_url('/supplier') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Supplier
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="<?= base_url('/users') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    DATA USER
                </a>
                <?php endif; ?>

                <?php if(session()->role == "Manajer") : ?>
                <a class="nav-link collapsed" href="<?= base_url('/customer') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Customer
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link collapsed" href="<?= base_url('/book') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Book
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <a class="nav-link" href="<?= base_url('/komik') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Komik
                </a>
                <a class="nav-link collapsed" href="<?= base_url('/supplier') ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Supplier
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <?php endif; ?>



                <!-- <a class="nav-link" href="<?= base_url('/tugasdua') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                ContainerDua
                            </a> -->
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Evi Yenti Aruan / 211711442
        </div>
    </nav>

</div>