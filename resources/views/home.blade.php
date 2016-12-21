<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>Wintermin - Bootstrap Admin Theme</title>
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href="/css/font-awesome.min.css">
   <link rel="stylesheet" href="/css/animate+animo.css">
   <link rel="stylesheet" href="/css/csspinner.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css" />
   <!-- START Page Custom CSS-->
   <!-- jQuery UI-->
   <link rel="stylesheet" href="/css/jquery-ui-1.10.4.custom.min.css">
   <!-- END Page Custom CSS-->
   <!-- App CSS-->
   <link rel="stylesheet" href="/css/custom.css">

   <style media="screen">
    .about-links-item {
      list-style-type: none;
      padding: 0;
    }
   </style>

   <!-- Modernizr JS Script-->
   <script src="/js/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="/js/fastclick.js" type="application/javascript"></script>
</head>

<body>
   <!-- START Main wrapper-->
   <div class="wrapper">
      <!-- START Top Navbar-->
      <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
         <!-- START navbar header-->
         <div class="navbar-header">
            <a href="dashboard.html" class="navbar-brand">
               <div class="brand-logo">
                  <img src="app/img/kkbox-group-lightness.svg" alt="App Logo" class="img-responsive">
               </div>
               <div class="brand-logo-collapsed">
                  <img src="app/img/logo-single.png" alt="App Logo" class="img-responsive">
               </div>
            </a>
         </div>
         <!-- END navbar header-->
         <!-- START Nav wrapper-->
         <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
               <li>
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                  <a href="#" data-toggle-state="aside-collapsed" data-persists="true" class="hidden-xs">
                     <em class="fa fa-navicon"></em>
                  </a>
                  <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                  <a href="#" data-toggle-state="aside-toggled" class="visible-xs">
                     <em class="fa fa-navicon"></em>
                  </a>
               </li>
               <!-- START Messages menu (dropdown-list)-->
               <li class="dropdown dropdown-list">
                  <a href="#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                     <em class="fa fa-envelope-o"></em>
                     <div class="label label-danger">21</div>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li class="dropdown-menu-header">You have 5 new messages</li>
                     <li>
                        <div class="scroll-viewport">
                           <!-- START list group-->
                           <div class="list-group scroll-content">
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/01.jpg" alt="Image" class="media-object img-circle thumb48">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">2h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="point point-success point-md"></span>Rina Carter</strong>
                                       <p class="mb-sm">
                                          <small>Curabitur sodales nisl eu enim suscipit eu faucibus dui mattis.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/04.jpg" alt="Image" class="media-object img-circle thumb48">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">3h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="point point-success point-md"></span>Michael Reynolds</strong>
                                       <p class="mb-sm">
                                          <small>Curabitur sodales nisl eu enim suscipit eu faucibus dui mattis.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/03.jpg" alt="Image" class="media-object img-circle thumb48">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="point point-danger point-md"></span>Britanny Pierce</strong>
                                       <p class="mb-sm">
                                          <small>Curabitur sodales nisl eu enim suscipit eu faucibus dui mattis.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/05.jpg" alt="Image" class="media-object img-circle thumb48">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="point point-danger point-md"></span>Laura Cole</strong>
                                       <p class="mb-sm">
                                          <small>Curabitur sodales nisl eu enim suscipit eu faucibus dui mattis.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href="#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img src="app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb48">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <span class="point point-danger point-md"></span>Carolyn Pretty</strong>
                                       <p class="mb-sm">
                                          <small>Curabitur sodales nisl eu enim suscipit eu faucibus dui mattis.</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                           </div>
                           <!-- END list group-->
                        </div>
                     </li>
                     <!-- START dropdown footer-->
                     <li class="p">
                        <a href="#" class="text-center">
                           <small class="text-primary">READ ALL</small>
                        </a>
                     </li>
                     <!-- END dropdown footer-->
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Messages menu (dropdown-list)-->
               <li>
                  <!-- Button to clear all site options stored option from browser storage-->
                  <a href="#" data-toggle="reset">
                     <em class="fa fa-refresh"></em>
                  </a>
               </li>
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
               <!-- Search icon-->
               <li>
                  <a href="#" data-toggle="navbar-search">
                     <em class="fa fa-search"></em>
                  </a>
               </li>
               <!-- START Alert menu-->
               <li class="dropdown dropdown-list">
                  <a href="#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                     <em class="fa fa-bell-o"></em>
                     <div class="label label-info">35</div>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li>
                        <!-- START list group-->
                        <div class="list-group">
                           <!-- list item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-envelope-o fa-2x text-success"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading">Unread messages</div>
                                    <p class="m0">
                                       <small>You have 10 unread messages</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- list item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-cog fa-2x"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading">New settings</div>
                                    <p class="m0">
                                       <small>There are new settings available</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- list item-->
                           <a href="#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-fire fa-2x"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading">Updates</div>
                                    <p class="m0">
                                       <small>There are
                                          <span class="text-primary">2</span>new updates available</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- last list item -->
                           <a href="#" class="list-group-item">
                              <small>Unread notifications</small>
                              <span class="badge">14</span>
                           </a>
                        </div>
                        <!-- END list group-->
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Alert menu-->
               <!-- START User menu-->
               <li class="dropdown">
                  <a href="#" data-toggle="dropdown" data-play="fadeIn" class="dropdown-toggle">
                     <em class="fa fa-tencent-weibo"></em>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li>
                        <div class="p">
                           <p>Overall progress</p>
                           <div class="progress progress-striped progress-xs m0">
                              <div role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-success progress-70">
                                 <span class="sr-only">70% Complete</span>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="divider"></li>
                     <li><a href="#">Profile</a>
                     </li>
                     <li><a href="#">Settings</a>
                     </li>
                     <li><a href="#">Notifications<div class="label label-info pull-right">5</div></a>
                     </li>
                     <li><a href="#">Messages<div class="label label-danger pull-right">10</div></a>
                     </li>
                     <li><a href="#">Logout</a>
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END User menu-->
               <!-- START Contacts button-->
               <li>
                  <a href="#" data-toggle-state="offsidebar-open">
                     <em class="fa fa-comment-o"></em>
                  </a>
               </li>
               <!-- END Contacts menu-->
            </ul>
            <!-- END Right Navbar-->
         </div>
         <!-- END Nav wrapper-->
         <!-- START Search form-->
         <form role="search" class="navbar-form">
            <div class="form-group has-feedback">
               <input type="text" placeholder="Type and hit Enter.." class="form-control">
               <div data-toggle="navbar-search-dismiss" class="fa fa-times form-control-feedback"></div>
            </div>
            <button type="submit" class="hidden btn btn-default">Submit</button>
         </form>
         <!-- END Search form-->
      </nav>
      <!-- END Top Navbar-->
      <!-- START aside-->
      <aside class="aside">
         <!-- START Sidebar (left)-->
         <nav class="sidebar">
            <ul class="nav">
               <!-- START Menu-->
               <li class="nav-heading">Main</li>
               <li class="active">
                  <a href="/home" title="Dashboard">
                     <em class="fa fa-dot-circle-o"></em>
                     <span class="item-text">Dashboard</span>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- End aside-->
      <!-- START aside-->
      <aside class="offsidebar">
         <!-- START Off Sidebar (right)-->
         <nav>
            <ul class="nav">
               <!-- START user info-->
               <li>
                  <div class="item">
                     <div class="p-lg">
                        <div class="text-center">
                           <p>
                              <img src="app/img/user/02.jpg" alt="Image" class="img-circle img-thumbnail thumb64">
                           </p>
                           <p>
                              <strong>Arnold</strong>
                           </p>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- END user info-->
               <li class="p">
                  <div class="form-group has-feedback">
                     <input type="text" placeholder="Search contacts.." class="form-control">
                     <em class="fa fa-search form-control-feedback text-muted"></em>
                  </div>
               </li>
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">ONLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/05.jpg" alt="Image" class="media-object img-circle thumb48">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Laura Sam</strong>
                           <br>
                           <small class="text-muted">lau39</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/06.jpg" alt="Image" class="media-object img-circle thumb48">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Beverley Pierce</strong>
                           <br>
                           <small class="text-muted">be40210</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-danger point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/07.jpg" alt="Image" class="media-object img-circle thumb48">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Mika Long</strong>
                           <br>
                           <small class="text-muted">longlong</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-warning point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/08.jpg" alt="Image" class="media-object img-circle thumb48">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Danielle Berry</strong>
                           <br>
                           <small class="text-muted">hunter49</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">OFFLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/09.jpg" alt="Image" class="media-object img-circle thumb48">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Martin Cooper</strong>
                           <br>
                           <small class="text-muted">maryo</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href="#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src="app/img/user/10.jpg" alt="Image" class="media-object img-circle thumb48">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong>Daniel Curtis</strong>
                           <br>
                           <small class="text-muted">danni</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <li>
                  <!-- Optional link to list more users-->
                  <a href="#" title="See more contacts" class="p">
                     <strong>
                        <small class="text-muted">&hellip;</small>
                     </strong>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- END aside-->
      <!-- START Main section-->
      <section>
         <!-- START Page content-->
         <div class="main-content">
            <div class="btn-group pull-right">
               <button type="button" data-toggle="reset" data-key="panelState" class="btn btn-default btn-sm">Reset Panels</button>
               <button type="button" data-toggle="reset" data-key="portletState" class="btn btn-default btn-sm">Reset Porlets</button>
            </div>
            <h3>Portal
            </h3>
            <!-- START row-->
            <div class="row">
               <div id="portlet-1" data-toggle="portlet" class="col-lg-4">
                  <!-- START panel-->
                  <div id="panel-1" class="panel panel-green">
                     <div class="panel-heading portlet-handler">行事曆
                        <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                           <em class="fa fa-minus"></em>
                        </a>
                     </div>
                     <div class="panel-body">
                        <div id="calendar"></div>
                     </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-2" class="panel panel-primary">
                     <div class="panel-heading portlet-handler">其他申請
                        <a href="#" data-perform="panel-collapse" data-toggle="tooltip" title="Collapse Panel" class="pull-right">
                           <em class="fa fa-minus"></em>
                        </a>
                     </div>
                     <div class="panel-body">
                        @foreach ($others as $other)
                          <ul class="about-links-item">
                            <li>
                              <a href="#" title="{{ $other['title'] }}">
                                {{ $other['title'] }}
                              </a>
                            </li>
                          </ul>
                        @endforeach
                     </div>
                  </div>
                  <!-- END panel-->
               </div>
               <div id="portlet-2" data-toggle="portlet" class="col-lg-4">
                  <!-- START panel-->
                  <div id="panel-6" class="panel panel-info">
                    <div class="panel-heading portlet-handler">公告</div>
                    <div class="panel-body">
                       @foreach ($announces as $announce)
                         <ul class="about-links-item">
                           <li>
                             <a href="#" title="{{ $announce->announce_title }}">
                               {{ $announce->announce_title }}
                             </a>
                           </li>
                         </ul>
                       @endforeach
                    </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-7" class="panel panel-warning">
                     <div class="panel-heading portlet-handler">待簽核事項</div>
                     <div class="panel-body">
                        <table id="datatable1" class="table table-striped table-hover dataTable no-footer" role="grid" aria-describedby="datatable1_info">
                           <thead>
                              <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column ascending">類</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">單號</th>
                                <th class="sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">申請人</th>
                                <th class="sort-numeric sorting" tabindex="0" aria-controls="datatable1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">開單日期</th>
                              </tr>
                           </thead>
                           <tbody>
                            <tr>
  														<th colspan="1" data-columns="tech-companies-1-col-0">出</th>
  														<td data-priority="1" colspan="1" data-columns="tech-companies-1-col-1">W115120011</td>
  														<td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">tingwu</td>
  														<td data-priority="1" colspan="1" data-columns="tech-companies-1-col-3">2016/12/01</td>
  													</tr>
  													<tr>
  														<th colspan="1" data-columns="tech-companies-1-col-0">請</th>
  														<td data-priority="1" colspan="1" data-columns="tech-companies-1-col-1">W115120011</td>
  														<td data-priority="3" colspan="1" data-columns="tech-companies-1-col-2">tingwu</td>
  														<td data-priority="1" colspan="1" data-columns="tech-companies-1-col-3">2016/12/01</td>
  													</tr>
												</tbody>
                        </table>
                     </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-8" class="panel panel-danger">
                     <div class="panel-heading portlet-handler">其他活動</div>
                     <div class="panel-body">
                        <ul class="about-links-item">
                          <li>
                            <a href="#">其他活動</a>
                          </li>
                          <li>
                            <a href="#">2016 KKBOX 集團保齡球競賽現場</a>
                          </li>
                          <li>
                            <a href="#">隱形眼鏡團購</a>
                          </li>
                        </ul>
                     </div>
                  </div>
                  <!-- END panel-->

               </div>
               <div id="portlet-3" data-toggle="portlet" class="col-lg-4">
                  <!-- START panel-->
                  <div id="panel-11" class="panel panel-inverse">
                     <div class="panel-heading portlet-handler">常用系統</div>
                     <div class="panel-body">
                        <ul class="about-links-item">
                        @foreach ($sidebars as $sidebar)

                          <li>
                            <a href="#" title="{{ $sidebar['title'] }}">
                              {{ $sidebar['title'] }}
                            </a>
                          </li>
                        @endforeach
                        </ul>
                     </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-12" class="panel panel-purple">
                     <div class="panel-heading portlet-handler">辦公室資訊</div>
                     <div class="panel-body">
                        <ul class="about-links-item">
                          <li>
                            <a href="#">各據點聯絡方式</a>
                          </li>
                          <li>
                            <a href="#">座位平面圖</a>
                          </li>
                          <li>
                            <a href="#">分機表</a>
                          </li>
                          <li>
                            <a href="#">VPN 使用說明</a>
                          </li>
                        </ul>
                     </div>
                  </div>
                  <!-- END panel-->
                  <!-- START panel-->
                  <div id="panel-13" class="panel panel-green">
                     <div class="panel-heading portlet-handler">其他公司</div>
                     <div class="panel-body">
                       <ul class="nav nav-pills">
                           <li class=""><a href="#home-pills" data-toggle="tab">KKBOX </a>
                           </li>
                           <li class=""><a href="#home-pills" data-toggle="tab">KKStream </a>
                           </li>
                           <li class="active"><a href="#home-pills" data-toggle="tab">KKTV</a>
                           </li>
                           <li class=""><a href="#home-pills" data-toggle="tab">KKTown</a>
                           </li>
                           <li class=""><a href="#home-pills" data-toggle="tab">KKTIX</a>
                           </li>
                        </ul>
                        <div class="tab-content">
                           <div id="home-pills" class="tab-pane fade  active in">
                              <ul class="about-links-item">
                                <li>
                                  <a href="#">組識圖</a>
                                </li>
                                <li>
                                  <a href="#">核決權限</a>
                                </li>
                                <li>
                                  <a href="#">管理辦法</a>
                                </li>
                                <li>
                                  <a href="#">福委會管理辦法</a>
                                </li>
                              </ul>
                           </div>
                           <div id="profile-pills" class="tab-pane fade">
                              <h4>Profile Tab</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                           </div>
                           <div id="messages-pills" class="tab-pane fade">
                              <h4>Messages Tab</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                           </div>
                           <div id="settings-pills" class="tab-pane fade">
                              <h4>Settings Tab</h4>
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- END panel-->
               </div>
            </div>
            <!-- END row-->
         </div>
         <!-- END Page content-->
         <!-- START Page footer-->
         <footer>&copy; 2016 - KKBOX Group &nbsp;|
            <a href="#">KKBOX Taiwan</a>&nbsp;|
            <a href="#">KKStream</a>&nbsp;|
            <a href="#">KKTV</a>&nbsp;|
            <a href="#">KKTown</a>&nbsp;|
            <a href="#">KKTIX</a>
         </footer>
         <!-- END Page Footer-->
      </section>
      <!-- END Main section-->
   </div>
   <!-- END Main wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src="/js/jquery.min.js"></script>
   <script src="/js/bootstrap.min.js"></script>
   <!-- Plugins-->
   <script src="/js/chosen.jquery.min.js"></script>
   <script src="/js/bootstrap-slider.js"></script>
   <script src="/js/bootstrap-filestyle.min.js"></script>
   <!-- Animo-->
   <script src="/js/animo.min.js"></script>
   <!-- Sparklines-->
   <script src="/js/jquery.sparkline.min.js"></script>
   <!-- Slimscroll-->
   <script src="/js/jquery.slimscroll.min.js"></script>
   <!-- Store + JSON-->
   <script src="/js/store+json2.min.js"></script>
   <!-- Classyloader-->
   <script src="/js/jquery.classyloader.min.js"></script>
   <!-- START Page Custom Script-->
   <!-- jQuery UI-->
   <script src="/js/jquery-ui-1.10.4.custom.min.js"></script>
   <script src="/js/jquery.ui.touch-punch.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src="/js/custom.js"></script>
   <!-- END Scripts-->
</body>

</html>
