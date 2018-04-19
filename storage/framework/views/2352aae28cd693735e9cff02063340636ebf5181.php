<nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
    <div class="sidebar-collapse menu-scroll">
        <ul id="side-menu" class="nav">
            <li class="user-panel">
                <div class="thumb"><img src="<?php echo e(asset('images/gallery/128.jpg')); ?>" alt="" class="img-circle" />
                </div>
                <div class="info">
                    <p><?php echo e(Auth::guard()->user()->name); ?></p>
                    
                </div>
                <div class="clearfix"></div>
            </li>
            <li><a href="/backend"><i class="fa fa-tachometer fa-fw"><div class="icon-bg bg-orange"></div></i><span class="menu-title">Dashboard</span></a>
            </li>
            <li><a href="#"><i class="fa fa-user fa-fw"><div class="icon-bg bg-pink"></div></i><span class="menu-title">用户管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/backend/user"><i class="fa fa-user"></i><span class="submenu-title">用户</span></a>
                    </li>
                    <li><a href="/backend/role"><i class="fa fa-users"></i><span class="submenu-title">角色</span></a>
                    <li><a href="/backend/permission"><i class="fa fa-cogs"></i><span class="submenu-title">权限</span></a>
                    </li>
                    <li><a href="/backend/menu"><i class="fa fa-list-ul"></i><span class="submenu-title">菜单</span></a>
                    </li>
                </ul>
            </li>
            <li><a href="#"><i class="fa fa-shopping-cart fa-fw"><div class="icon-bg bg-pink"></div></i><span class="menu-title">商品管理</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/backend/user"><i class="fa fa-user"></i><span class="submenu-title">商品列表</span></a>
                    </li>
                    <li><a href="/backend/role"><i class="fa fa-users"></i><span class="submenu-title">商品分类</span></a>
                    <li><a href="/backend/permission"><i class="fa fa-cogs"></i><span class="submenu-title">商品类型</span></a>
                    </li>
                    <li><a href="/backend/menu"><i class="fa fa-list-ul"></i><span class="submenu-title">品牌管理</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>