<aside id="layout-menu" class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0">
    <div class="container-xxl d-flex h-100">
      <ul class="menu-inner">
        <!-- Dashboards -->
        <li class="menu-item active">
          <a href="{{ url('dashboard') }}" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-home-circle"></i>
            <div data-i18n="Dashboard">Dashboard</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item active">
              <a href="{{ url('dashboard') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-pie-chart-alt-2"></i>
                <div data-i18n="Dash">Dash 1</div>
              </a>
            </li>
          </ul>
        </li>
          <li class="menu-item">
              <a href="#" class="menu-link menu-toggle">
              <i class="menu-icon tf-icons bx bx-user"></i>
              <div data-i18n="Menu">Menu</div>
              </a>
              <ul class="menu-sub">
                      <li class="menu-item">
                          <a href="{{ url('list') }}" class="menu-link">
                          <i class="menu-icon tf-icons bx bx-menu"></i>
                          <div data-i18n="Sub Menu">Daftar List</div>
                          </a>
                      </li>
              </ul>
          </li>

        <!-- Layouts -->
        <li class="menu-item">
          <a href="javascript:void(0)" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Layouts</div>
          </a>
          <ul class="menu-sub">
            <li class="menu-item">
              <a href="layouts-without-menu.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-menu"></i>
                <div data-i18n="Without menu">Without menu</div>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </aside>