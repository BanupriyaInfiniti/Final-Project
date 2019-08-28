<!-- Sidebar menu-->
<?php $AdminData = Admin::getAdminData($mysqli); ?>
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><?php echo $AdminData['name'] ?></p>
            <p class="app-sidebar__user-designation"><?php echo $AdminData["email"] ?> </p>
        </div>
    </div>
    <ul class="app-menu">
        <li>
            <a class="app-menu__item" href="<?php echo BASE."admin/dashboard.php"; ?>">
                <i class="app-menu__icon fa fa-dashboard"></i>
                <span class="app-menu__label">Dashboard</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?php echo BASE."admin/blog_all.php"; ?>">
                <i class="app-menu__icon fa fa-file"></i>
                <span class="app-menu__label">Blog</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?php echo BASE."admin/product_all.php"; ?>">
                <i class="app-menu__icon fa fa-shopping-cart"></i>
                <span class="app-menu__label">Products</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?php echo BASE."admin/technology_all.php"; ?>">
                <i class="app-menu__icon fa fa-wrench"></i>
                <span class="app-menu__label">Technologies</span>
            </a>
        </li>
        <li>
            <a class="app-menu__item" href="<?php echo BASE."admin/achievement_all.php"; ?>">
                <i class="app-menu__icon fa fa-soccer-ball-o"></i>
                <span class="app-menu__label">Achievement</span>
            </a>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-user fa-lg"></i>
                <span class="app-menu__label">Users</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?php echo BASE."admin/users_all.php"; ?>"><i class="icon fa fa-circle-o"></i> Customers</a></li>
                <li><a class="treeview-item" href="<?php echo BASE."admin/admins_all.php"; ?>"><i class="icon fa fa-circle-o"></i> Admins</a></li>
                <li><a class="treeview-item" href="<?php echo BASE."admin/role_permissions.php"; ?>"><i class="icon fa fa-circle-o"></i> Roles</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a class="app-menu__item" href="#" data-toggle="treeview">
                <i class="app-menu__icon fa fa-cog fa-lg"></i>
                <span class="app-menu__label">Settings</span>
                <i class="treeview-indicator fa fa-angle-right"></i>
            </a>
            <ul class="treeview-menu">
                <li><a class="treeview-item" href="<?php echo BASE."admin/cms_setup.php"; ?>"><i class="icon fa fa-circle-o"></i> CMS Setup</a></li>
            </ul>
        </li>
    </ul>
</aside>