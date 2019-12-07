<div class="d-flex flex-column h-100" id="app">
        <nav class="nav mobile-nav d-flex d-sm-none h-auto order-1">
            <a class="nav-link active" href="#"><i class="fe fe-home"></i> Home</a>
            <a class="nav-link" href="#"><i class="fe fe-edit"></i> Post</a>
            <a class="nav-link" href="#"><i class="fe fe-shopping-cart"></i> Cart</a>
            <a class="nav-link" href="#"><i class="fe fe-settings"></i> Setting</a>
        </nav>
        <div class="w-100 h-100 d-flex flex-row row no-gutters">
            <div class="col-md-2 sidebar collapse show" id="sidebar">
                <div class="header">
                    <img src="<?php echo base_url('/assets/images/logo.png'); ?>" alt=""> Itematik
                </div>
                <nav class="sidebar-nav">
                    <ul>
                        <li class="active">
                            <a href="<?php echo base_url('home');?>"><i class="fe fe-home"></i> Home </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('profile');?>" <i class="fa fa-building-o"></i> Company Profile </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('services');?>" <i class="fa fa-tasks"></i> Services </a>
                           </li>
                        <li>
                            <a href="<?php echo base_url('portfolio');?>"><i class="fe fe-check-square"></i> Portfolio</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('teams');?>"><i class="fa fa-users"></i> Teams</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('clients');?>"><i class="fa fa-sitemap"></i> Clients</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('gallery');?>"><i class="fe fe-image"></i> Gallery</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('users');?>"><i class="fa fa-user-o"></i> Users</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
            <div class="col w-100 h-100 main-content d-flex flex-column">
                <div class="header py-3 border-0 shadow-sm" style="z-index: 9">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <a href="#" class="header-toggler ml-3 ml-lg-0" data-toggle="collapse" data-target="#sidebar">
                                <span class="header-toggler-icon"></span>
                            </a>
                            <div class="nav-item d-md-flex">
                                <strong>DASHBOARD</strong>
                            </div>
                            <div class="d-flex order-lg-2 ml-auto">
                                
                                <div class="dropdown d-none d-md-flex">
                                    <a class="nav-link icon" data-toggle="dropdown">
                                        <i class="fe fe-bell"></i>
                                        <span class="nav-unread"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar mr-3 align-self-center" style="background-image: url(<?php echo base_url(); ?>demo/faces/male/41.jpg)"></span>
                                            <div>
                                                <strong>Nathan</strong> pushed new commit: Fix page load performance issue.
                                                <div class="small text-muted">10 minutes ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar mr-3 align-self-center" style="background-image: url(<?php echo base_url(); ?>demo/faces/female/1.jpg)"></span>
                                            <div>
                                                <strong>Alice</strong> started new task: Tabler UI design.
                                                <div class="small text-muted">1 hour ago</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex">
                                            <span class="avatar mr-3 align-self-center" style="background-image: url(<?php echo base_url(); ?>demo/faces/female/18.jpg)"></span>
                                            <div>
                                                <strong>Rose</strong> deployed new version of NodeJS REST Api V3
                                                <div class="small text-muted">2 hours ago</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                        <span class="avatar" style="background-image: url(<?php echo base_url(); ?>demo/faces/female/25.jpg)"></span>
                                        <span class="ml-2 d-none d-lg-block">
                                            <span class="text-default"><?php echo $this->session->userdata('username') ?></span>
                                            <small class="text-muted d-block mt-1"><?php echo $this->session->userdata('level') ?></small>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon fe fe-user"></i> Profile
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon fe fe-settings"></i> Settings
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="float-right"><span class="badge badge-primary">6</span></span>
                                            <i class="dropdown-icon fe fe-mail"></i> Inbox
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon fe fe-send"></i> Message
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                                        </a>
                                        <a class="dropdown-item" href="<?php echo base_url('/Auth/logout');?>">
                                            <i class="dropdown-icon fe fe-log-out"></i> Sign out
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
