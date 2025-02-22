<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #212529;">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('event'); ?>">
                <img src="<?= base_url('assets'); ?>/img/gettix.png" alt="" width="180px" height="70px" class="img-fluid">
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider ">
            <!-- Query Menu -->
            <?php 
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`,`menu` FROM `user_menu` JOIN `user_access_menu` ON
                `user_menu`.`id` = `user_access_menu`.`menu_id` WHERE `user_access_menu`.`role_id` = $role_id ORDER BY `user_access_menu`.`menu_id` ASC";
                $menu = $this->db->query($queryMenu)->result_array();
            ?>
            <!-- looping menu -->
            <?php foreach ($menu as $m) : ?>
                <div class="sidebar-heading">
                    <?= $m['menu']; ?>
                </div>

                <!-- sub menu yang sesuai jika admin Dashboard kalau user profile-->
                <?php 
                $menuId = $m['id'];
                $subQueryMenu = "SELECT * FROM `user_sub_menu` JOIN `user_menu` ON `user_sub_menu`.`menu_id` = `user_menu`.`id` WHERE `user_sub_menu`.`menu_id` = $menuId AND `user_sub_menu`.`is_active` = 1";
                
                $subMenu = $this->db->query($subQueryMenu)->result_array();
                ?>
                <?php foreach ($subMenu as $sm) : ?>
                    <?php if($title == $sm['title']) : ?>
                    <li class="nav-item active">
                        <?php else : ?>
                    <li class="nav-item">
                        <?php endif; ?>
                        <a class="nav-link" href="<?= base_url($sm['url']); ?>">
                            <i class="<?= $sm['icon']; ?>"></i>
                            <span><?= $sm['title']; ?></span>
                        </a>
                    </li>
                    <?php endforeach; ?>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <?php endforeach; ?>
            
            <!-- $subQueryMenu = "SELECT * FROM `user_sub_menu` WHERE `menu_id` == $menuId AND `is_active` = 1"; -->
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('auth/logout'); ?> " data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->