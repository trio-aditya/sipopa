<!-- Sidenav -->
<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
                <img src="/assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <?php
            $request = \Config\Services::request();
            ?>
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="<?= ($request->uri->getSegment(1) === '') ? 'nav-link active' : 'nav-link' ?>" href="<?= base_url('/') ?>">
                            <i class="ni ni-tv-2 text-primary"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?= ($request->uri->getSegment(1) === 'pages' && $request->uri->getSegment(2) === 'about') ? 'nav-link active' : 'nav-link' ?>" href="/pages/about">
                            <i class="ni ni-ui-04 text-info"></i>
                            <span class="nav-link-text">About</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?= ($request->uri->getSegment(1) === 'pages' && $request->uri->getSegment(2) === 'contact') ? 'nav-link active' : 'nav-link' ?>" href="/pages/contact">
                            <i class="ni ni-badge text-orange"></i>
                            <span class="nav-link-text">Contact</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="<?= ($request->uri->getSegment(1) === 'komik') ? 'nav-link active' : 'nav-link' ?>" href="/komik">
                            <i class="ni ni-single-copy-04 text-primary"></i>
                            <span class="nav-link-text">Komik</span>
                        </a>
                    </li>
                </ul>
                <!-- Divider -->
                <hr class="my-3">
                <!-- Heading -->
                <h6 class="navbar-heading p-0 text-muted">
                    <span class="docs-normal">Documentation</span>
                </h6>
                <!-- Navigation -->
                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link" href="#" target="_blank">
                            <i class="ni ni-spaceship"></i>
                            <span class="nav-link-text">Getting started</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>