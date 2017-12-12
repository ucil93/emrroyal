            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper" >
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <li class="sidebar-toggler-wrapper hide">
                                <div class="sidebar-toggler">
                                    <span></span>
                                </div>
                            </li>
                            <li class="sidebar-search-wrapper">
                                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->

                                <!-- END RESPONSIVE QUICK SEARCH FORM -->
                            </li>
                            <li class="nav-item <?php echo $active_dashboard_radio?>">
                                <a href="<?php echo base_url(); ?>dashboard_radio/" class="<?php echo $active_dashboard_radio; ?>">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <!--<li class="nav-item  <?php echo $active_master?>">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-sticky-note-o"></i>
                                    <span class="title">Master</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="<?php echo $active_groupradio; ?>">
                                        <a href="<?php echo base_url(); ?>master_grup_radio/" class="<?php echo $active_groupradio; ?>">
                                            <span class="title">Master Group Radiologi</span>
                                        </a>
                                    </li>
                                    <li class="<?php echo $active_dtradio; ?>">
                                        <a href="<?php echo base_url(); ?>master_detail_radio/" class="<?php echo $active_dtradio; ?>">
                                            <span class="title">Master Radiologi</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>-->
                            <li class="nav-item  <?php echo $active_transaksi?>">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="fa fa-laptop"></i>
                                    <span class="title">Transaksi</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="<?php echo $active_ubahtatusradio; ?>">
                                        <a href="<?php echo base_url(); ?>ubah_status_radio/" class="<?php echo $active_ubahtatusradio; ?>">
                                            <span class="title">Data Pasien Radiologi</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <div class="page-sidebar-wrapper hidden-sm hidden-xs" style="position:fixed; bottom:30px; left:0px; text-color:white">
                        <div class="bg-red-soft bg-font-red-soft col-sm-12 m-b-xs text-center" style="width:235px; height: 70px">
                            <h10>
                            <b style="font-size:35px; text-align:center" id="clock"></b><br>
                            <?php
                            $tanggal= mktime(date("m"),date("d"),date("Y"));
                            echo "<b>" .date("d-M-Y", $tanggal)." </b> ";
                            ?>
                            </h10>
                        </div>
                    </div>
                </div>
