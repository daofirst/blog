<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Brand -->
        <p class="navbar-brand">
            博客控制台
        </p>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        操作
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <router-link exact tag="a" to="/" class="nav-link">
                        <i class="ni ni-palette text-primary"></i> 仪表盘
                    </router-link>
                </li>

                <li class="nav-item">
                    <router-link tag="a" to="/categories" class="nav-link">
                        <i class="ni ni-books text-primary"></i> 分类
                    </router-link>
                </li>
                
                <li class="nav-item">
                    <router-link tag="a" to="/articles/new" class="nav-link">
                        <i class="ni ni-diamond text-primary"></i> 添加文章
                    </router-link>
                </li>
            </ul>
            
            <!-- Divider -->
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading text-muted">快速操作</h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
                @include('blogged::partials.dashboard-links')
            </ul>
        </div>
    </div>
</nav>