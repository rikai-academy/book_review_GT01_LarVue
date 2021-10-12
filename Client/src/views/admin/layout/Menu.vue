<template>
  <!--Sidebar left-->
  <div class="col-sm-3 col-xs-6 sidebar pl-0">
    <div class="inner-sidebar mr-3">
      <!--Sidebar Navigation Menu-->
      <div class="sidebar-menu-container">
        <ul class="sidebar-menu mb-4">
          <li class="parent">
            <a href="#" onclick="toggle_menu('dashboard'); return false" class=""><font-awesome-icon :icon="['fas','dashboard']"/>
              <span class="none">Dashboard <font-awesome-icon :icon="['fas','angle-down']"/></span>
            </a>
            <ul class="children" id="dashboard">
              <li class="child"><a href="index.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Default</a></li>
              <li class="child"><a href="index2.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Analytics</a></li>
              <li class="child"><a href="index3.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Ecommerce</a></li>
              <li class="child"><a href="index4.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Cryptocurrency</a></li>
            </ul>
          </li>
          <li class="parent">
            <a href="widgets.html" class=""><font-awesome-icon :icon="['fas','puzzle-piece']"/>
              <span class="none">Widget </span>
            </a>
          </li>
          <li class="parent">
            <a href="#" onclick="toggle_menu('ul_element'); return false" class=""><font-awesome-icon :icon="['fas','puzzle-piece']"/>
              <span class="none">UI Elements <font-awesome-icon :icon="['fas','angle-down']"/></span>
            </a>
            <ul class="children" id="ul_element">
              <li class="child"><a href="accordion.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Accordions</a></li>
              <li class="child"><a href="buttons.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Buttons</a></li>
              <li class="child"><a href="badges.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Badges</a></li>
              <li class="child"><a href="breadcrumb.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Breadcrumbs</a></li>
              <li class="child"><a href="cards.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Cards</a></li>
              <li class="child"><a href="icons.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Icons</a></li>
              <li class="child"><a href="modal.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Modals</a></li>
              <li class="child"><a href="notification.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Notification</a></li>
              <li class="child"><a href="progressbar.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Progressbar</a></li>
              <li class="child"><a href="sweetalert.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Sweet alert</a></li>
              <li class="child"><a href="tabs.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Tabs</a></li>
              <li class="child"><a href="tooltip-popover.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Tooltip and Popovers</a></li>
              <li class="child"><a href="typography.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Typography</a></li>
            </ul>
          </li>
          <li class="parent">
            <a href="#" onclick="toggle_menu('form_element'); return false" class=""><font-awesome-icon :icon="['fas','pencil-square']"/>
              <span class="none">Form Elements <font-awesome-icon :icon="['fas','angle-down']"/></span>
            </a>
            <ul class="children" id="form_element">
              <li class="child"><a href="form-general.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Basic Elements</a></li>
              <li class="child"><a href="form-advanced.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Advanced Elements</a></li>
              <li class="child"><a href="form-validation.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Validation</a></li>
              <li class="child"><a href="form-wizard.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Form Wizard</a></li>
            </ul>
          </li>
          <li class="parent">
            <a href="#" onclick="toggle_menu('editors'); return false" class=""><i class="fa fa-pencil-square-o mr-3"></i>
              <span class="none">Text Editors <font-awesome-icon :icon="['fas','angle-down']"/></span>
            </a>
            <ul class="children" id="editors">
              <li class="child"><a href="ckeditor-classic.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Ckeditor classic</a></li>
              <li class="child"><a href="ckeditor-inline.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Ckeditor inline</a></li>
              <li class="child"><a href="ckeditor-document.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Ckeditor document</a></li>
              <li class="child"><a href="summernote.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Summernote editor</a></li>
            </ul>
          </li>
          <li class="parent">
            <a href="#" onclick="toggle_menu('tables'); return false" class=""><i class="fa fa-pencil-square mr-3"></i>
              <span class="none">Tables <i class="fa fa-angle-down pull-right align-bottom"></i></span>
            </a>
            <ul class="children" id="tables">
              <li class="child"><a href="basic-tables.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Basic Tables</a></li>
              <li class="child"><a href="datatable.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Datatables</a></li>
              <li class="child"><a href="jsgrid-table.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> JSGrid Tables</a></li>
            </ul>
          </li>
          <li class="parent">
            <a href="#" onclick="toggle_menu('charts'); return false" class=""><i class="fa fa-pie-chart mr-3"></i>
              <span class="none">Charts <i class="fa fa-angle-down pull-right align-bottom"></i></span>
            </a>
            <ul class="children" id="charts">
              <li class="child"><a href="chart.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Chart JS</a></li>
              <li class="child"><a href="chartist.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Chartist JS</a></li>
              <li class="child"><a href="echarts.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Echarts JS</a></li>
              <li class="child"><a href="flot.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Flot JS</a></li>
              <li class="child"><a href="morris.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Morris JS</a></li>
              <li class="child"><a href="nvd3.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> NVD3 JS</a></li>
              <li class="child"><a href="sparkline.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Sparkline JS</a></li>
            </ul>
          </li>
          <li class="parent">
            <a href="icons.html" class=""><i class="fa fa-toggle-on mr-3"></i>
              <span class="none">Icons</span>
            </a>
          </li>
          <li class="parent">
            <a href="#" onclick="toggle_menu('ecommerce'); return false" class=""><i class="fa fa-shopping-cart mr-3"></i>
              <span class="none">Ecommerce <i class="fa fa-angle-down pull-right align-bottom"></i></span>
            </a>
            <ul class="children" id="ecommerce">
              <li class="child"><a href="products.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> ProductList</a></li>
              <li class="child"><a href="product-detail.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> ProductDetail</a></li>
              <li class="child"><a href="orders.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> OrderList</a></li>
              <li class="child"><a href="invoice.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Invoice</a></li>
            </ul>
          </li>
          <li class="parent">
            <a href="#" onclick="toggle_menu('maps'); return false" class=""><i class="fa fa-map mr-3"></i>
              <span class="none">Maps <i class="fa fa-angle-down pull-right align-bottom"></i></span>
            </a>
            <ul class="children" id="maps">
              <li class="child"><a href="jvector-maps.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Jvector Maps</a></li>
              <li class="child"><a href="google-maps.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Google Maps</a></li>
            </ul>
          </li>
          <li class="parent">
            <a href="#" onclick="toggle_menu('pages'); return false" class=""><i class="fa fa-file mr-3"></i>
              <span class="none">Pages <i class="fa fa-angle-down pull-right align-bottom"></i></span>
            </a>
            <ul class="children" id="pages">
              <li class="child"><a href="email-inbox.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Email-Inbox</a></li>
              <li class="child"><a href="email.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Email-Compose</a></li>
              <li class="child"><a href="login.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Login</a></li>
              <li class="child"><a href="register.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Signup</a></li>
              <li class="child"><a href="lockscreen.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Lock Screen</a></li>
              <li class="child"><a href="forgot-password.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Forgot Password</a></li>
              <li class="child"><a href="profile.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Profile</a></li>
              <li class="child"><a href="gallery.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Gallery</a></li>
              <li class="child"><a href="invoice.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Invoice</a></li>
              <li class="child"><a href="search-result.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Search</a></li>
              <li class="child"><a href="pricing.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Pricing</a></li>
              <li class="child"><a href="blank.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Blank Page</a></li>
              <li class="child"><a href="error-404.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Error 404</a></li>
              <li class="child"><a href="error-500.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Error 500</a></li>
              <li class="child"><a href="error-504.html" class="ml-4"><font-awesome-icon :icon="['fas','angle-right']"/> Error 504</a></li>
            </ul>
          </li>
          <li class="parent">
            <a href="fullcalendar.html" class=""><i class="fa fa-calendar-o mr-3"> </i>
              <span class="none">Full Calendar </span>
            </a>
          </li>
        </ul>
      </div>
      <!--Sidebar Naigation Menu-->
    </div>
  </div>
  <!--Sidebar left-->
</template>
