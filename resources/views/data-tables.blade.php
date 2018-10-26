<!DOCTYPE html>
<html lang="en">
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Material Admin</title>

        <!-- Vendors -->

        <!-- Animate CSS -->
        <link href="{{ asset('vendors/bower_components/animate.css/animate.min.css') }}" rel="stylesheet">

        <!-- Material Design Icons -->
        <link href="{{ asset('vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css') }}" rel="stylesheet">

        <!-- Malihu Scrollbar -->
        <link href="{{ asset('vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">

        <!-- Bootgrid -->
        <link href="{{ asset('vendors/bower_components/jquery.bootgrid/dist/jquery.bootgrid.min.css') }}" rel="stylesheet">

        <!-- Site CSS -->
        <link href="{{ asset('css/app-1.min.css') }}" rel="stylesheet">

        <!-- Page loader -->
        <script src="{{ asset('js/page-loader.min.js') }}"></script>
    <script src="{{ asset('../../../google_analytics_auto.js') }}"></script></head>

    <body>
        <!-- Page Loader -->
        <div id="page-loader">
            <div class="preloader preloader--xl preloader--light">
                <svg viewBox="25 25 50 50">
                    <circle cx="50" cy="50" r="20" />
                </svg>
            </div>
        </div>

        <!-- Header -->
        <header id="header">
            <div class="logo">
                <a href="index.html" class="hidden-xs">
                    Material
                    <small>admin extended dark</small>
                </a>
                <i class="logo__trigger zmdi zmdi-menu" data-mae-action="block-open" data-mae-target="#navigation"></i>
            </div>

            <ul class="top-menu">
                <li class="top-menu__trigger hidden-lg hidden-md">
                    <a href=""><i class="zmdi zmdi-search"></i></a>
                </li>

                <li class="top-menu__apps dropdown hidden-xs hidden-sm">
                    <a data-toggle="dropdown" href="">
                        <i class="zmdi zmdi-apps"></i>
                    </a>
                    <ul class="dropdown-menu pull-right">
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-calendar"></i>
                                <small>Calendar</small>
                            </a>
                        </li>

                        <li>
                            <a href="">
                                <i class="zmdi zmdi-file-text"></i>
                                <small>Files</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-email"></i>
                                <small>Mail</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-trending-up"></i>
                                <small>Analytics</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-view-headline"></i>
                                <small>News</small>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <i class="zmdi zmdi-image"></i>
                                <small>Gallery</small>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown hidden-xs">
                    <a data-toggle="dropdown" href=""><i class="zmdi zmdi-more-vert"></i></a>
                    <ul class="dropdown-menu dropdown-menu--icon pull-right">
                        <li class="hidden-xs">
                            <a data-mae-action="fullscreen" href=""><i class="zmdi zmdi-fullscreen"></i> Toggle Fullscreen</a>
                        </li>
                        <li>
                            <a data-mae-action="clear-localstorage" href=""><i class="zmdi zmdi-delete"></i> Clear Local Storage</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-face"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-settings"></i> Other Settings</a>
                        </li>
                    </ul>
                </li>
                <li class="top-menu__alerts" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                    <a href=""><i class="zmdi zmdi-notifications"></i></a>
                </li>
                <li class="top-menu__profile dropdown">
                    <a data-toggle="dropdown" href="">
                        <img src="demo/img/profile-pics/1.jpg" alt="">
                    </a>

                    <ul class="dropdown-menu pull-right dropdown-menu--icon">
                        <li>
                            <a href="profile-about.html"><i class="zmdi zmdi-account"></i> View Profile</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-input-antenna"></i> Privacy Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-settings"></i> Settings</a>
                        </li>
                        <li>
                            <a href=""><i class="zmdi zmdi-time-restore"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <form class="top-search">
                <input type="text" class="top-search__input" placeholder="Search for people, files & reports">
                <i class="zmdi zmdi-search top-search__reset"></i>
            </form>
        </header>

        <section id="main">
            <aside id="notifications">
                <ul class="tab-nav tab-nav--justified tab-nav--icon">
                    <li><a class="user-alert__messages" href="data-tables.html#notifications__messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="user-alert__notifications" href="data-tables.html#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="user-alert__tasks" href="data-tables.html#notifications__tasks" data-toggle="tab"><i class="zmdi zmdi-playlist-plus"></i></a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane" id="notifications__messages">
                        <div class="list-group">
                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="list-group__heading">David Villa Jacobs</div>
                                    <small class="list-group__text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/5.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Candice Barnes</div>
                                    <small class="list-group__text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Jeannette Lawson</div>
                                    <small class="list-group__text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Darla Mckinney</div>
                                    <small class="list-group__text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-left">
                                    <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Rudolph Perez</div>
                                    <small class="list-group__text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>

                        <a href="" class="btn btn--float">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>

                    <div class="tab-pane" id="notifications__updates">
                        <div class="list-group">
                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                                </div>

                                <div class="media-body">
                                    <div class="list-group__heading">David Villa Jacobs</div>
                                    <small class="list-group__text">Sorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam mattis lobortis sapien non posuere</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item">
                                <div class="list-group__heading">Candice Barnes</div>
                                <small class="list-group__text">Quisque non tortor ultricies, posuere elit id, lacinia purus curabitur.</small>
                            </a>

                            <a href="" class="list-group-item">
                                <div class="list-group__heading">Jeannette Lawson</div>
                                <small class="list-group__text">Donec congue tempus ligula, varius hendrerit mi hendrerit sit amet. Duis ac quam sit amet leo feugiat iaculis</small>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="demo/img/profile-pics/4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Darla Mckinney</div>
                                    <small class="list-group__text">Duis tincidunt augue nec sem dignissim scelerisque. Vestibulum rhoncus sapien sed nulla aliquam lacinia</small>
                                </div>
                            </a>

                            <a href="" class="list-group-item media">
                                <div class="pull-right">
                                    <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <div class="list-group__heading">Rudolph Perez</div>
                                    <small class="list-group__text">Phasellus a ullamcorper lectus, sit amet viverra quam. In luctus tortor vel nulla pharetra bibendum</small>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="tab-pane" id="notifications__tasks">
                        <div class="list-group">
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">HTML5 Validation Report</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                        <span class="sr-only">95% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Google Chrome Extension</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (success)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Social Intranet Projects</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                        <span class="sr-only">20% Complete</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Bootstrap Admin Template</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (warning)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="list-group__heading m-b-5">Youtube Client App</div>

                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                        <span class="sr-only">80% Complete (danger)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="" class="btn btn--float">
                            <i class="zmdi zmdi-plus"></i>
                        </a>
                    </div>
                </div>
            </aside>

            <aside id="navigation">
                <div class="navigation__header">
                    <i class="zmdi zmdi-long-arrow-left" data-mae-action="block-close"></i>
                </div>

                <div class="navigation__toggles">
                    <a href="" class="active" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__messages">
                        <i class="zmdi zmdi-email"></i>
                    </a>
                    <a href="" data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__updates">
                        <i class="zmdi zmdi-notifications"></i>
                    </a>
                    <a href=""  data-mae-action="block-open" data-mae-target="#notifications" data-toggle="tab" data-target="#notifications__tasks">
                        <i class="zmdi zmdi-playlist-plus"></i>
                    </a>
                </div>

                <div class="navigation__menu c-overflow">
                    <ul>
                        <li>
                            <a href="index.html"><i class="zmdi zmdi-home"></i> Home</a>
                        </li>
                        <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>
                        <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>
                        <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Tables</a>

                            <ul>
                                <li><a href="tables.html">Normal Tables</a></li>
                                <li class="navigation__active"><a href="data-tables.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Forms</a>
                            <ul>
                                <li><a href="form-elements.html">Basic Form Elements</a></li>
                                <li><a href="form-components.html">Form Components</a></li>
                                <li><a href="form-examples.html">Form Examples</a></li>
                                <li><a href="form-validations.html">Form Validation</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-swap-alt"></i>User Interface</a>
                            <ul>
                                <li><a href="animations.html">Animations</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="icons.html">Icons</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="preloaders.html">Preloaders</a></li>
                                <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                                <li><a href="media.html">Media</a></li>
                                <li><a href="components.html">Components</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-trending-up"></i>Charts</a>
                            <ul>
                                <li><a href="flot-charts.html">Flot Chart</a></li>
                                <li><a href="other-charts.html">Others</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-image"></i>Photo Gallery</a>
                            <ul>
                                <li><a href="photos.html">Default</a></li>
                                <li><a href="photo-timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>
                        <li><a href="generic-classes.html"><i class="zmdi zmdi-layers"></i> Generic Classes</a></li>
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                            <ul>
                                <li><a href="profile-timeline.html">Profile</a></li>
                                <li><a href="list-view.html">List View</a></li>
                                <li><a href="messages.html">Messages</a></li>
                                <li><a href="pricing-table.html">Pricing Table</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="wall.html">Wall</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="login.html">Login and Sign Up</a></li>
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="404.html">Error 404</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <section id="content">
                <div class="content__header">
                    <h2>Data Table</h2>

                    <div class="actions">
                        <a href=""><i class="zmdi zmdi-check-all"></i></a>
                        <a href=""><i class="zmdi zmdi-trending-up"></i></a>
                        <div class="dropdown">
                            <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="">Change Date Range</a></li>
                                <li><a href="">Change Graph Type</a></li>
                                <li><a href="">Other Settings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Basic Example <small>It's just that simple. Turn your simple table into a sophisticated data table and offer your users a nice experience and great features without any effort.</small></h2>
                    </div>

                    <div class="card__body">
                        <div class="table-responsive">
                            <table id="data-table-basic" class="table-striped">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric">ID</th>
                                        <th data-column-id="sender">Sender</th>
                                        <th data-column-id="received" data-order="desc">Received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10238</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>14.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10243</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>19.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10248</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>24.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10253</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>29.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10234</td>
                                        <td>lila@google.com</td>
                                        <td>10.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10239</td>
                                        <td>lila@google.com</td>
                                        <td>15.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10244</td>
                                        <td>lila@google.com</td>
                                        <td>20.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10249</td>
                                        <td>lila@google.com</td>
                                        <td>25.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10237</td>
                                        <td>robert@bingo.com</td>
                                        <td>13.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10242</td>
                                        <td>robert@bingo.com</td>
                                        <td>18.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10247</td>
                                        <td>robert@bingo.com</td>
                                        <td>23.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10252</td>
                                        <td>robert@bingo.com</td>
                                        <td>28.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10236</td>
                                        <td>simon@yahoo.com</td>
                                        <td>12.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10241</td>
                                        <td>simon@yahoo.com</td>
                                        <td>17.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10246</td>
                                        <td>simon@yahoo.com</td>
                                        <td>22.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10251</td>
                                        <td>simon@yahoo.com</td>
                                        <td>27.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10235</td>
                                        <td>tim@microsoft.com</td>
                                        <td>11.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10240</td>
                                        <td>tim@microsoft.com</td>
                                        <td>16.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10245</td>
                                        <td>tim@microsoft.com</td>
                                        <td>21.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10250</td>
                                        <td>tim@microsoft.com</td>
                                        <td>26.10.2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Selection Example <small>Ensure that the data attribute [data-identifier="true"] is set on one column header.</small></h2>
                    </div>

                    <div class="card__body">
                        <div class="table-responsive">
                            <table id="data-table-selection" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th data-column-id="id" data-type="numeric" data-identifier="true">ID</th>
                                        <th data-column-id="sender">Sender</th>
                                        <th data-column-id="received" data-order="desc">Received</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>10238</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>14.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10243</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>19.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10248</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>24.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10253</td>
                                        <td>eduardo@pingpong.com</td>
                                        <td>29.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10234</td>
                                        <td>lila@google.com</td>
                                        <td>10.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10239</td>
                                        <td>lila@google.com</td>
                                        <td>15.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10244</td>
                                        <td>lila@google.com</td>
                                        <td>20.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10249</td>
                                        <td>lila@google.com</td>
                                        <td>25.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10237</td>
                                        <td>robert@bingo.com</td>
                                        <td>13.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10242</td>
                                        <td>robert@bingo.com</td>
                                        <td>18.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10247</td>
                                        <td>robert@bingo.com</td>
                                        <td>23.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10252</td>
                                        <td>robert@bingo.com</td>
                                        <td>28.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10236</td>
                                        <td>simon@yahoo.com</td>
                                        <td>12.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10241</td>
                                        <td>simon@yahoo.com</td>
                                        <td>17.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10246</td>
                                        <td>simon@yahoo.com</td>
                                        <td>22.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10251</td>
                                        <td>simon@yahoo.com</td>
                                        <td>27.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10235</td>
                                        <td>tim@microsoft.com</td>
                                        <td>11.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10240</td>
                                        <td>tim@microsoft.com</td>
                                        <td>16.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10245</td>
                                        <td>tim@microsoft.com</td>
                                        <td>21.10.2013</td>
                                    </tr>
                                    <tr>
                                        <td>10250</td>
                                        <td>tim@microsoft.com</td>
                                        <td>26.10.2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Selection Example <small>Ensure that the data attribute [data-identifier="true"] is set on one column header.</small></h2>
                    </div>

                    <div class="card__body">
                        <table id="data-table-command" class="table table-striped table--vmiddle">
                            <thead>
                                <tr>
                                    <th data-column-id="id" data-type="numeric">ID</th>
                                    <th data-column-id="sender">Sender</th>
                                    <th data-column-id="received" data-order="desc">Received</th>
                                    <th data-column-id="commands" data-formatter="commands" data-sortable="false">Commands</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>10238</td>
                                    <td>eduardo@pingpong.com</td>
                                    <td>14.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10243</td>
                                    <td>eduardo@pingpong.com</td>
                                    <td>19.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10248</td>
                                    <td>eduardo@pingpong.com</td>
                                    <td>24.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10253</td>
                                    <td>eduardo@pingpong.com</td>
                                    <td>29.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10234</td>
                                    <td>lila@google.com</td>
                                    <td>10.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10239</td>
                                    <td>lila@google.com</td>
                                    <td>15.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10244</td>
                                    <td>lila@google.com</td>
                                    <td>20.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10249</td>
                                    <td>lila@google.com</td>
                                    <td>25.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10237</td>
                                    <td>robert@bingo.com</td>
                                    <td>13.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10242</td>
                                    <td>robert@bingo.com</td>
                                    <td>18.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10247</td>
                                    <td>robert@bingo.com</td>
                                    <td>23.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10252</td>
                                    <td>robert@bingo.com</td>
                                    <td>28.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10236</td>
                                    <td>simon@yahoo.com</td>
                                    <td>12.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10241</td>
                                    <td>simon@yahoo.com</td>
                                    <td>17.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10246</td>
                                    <td>simon@yahoo.com</td>
                                    <td>22.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10251</td>
                                    <td>simon@yahoo.com</td>
                                    <td>27.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10235</td>
                                    <td>tim@microsoft.com</td>
                                    <td>11.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10240</td>
                                    <td>tim@microsoft.com</td>
                                    <td>16.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10245</td>
                                    <td>tim@microsoft.com</td>
                                    <td>21.10.2013</td>
                                </tr>
                                <tr>
                                    <td>10250</td>
                                    <td>tim@microsoft.com</td>
                                    <td>26.10.2013</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <footer id="footer">
                Copyright &copy; 2015 Material Admin

                <ul class="footer__menu">
                    <li><a href="">Home</a></li>
                    <li><a href="">Dashboard</a></li>
                    <li><a href="">Reports</a></li>
                    <li><a href="">Support</a></li>
                    <li><a href="">Contact</a></li>
                </ul>
            </footer>
        </section>

        <!-- Older IE Warning -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1>Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="ie-warning__container">
                    <ul class="ie-warning__download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->


        <!-- Javascript Libraries -->

        <!-- jQuery -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>

        <!-- Bootstrap -->
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <!-- Malihu ScrollBar -->
        <script src="vendors/bower_components/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

        <!-- Bootstrap Notify -->
        <script src="vendors/bower_components/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>

        <!-- Bootgrid -->
        <script src="vendors/bower_components/jquery.bootgrid/dist/jquery.bootgrid.min.js"></script>
        
        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Demo Only -->
        <script src="demo/js/misc.js"></script>
        <script src="demo/js/data-table.js"></script>

        <!-- Site Functions & Actions -->
        <script src="js/app.min.js"></script>
    </body>
  </html>