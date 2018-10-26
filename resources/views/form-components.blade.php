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

        <!-- NoUiSlider -->
        <link href="{{ asset('vendors/bower_components/nouislider/distribute/nouislider.min.css') }}" rel="stylesheet">

        <!-- Bootstrap Date/Time picker -->
        <link href="{{ asset('vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

        <!-- Farbtastic Color Picker-->
        <link href="{{ asset('vendors/farbtastic/farbtastic.css') }}" rel="stylesheet">

        <!-- Select 2 -->
        <link href="{{ asset('vendors/bower_components/select2/dist/css/select2.min.css') }}" rel="stylesheet">

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
                    <li><a class="user-alert__messages" href="form-components.html#notifications__messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="user-alert__notifications" href="form-components.html#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="user-alert__tasks" href="form-components.html#notifications__tasks" data-toggle="tab"><i class="zmdi zmdi-playlist-plus"></i></a></li>
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
                        <li class="navigation__sub">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-view-list"></i> Tables</a>

                            <ul>
                                <li><a href="tables.html">Normal Tables</a></li>
                                <li><a href="data-tables.html">Data Tables</a></li>
                            </ul>
                        </li>
                        <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-text"></i> Forms</a>
                            <ul>
                                <li><a href="form-elements.html">Basic Form Elements</a></li>
                                <li class="navigation__active"><a href="form-components.html">Form Components</a></li>
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
                    <h2>Form Components</h2>

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
                        <h2>Input Groups <small>Extend form controls by adding text or buttons before, after, or on both sides of any text-based inputs.</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Basic Example - Place one add-on or button on either side of an input. You may also place one on both sides of an input.</p>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <br/>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-local-phone"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Contact Number">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <br/>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email Address">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>

                                <br/>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-pin"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Home Address">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Landscape">
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <span class="input-group-addon"><i class="zmdi zmdi-landscape"></i></span>
                                </div>

                                <br/>

                                <div class="input-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Weather">
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                                </div>

                                <br/>

                                <div class="input-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Flight">
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <span class="input-group-addon"><i class="zmdi zmdi-airplane"></i></span>
                                </div>

                                <br/>

                                <div class="input-group">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Location">
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <span class="input-group-addon"><i class="zmdi zmdi-my-location"></i></span>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-arrow-missed"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Internet">
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <span class="input-group-addon"><i class="zmdi zmdi-globe"></i></span>
                                </div>

                                <br/>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-money"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Notifications">
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <span class="input-group-addon"><i class="zmdi zmdi-plus-circle-o"></i></span>
                                </div>

                                <br/>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Layers">
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <span class="input-group-addon"><i class="zmdi zmdi-layers"></i></span>
                                </div>

                                <br/>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-portable-wifi"></i></span>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Messages">
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <span class="input-group-addon"><i class="zmdi zmdi-dialpad"></i></span>
                                </div>
                            </div>
                        </div>

                        <br/>
                        <br/>
                        <br/>

                        <p>Floating Labels - Basic example for input groups with floating labels</p>

                        <div class="row">
                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>Full Name</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>Location</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <span class="input-group-addon last"><i class="zmdi zmdi-my-location"></i></span>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-mail-send"></i></span>
                                    <div class="form-group form-group--float">
                                        <input type="text" class="form-control">
                                        <label>Layers</label>
                                        <i class="form-group__bar"></i>
                                    </div>
                                    <span class="input-group-addon last"><i class="zmdi zmdi-layers"></i></span>
                                </div>
                            </div>
                        </div>

                        <br/>
                        <br/>
                        <br/>

                        <p>Different Sizes - You may use the extra sizing classes to change size of the fields./p>

                        <br/>

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                            <div class="form-group">
                                <input type="text" class="form-control input-lg" placeholder="Weather">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <br/>

                        <div class="input-group">
                            <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Weather">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>

                        <br/>

                        <div class="input-group input-group-sm">
                            <span class="input-group-addon"><i class="zmdi zmdi-sun"></i></span>
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" placeholder="Weather">
                                <i class="form-group__bar"></i>
                            </div>
                        </div>
                    </div>

                    <br/>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Input Mask <small>An input mask helps the user with the input by ensuring a predefined format. This can be useful for dates, numerics, phone numbers etc...</small></h2>
                    </div>

                    <div class="card__body">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="text" class="form-control input-mask" data-mask="00/00/0000" placeholder="eg: 23/05/2014">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Time</label>
                                    <input type="text" class="form-control input-mask" data-mask="00:00:00" placeholder="eg: 23:06:55">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Date Time</label>
                                    <input type="text" class="form-control input-mask" data-mask="00/00/0000 00:00:00" placeholder="eg: 00/00/0000 00:00:00">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>CEP</label>
                                    <input type="text" class="form-control input-mask" data-mask="00000-000" placeholder="eg: 00000-000">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control input-mask" data-mask="000-00-0000000" placeholder="eg: 000-00-0000000">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Phone with Odd</label>
                                    <input type="text" class="form-control input-mask" data-mask="(00) 0000-0000" placeholder="eg: (00) 0000-0000">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>US Phone Number</label>
                                    <input type="text" class="form-control input-mask" data-mask="(000) 000-0000" placeholder="eg: (000) 000-0000">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>CPF</label>
                                    <input type="text" class="form-control input-mask" data-mask="000.000.000-00" placeholder="eg: 000.000.000-00">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Money</label>
                                    <input type="text" class="form-control input-mask" data-mask="000.000.000.000.000,00" placeholder="eg: 000.000.000.000.000,00">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3 m-b-20">
                                <div class="form-group">
                                    <label>IP Address</label>
                                    <input type="text" class="form-control input-mask" data-mask="000.000.000.000" placeholder="eg: 000.000.000.000">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Percentage</label>
                                    <input type="text" class="form-control input-mask" data-mask="00000,00%" placeholder="eg: 00000,00%">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Credit Card</label>
                                    <input type="text" class="form-control input-mask" data-mask="0000 0000 0000 0000" placeholder="eg: 0000 0000 0000 0000">
                                    <i class="form-group__bar"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Select 2 <small>Select2 gives you a customizable select box with support for searching, tagging, remote data sets, infinite scrolling, and many other highly used options.</small></h2>
                    </div>

                    <div class="card__body">
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <p>Basic Example - Single Select</p>

                                <div class="form-group">
                                    <select class="select2">
                                        <option>Subaru</option>
                                        <option>Mitsubishi</option>
                                        <option>Scion</option>
                                        <option>Daihatsu</option>
                                        <option>Hino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <p>Placeholder Text</p>

                                <div class="form-group">
                                    <select class="select2" data-placeholder="Select a brand">
                                        <option>&nbsp;</option>
                                        <option>Subaru</option>
                                        <option>Mitsubishi</option>
                                        <option>Scion</option>
                                        <option>Daihatsu</option>
                                        <option>Hino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <p>Disabled Select</p>

                                <div class="form-group">
                                    <select class="select2" data-placeholder="This one is disabled" disabled>
                                        <option>&nbsp;</option>
                                        <option>Subaru</option>
                                        <option>Mitsubishi</option>
                                        <option>Scion</option>
                                        <option>Daihatsu</option>
                                        <option>Hino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <p>Disabled Results</p>

                                <div class="form-group">
                                    <select class="select2">
                                        <option>Subaru</option>
                                        <option>Mitsubishi</option>
                                        <option disabled>Scion</option>
                                        <option disabled>Daihatsu</option>
                                        <option>Hino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <p>Hide Search Box</p>

                                <div class="form-group">
                                    <select class="select2" data-minimum-results-for-search="Infinity">
                                        <option>Subaru</option>
                                        <option>Mitsubishi</option>
                                        <option disabled>Scion</option>
                                        <option disabled>Daihatsu</option>
                                        <option>Hino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-sm-6 col-md-4">
                                <p>Multiple</p>

                                <div class="form-group">
                                    <select class="select2" multiple data-placeholder="Select one or more choices">
                                        <option>Subaru</option>
                                        <option>Mitsubishi</option>
                                        <option>Scion</option>
                                        <option>Daihatsu</option>
                                        <option>Hino</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Toggle Switch <small>CSS only Checkbox based toggle Switches.</small></h2>
                    </div>

                    <div class="card__body">
                        <div class="row">
                            <div class="col-sm-4 col-md-3">
                                <p>Basic Example</p>

                                <div class="form-group">
                                    <div class="toggle-switch">
                                        <input type="checkbox" class="toggle-switch__checkbox">
                                        <i class="toggle-switch__helper"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-3">
                                <p>Active State</p>

                                <div class="form-group">
                                    <div class="toggle-switch">
                                        <input type="checkbox" class="toggle-switch__checkbox" checked>
                                        <i class="toggle-switch__helper"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-3">
                                <p>Disabled</p>

                                <div class="form-group">
                                    <div class="toggle-switch">
                                        <input type="checkbox" class="toggle-switch__checkbox" disabled>
                                        <i class="toggle-switch__helper"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Input Slider <small>noUiSlider is a range slider without bloat. It offers a ton off features, and it is as small, lightweight and minimal as possible, which is great for mobile use on the many supported devices.</small></h2>
                    </div>

                    <div class="card__body">
                        <p>Basic Example</p>

                        <div id="slider-basic"></div>

                        <br/>
                        <br/>

                        <p>Range Slider</p>

                        <div id="slider-range"></div>

                        <br/>
                        <br/>

                        <p>Output Values</p>

                        <div>
                            <div id="slider-complete"></div>

                            <div class="clearfix m-t-15">
                                <div class="pull-left" id="slider-complete-upper"></div>
                                <div class="pull-right" id="slider-complete-lower"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Date Time Picker <small>Date/time picker widget based on twitter bootstrap</small></h2>
                    </div>

                    <div class="card-padding card__header">

                        <div class="row">
                            <div class="col-sm-4">
                                <p>Basic Example - Date and Time Picker</p>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="form-group">
                                        <input type='text' class="form-control date-time-picker" placeholder="Click here...">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>


                            <div class="col-sm-4">
                                <p>Date Picker only</p>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i></span>
                                        <div class="form-group">
                                        <input type='text' class="form-control date-picker" placeholder="Click here...">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <p>Time Picker only</p>

                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-time"></i></span>
                                        <div class="form-group">
                                        <input type='text' class="form-control time-picker" placeholder="Click here...">
                                        <i class="form-group__bar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Color Picker <small>Simplt HEX and HSL color picker with customizable options</small></h2>
                    </div>

                    <div class="card__body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="color-picker">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                        <div class="form-group dropdown">
                                            <input type="text" class="form-control color-picker__value" value="#03A9F4" data-toggle="dropdown">
                                            <i class="form-group__bar"></i>

                                            <div class="color-picker__value"></div>
                                            <div class="dropdown-menu">
                                                <div class="color-picker__target"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="color-picker">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                        <div class="form-group dropdown">
                                            <input type="text" class="form-control color-picker__value" value="#8BC34A" data-toggle="dropdown">
                                            <i class="form-group__bar"></i>

                                            <div class="color-picker__value"></div>
                                            <div class="dropdown-menu">
                                                <div class="color-picker__target"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="color-picker">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                        <div class="form-group dropdown">
                                            <input type="text" class="form-control color-picker__value" value="#F44336" data-toggle="dropdown">
                                            <i class="form-group__bar"></i>

                                            <div class="color-picker__value"></div>
                                            <div class="dropdown-menu">
                                                <div class="color-picker__target"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="color-picker">
                                    <div class="input-group form-group">
                                        <span class="input-group-addon"><i class="zmdi zmdi-invert-colors"></i></span>
                                        <div class="form-group dropdown">
                                            <input type="text" class="form-control color-picker__value" value="#FFC107" data-toggle="dropdown">

                                            <div class="color-picker__value"></div>
                                            <div class="dropdown-menu">
                                                <div class="color-picker__target"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br/>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card__header">
                        <h2>Simple File Input <small>This file input plugin allows you to create a visually appealing file or image input widgets</small></h2>
                    </div>

                    <div class="card__body">
                        <div class="row">
                            <div class="col-sm-4">
                                <p >Basic Example</p>

                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <span class="btn btn-default btn-file">
                                        <span class="fileinput-new">Select file</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="...">
                                    </span>
                                    <span class="fileinput-filename"></span>
                                    <a href="form-components.html#" class="fileinput__close fileinput-exists" data-dismiss="fileinput">
                                        <i class="zmdi zmdi-close-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <br/>
                        <br/>

                        <p>Image Preview</p>

                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-preview" data-trigger="fileinput"></div>

                            <a href="form-components.html#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                            <span class="btn btn-default btn-file">
                                <span class="fileinput-new">Select image</span>
                                <span class="fileinput-exists">Change</span>
                                <input type="file" name="...">
                            </span>
                        </div>

                        <br/>
                        <br/>
                        <p><em>Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead.</em></p>
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
        
        <!-- Moment -->
        <script src="vendors/bower_components/moment/min/moment.min.js"></script>

        <!-- NoUiSlider -->
        <script src="vendors/bower_components/nouislider/distribute/nouislider.min.js"></script>

        <!-- Bootstrap Date/Time Picker -->
        <script src="vendors/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Select 2 -->
        <script src="vendors/bower_components/select2/dist/js/select2.full.min.js"></script>

        <!-- Simple File Input -->
        <script src="vendors/fileinput/fileinput.min.js"></script>

        <!-- jQuery Mask -->
        <script src="vendors/bower_components/jquery-mask-plugin/dist/jquery.mask.min.js"></script>

        <!-- Farbtastic Color Picker -->
        <script src="vendors/farbtastic/farbtastic.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <!-- Demo Only -->
        <script src="demo/js/misc.js"></script>

        <!-- Site Functions & Actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>