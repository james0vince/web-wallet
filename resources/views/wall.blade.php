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

        <!-- Light Gallery -->
        <link href="{{ asset('vendors/bower_components/lightgallery/dist/css/lightgallery.min.css') }}" rel="stylesheet">

        <!-- Site CSS -->
        <link href="{{ asset('css/app-1.min.css')" rel="stylesheet">

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
                    <li><a class="user-alert__messages" href="wall.html#notifications__messages" data-toggle="tab"><i class="zmdi zmdi-email"></i></a></li>
                    <li><a class="user-alert__notifications" href="wall.html#notifications__updates" data-toggle="tab"><i class="zmdi zmdi-notifications"></i></a></li>
                    <li><a class="user-alert__tasks" href="wall.html#notifications__tasks" data-toggle="tab"><i class="zmdi zmdi-playlist-plus"></i></a></li>
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
                        <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                            <a href="" data-mae-action="submenu-toggle"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>
                            <ul>
                                <li><a href="profile-timeline.html">Profile</a></li>
                                <li><a href="list-view.html">List View</a></li>
                                <li><a href="messages.html">Messages</a></li>
                                <li><a href="pricing-table.html">Pricing Table</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li class="navigation__active"><a href="wall.html">Wall</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="login.html">Login and Sign Up</a></li>
                                <li><a href="lockscreen.html">Lockscreen</a></li>
                                <li><a href="404.html">Error 404</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </aside>

            <section id="content" class="content--boxed">
                <div class="content__header">
                    <h2>Wall <small>Yeah, I got wall views as well!. These image grids are generated only using CSS.</small></h2>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="card wall__posting">
                            <textarea class="form-control textarea-autosize" placeholder="Write Something..."></textarea>

                            <div class="wall__actions">
                                <div class="wall__actions__items">
                                    <a href=""><i class="zmdi zmdi-image"></i></a>
                                    <a href=""><i class="zmdi zmdi-play-circle"></i></a>
                                    <a href=""><i class="zmdi zmdi-link"></i></a>
                                </div>

                                <button class="wall__actions__btn btn btn-default">Post</button>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__header">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="demo/img/profile-pics/1.jpg" alt="">
                                    </div>

                                    <div class="media-body">
                                        <h2>Mallinda Hollaway <small>Posted on 31st Aug 2015 at 07:00</small></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card__body">
                                <p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eget dolor id justo luctus commodo vel pharetra nisi. Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>

                                <div class="wall__img lightbox">
                                    <div class="wall__img__item" data-src="demo/img/headers/4.png" style="background-image: url('demo/img/headers/4.png');">
                                        <img src="demo/img/headers/4.png" alt="">
                                    </div>
                                </div>

                                <div class="wall__attrs">
                                    <div class="wall__stats">
                                        <span><i class="zmdi zmdi-comments"></i> 36</span>
                                        <span class="active"><i class="zmdi zmdi-favorite"></i> 220</span>
                                    </div>

                                    <div class="wall__people hidden-xs">
                                        <a href=""><img src="demo/img/profile-pics/1.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/2.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/3.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/5.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="wall__comments">
                                
                                <div class="wall__comments__lists">
                                    <div class="media">
                                        <a href="" class="pull-left"><img src="demo/img/profile-pics/5.jpg" alt="" class="avatar-img"></a>

                                        <div class="media-body">
                                            <a>David Nathan</a> <small class="m-l-10">3 mins ago...</small>
                                            <p>Maecenas dignissim in neque id commodo. Nam pretium a tortor a convallis. Curabitur in arcu quis nulla aliquam condimentum. Morbi eu cursus diam, vitae tristique dui.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/4.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Sam Anderson</a> <small class="m-l-10">3 mins ago...</small>
                                            <p>Curabitur in arcu quis nulla aliquam condimentum.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form class="wall__comments__input">
                                    <textarea class="textarea-autosize" placeholder="Write something..."></textarea>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__header">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="demo/img/profile-pics/3.jpg" alt="">
                                    </div>

                                    <div class="media-body">
                                        <h2>Felix Harper <small>Posted on 29th Aug 2015 at 02:10</small></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card__body">
                                <p>Aliquam vel sem ut ligula posuere viverra. Ut dolor nisi, fringilla quis consectetur maximus, finibus vel diam. Duis condimentum, diam in semper congue, tortor orci condimentum urna</p>

                                <div class="wall__attrs">
                                    <div class="wall__stats">
                                        <span><i class="zmdi zmdi-comments"></i> 0</span>
                                        <span><i class="zmdi zmdi-favorite"></i> 0</span>
                                    </div>

                                    <div class="wall__people hidden-xs">
                                        <a href=""><img src="demo/img/profile-pics/3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="wall-comments">
                                <form class="wall__comments__input">
                                    <textarea class="textarea-autosize" placeholder="Write something..."></textarea>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__header">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                                    </div>

                                    <div class="media-body">
                                        <h2>Morgan Francis <small>Posted on 2nd Sep 2015 at 17:00</small></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card__body">
                                <p>Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>

                                <div class="wall__img lightbox">
                                    <div class="wall__img__item" data-src="demo/img/gallery/2.jpg" style="background-image: url('demo/img/gallery/2.jpg');">
                                        <img src="demo/img/gallery/thumbs/2.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/3.jpg" style="background-image: url('demo/img/gallery/3.jpg');">
                                        <img src="demo/img/gallery/thumbs/2.jpg" alt="">
                                    </div>
                                </div>

                                <div class="wall__attrs">
                                    <div class="wall__stats">
                                        <span><i class="zmdi zmdi-comments"></i> 20</span>
                                        <span class="active"><i class="zmdi zmdi-favorite"></i> 78</span>
                                    </div>

                                    <div class="wall__people hidden-xs">
                                        <a href=""><img src="demo/img/profile-pics/2.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="wall-comments">

                                <div class="wall__comments__lists">
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/3.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Samantha Diaz</a> <small class="m-l-10">1 hour ago...</small>
                                            <p>Pellentesque mollis fringilla finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form class="wall__comments__input">
                                    <textarea class="textarea-autosize" placeholder="Write something..."></textarea>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__header">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="demo/img/profile-pics/5.jpg" alt="">
                                    </div>

                                    <div class="media-body">
                                        <h2>Morgan Francis <small>Posted on 2nd Sep 2015 at 17:00</small></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card__body">
                                <p>Donec velit libero, gravida vel diam ut, lobortis mollis quam. Morbi posuere egestas posuere. Curabitur in dui sollicitudin, lacinia magna at, laoreet sapien. Integer vitae eros nulla.</p>

                                <div class="wall__img lightbox">
                                    <div class="wall__img__item" data-src="demo/img/gallery/4.jpg" style="background-image: url('demo/img/gallery/4.jpg');">
                                        <img src="demo/img/gallery/thumbs/4.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/5.jpg" style="background-image: url('demo/img/gallery/5.jpg');">
                                        <img src="demo/img/gallery/thumbs/5.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/6.jpg" style="background-image: url('demo/img/gallery/6.jpg');">
                                        <img src="demo/img/gallery/thumbs/6.jpg" alt="">
                                    </div>
                                </div>

                                <div class="wall__attrs">
                                    <div class="wall__stats">
                                        <span><i class="zmdi zmdi-comments"></i> 20</span>
                                        <span class="active"><i class="zmdi zmdi-favorite"></i> 78</span>
                                    </div>

                                    <div class="wall__people hidden-xs">
                                        <a href=""><img src="demo/img/profile-pics/2.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/3.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="wall-comments">

                                <!-- Comment Listing -->
                                <div class="wall__comments__lists">
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/3.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Samantha Diaz</a> <small class="m-l-10">1 hour ago...</small>
                                            <p>Pellentesque mollis fringilla finibus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form class="wall__comments__input">
                                    <textarea class="textarea-autosize" placeholder="Write something..."></textarea>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__header">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                                    </div>

                                    <div class="media-body">
                                        <h2>William Morrison <small>Posted on 3rd July 2015 at 7:00</small></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card__body">
                                <p>Nullam dignissim, metus et feugiat porttitor.</p>

                                <div class="wall__img lightbox">
                                    <div class="wall__img__item" data-src="demo/img/gallery/6.jpg" style="background-image: url('demo/img/gallery/6.jpg');">
                                        <img src="demo/img/gallery/thumbs/6.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/7.jpg" style="background-image: url('demo/img/gallery/7.jpg');">
                                        <img src="demo/img/gallery/thumbs/7.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/8.jpg" style="background-image: url('demo/img/gallery/8.jpg');">
                                        <img src="demo/img/gallery/thumbs/8.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/9.jpg" style="background-image: url('demo/img/gallery/9.jpg');">
                                        <img src="demo/img/gallery/thumbs/5.jpg" alt="">
                                    </div>
                                </div>

                                <div class="wall__attrs">
                                    <div class="wall__stats">
                                        <span><i class="zmdi zmdi-comments"></i> 100</span>
                                        <span class="active"><i class="zmdi zmdi-favorite"></i> 2432</span>
                                    </div>

                                    <div class="wall__people hidden-xs">
                                        <a href=""><img src="demo/img/profile-pics/1.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/7.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/9.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/8.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="wall-comments">

                                <!-- Comment Listing -->
                                <div class="wall__comments__lists">
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/9.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Finn Walking</a> <small class="m-l-10">3rd July 2015</small>
                                            <p>Per conubia nostra.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/8.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Benn Holder</a> <small class="m-l-10">3rd July 2015</small>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/3.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Seam Ford</a> <small class="m-l-10">3rd July 2015</small>
                                            <p>Praesent bibendum vulputate nulla vitae euismod. Fusce a metus eu ante sagittis viverra sit amet sed odio.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form class="wall__comments__input">
                                    <textarea class="textarea-autosize" placeholder="Write something..."></textarea>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__header">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="demo/img/profile-pics/7.jpg" alt="">
                                    </div>

                                    <div class="media-body">
                                        <h2>Johnni Schmidt <small>2nd on Jul 2015 at 02:10</small></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card__body">
                                <p>Morbi non eros nibh. Suspendisse ac nunc faucibus turpis pretium pretium. Nulla metus dui, convallis in lorem id, sodales tincidunt magna....</p>

                                <div class="wall__img lightbox">
                                    <div class="wall__img__item" data-src="demo/img/gallery/10.jpg" style="background-image: url('demo/img/gallery/10.jpg');">
                                        <img src="demo/img/gallery/thumbs/10.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/11.jpg" style="background-image: url('demo/img/gallery/11.jpg');">
                                        <img src="demo/img/gallery/thumbs/11.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/12.jpg" style="background-image: url('demo/img/gallery/12.jpg');">
                                        <img src="demo/img/gallery/thumbs/12.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/13.jpg" style="background-image: url('demo/img/gallery/13.jpg');">
                                        <img src="demo/img/gallery/thumbs/13.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/14.jpg" style="background-image: url('demo/img/gallery/14.jpg');">
                                        <img src="demo/img/gallery/thumbs/14.jpg" alt="">
                                    </div>
                                </div>

                                <div class="wall__attrs">
                                    <div class="wall__stats">
                                        <span><i class="zmdi zmdi-comments"></i> 2</span>
                                        <span><i class="zmdi zmdi-favorite"></i> 10</span>
                                    </div>

                                    <div class="wall__people hidden-xs">
                                        <a href=""><img src="demo/img/profile-pics/4.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/8.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="wall-comments">

                                <div class="wall__comments__lists">
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/8.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Jhon Sheamus</a> <small class="m-l-10">2nd July 2015...</small>
                                            <p>Vivamus vitae sapien et diam convallis hendrerit et eu leo. Nullam dignissim, metus et feugiat porttitor, nulla metus dapibus est, id eleifend nisi massa ac ante.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form class="wall__comments__input">
                                    <textarea class="textarea-autosize" placeholder="Write something..."></textarea>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__header">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="demo/img/profile-pics/6.jpg" alt="">
                                    </div>

                                    <div class="media-body">
                                        <h2>Sham Alexander <small>Posted on 30th July 2015 at 7:02</small></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card__body">
                                <p>Praesent sollicitudin venenatis mi, sed consectetur quam accumsan sollicitudin. Aenean ornare tincidunt odio luctus sagittis. Sed vehicula odio eu tortor iaculis, vel lobortis ipsum interdum. Vivamus vitae efficitur elit, in commodo nulla. Fusce ut odio blandit, feugiat mi vitae, pharetra neque. Mauris laoreet commodo augue eget ornare. Vestibulum hendrerit, turpis eget tristique consequat, risus risus dapibus augue, nec commodo nisi nunc mattis dui. Curabitur tempus nibh eget interdum faucibus.</p>

                                <div class="wall__img lightbox">
                                    <div class="wall__img__item" data-src="demo/img/gallery/15.jpg" style="background-image: url('demo/img/gallery/15.jpg');">
                                        <img src="demo/img/gallery/thumbs/15.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/16.jpg" style="background-image: url('demo/img/gallery/16.jpg');">
                                        <img src="demo/img/gallery/thumbs/16.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/17.jpg" style="background-image: url('demo/img/gallery/17.jpg');">
                                        <img src="demo/img/gallery/thumbs/17.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/18.jpg" style="background-image: url('demo/img/gallery/18.jpg');">
                                        <img src="demo/img/gallery/thumbs/18.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/19.jpg" style="background-image: url('demo/img/gallery/19.jpg');">
                                        <img src="demo/img/gallery/thumbs/19.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/20.jpg" style="background-image: url('demo/img/gallery/20.jpg');">
                                        <img src="demo/img/gallery/thumbs/20.jpg" alt="">
                                    </div>
                                </div>

                                <div class="wall__attrs">
                                    <div class="wall__stats">
                                        <span><i class="zmdi zmdi-comments"></i> 0</span>
                                        <span><i class="zmdi zmdi-favorite"></i> 0</span>
                                    </div>

                                    <div class="wall__people hidden-xs">
                                        <a href=""><img src="demo/img/profile-pics/6.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="wall-comments">
                                <form class="wall__comments__input">
                                    <textarea class="textarea-autosize" placeholder="Write something..."></textarea>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__header">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="demo/img/profile-pics/5.jpg" alt="">
                                    </div>

                                    <div class="media-body">
                                        <h2>Frances Gonzales <small>Posted on 25th July 2015 at 03:12</small></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card__body">
                                <p>Suspendisse dapibus ante ex, non tempor ligula molestie nec. In nisl dui, rutrum in libero id, condimentum fermentum velit. Praesent magna magna, aliquam ut purus sit amet, fringilla placerat ipsum</p>

                                <div class="wall__img lightbox">
                                    <div class="wall__img__item" data-src="demo/img/gallery/21.jpg" style="background-image: url('demo/img/gallery/21.jpg');">
                                        <img src="demo/img/gallery/thumbs/21.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/22.jpg" style="background-image: url('demo/img/gallery/22.jpg');">
                                        <img src="demo/img/gallery/thumbs/22.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/23.jpg" style="background-image: url('demo/img/gallery/23.jpg');">
                                        <img src="demo/img/gallery/thumbs/23.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/24.jpg" style="background-image: url('demo/img/gallery/24.jpg');">
                                        <img src="demo/img/gallery/thumbs/24.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/5.jpg" style="background-image: url('demo/img/gallery/5.jpg');">
                                        <img src="demo/img/gallery/thumbs/5.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/6.jpg" style="background-image: url('demo/img/gallery/6.jpg');">
                                        <img src="demo/img/gallery/thumbs/6.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/7.jpg" style="background-image: url('demo/img/gallery/7.jpg');">
                                        <img src="demo/img/gallery/thumbs/7.jpg" alt="">
                                    </div>
                                </div>

                                <div class="wall__attrs">
                                    <div class="wall__stats">
                                        <span><i class="zmdi zmdi-comments"></i> 115</span>
                                        <span class="active"><i class="zmdi zmdi-favorite"></i> 1265</span>
                                    </div>

                                    <div class="wall__people hidden-xs">
                                        <a href=""><img src="demo/img/profile-pics/2.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/3.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/1.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/6.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/4.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="wall-comments">
                                <div class="wall__comments__lists">
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/2.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Stacey Hunt</a> <small class="m-l-10">30th July 2015</small>
                                            <p>Mauris elit metus, scelerisque sit amet est sit amet, scelerisque aliquam arcu. Nam sollicitudin risus ipsum.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/4.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Frederick Taylor</a> <small class="m-l-10">29th July 2015</small>
                                            <p>Nunc id blandit libero.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/3.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Belkin Raed</a> <small class="m-l-10">27th July 2015</small>
                                            <p>Nam sollicitudin risus ipsum. Ut scelerisque ac odio eu efficitur. Vestibulum a dolor interdum, molestie ipsum sed, feugiat nisi. Nunc ut consequat est, nec pharetra augue</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/6.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>James Simmons</a> <small class="m-l-10">23rd July 2015</small>
                                            <p>Ha ha....</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/3.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Wendy Macshaw</a> <small class="m-l-10">20th July 2015</small>
                                            <p>Praesent sollicitudin venenatis mi, sed consectetur quam accumsan sollicitudin. Aenean ornare tincidunt odio luctus sagittis. Sed vehicula odio eu tortor iaculis, vel lobortis ipsum interdum.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form class="wall__comments__input">
                                    <textarea class="textarea-autosize" placeholder="Write something..."></textarea>
                                </form>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__header">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="avatar-img" src="demo/img/profile-pics/2.jpg" alt="">
                                    </div>

                                    <div class="media-body">
                                        <h2>Shane Wtson <small>Posted on 20th July 2015 at 7:00</small></h2>
                                    </div>
                                </div>
                            </div>

                            <div class="card__body">
                                <p>Donec a ipsum eu tellus auctor sodales. Nulla facilisi. Praesent et ex finibus, tempor arcu interdum, facilisis mi. Nunc blandit hendrerit nulla, sed rutrum risus. Nulla eu mollis massa, et laoreet nulla. Ut ut dolor et arcu eleifend elementum ut eget tellus. Vestibulum eu hendrerit mauris. Suspendisse id tortor vel nisl tincidunt interdum.</p>

                                <div class="wall__img lightbox">
                                    <div class="wall__img__item" data-src="demo/img/gallery/6.jpg" style="background-image: url('demo/img/gallery/6.jpg');">
                                        <img src="demo/img/gallery/thumbs/6.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/7.jpg" style="background-image: url('demo/img/gallery/7.jpg');">
                                        <img src="demo/img/gallery/thumbs/7.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/8.jpg" style="background-image: url('demo/img/gallery/8.jpg');">
                                        <img src="demo/img/gallery/thumbs/8.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/9.jpg" style="background-image: url('demo/img/gallery/9.jpg');">
                                        <img src="demo/img/gallery/thumbs/9.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/10.jpg" style="background-image: url('demo/img/gallery/10.jpg');">
                                        <img src="demo/img/gallery/thumbs/10.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/11.jpg" style="background-image: url('demo/img/gallery/11.jpg');">
                                        <img src="demo/img/gallery/thumbs/11.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/12.jpg" style="background-image: url('demo/img/gallery/12.jpg');">
                                        <img src="demo/img/gallery/thumbs/12.jpg" alt="">
                                    </div>
                                    <div class="wall__img__item" data-src="demo/img/gallery/13.jpg" style="background-image: url('demo/img/gallery/13.jpg');">
                                        <img src="demo/img/gallery/thumbs/13.jpg" alt="">
                                    </div>

                                </div>

                                <div class="wall__attrs">
                                    <div class="wall__stats">
                                        <span><i class="zmdi zmdi-comments"></i> 100</span>
                                        <span class="active"><i class="zmdi zmdi-favorite"></i> 2432</span>
                                    </div>

                                    <div class="wall__people hidden-xs">
                                        <a href=""><img src="demo/img/profile-pics/1.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/7.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/9.jpg" alt=""></a>
                                        <a href=""><img src="demo/img/profile-pics/8.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>

                            <div class="wall-comments">
                                <div class="wall__comments__lists">
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/9.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Finn Walking</a> <small class="m-l-10">3rd July 2015</small>
                                            <p>Per conubia nostra.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/8.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Benn Holder</a> <small class="m-l-10">3rd July 2015</small>
                                            <p>Class aptent taciti sociosqu ad litora torquent per conubia nostra...</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="media">
                                        <a href="" class="pull-left">
                                            <img src="demo/img/profile-pics/3.jpg" alt="" class="avatar-img">
                                        </a>

                                        <div class="media-body">
                                            <a>Seam Ford</a> <small class="m-l-10">3rd July 2015</small>
                                            <p>Praesent bibendum vulputate nulla vitae euismod. Fusce a metus eu ante sagittis viverra sit amet sed odio.</p>

                                            <div class="actions">
                                                <div class="dropdown">
                                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>

                                                    <ul class="dropdown-menu pull-right">
                                                        <li><a href="">Report</a></li>
                                                        <li><a href="">Delete</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form class="wall__comments__input">
                                    <textarea class="textarea-autosize" placeholder="Write something..."></textarea>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 hidden-sm hidden-xs">
                        <div class="card">
                            <div class="card__header">
                                <h2>About me</h2>
                            </div>

                            <div class="card__body">
                                Maecenas malesuada. Nam adipiscing. Etiam vitae tortor. Maecenas ullamcorper, dui et placerat feugiat, eros pede varius nisi, condimentum viverra felis nunc et lorem. <a data-ui-sref="pages.profile.profile-about"><small>Read more...</small></a>
                            </div>
                        </div>

                        <div class="card widget-pictures">
                            <div class="card__header">
                                <h2>Augue laoreet rutrum <small>Cras congue nec lorem eget posuere</small></h2>

                                <div class="actions">
                                <div class="dropdown">
                                    <a href="" data-toggle="dropdown"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="">Refresh</a></li>
                                        <li><a href="">Manage</a></li>
                                        <li><a href="">Settings</a></li>
                                    </ul>
                                </div>
                            </div>
                            </div>

                            <div class="widget-pictures__body">
                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/1.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/2.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/3.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/4.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/5.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/6.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/7.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/8.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/9.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/1.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/2.png" alt="">
                                </a>

                                <a href="" class="col-xs-3">
                                    <img src="demo/img/headers/square/3.png" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card__header">
                                <h2>Recent Comments <small>Commodo vel pharetra nisi. Donec velit libero</small></h2>
                            </div>

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

                            <a href="" class="view-more">
                                <i class="zmdi zmdi-long-arrow-right"></i> View all
                            </a>
                        </div>

                        <div class="card widget-contacts">
                            <div class="card__header card__header--highlight">
                                <h2>Contact Information <small>Fusce eget dolor id justo luctus commodo</small></h2>
                            </div>
                            <div class="card__body">
                                <ul class="icon-list">
                                    <li><i class="zmdi zmdi-phone"></i> 00971123456789</li>
                                    <li><i class="zmdi zmdi-email"></i> malinda.h@gmail.com</li>
                                    <li><i class="zmdi zmdi-facebook-box"></i> malinda.hollaway</li>
                                    <li><i class="zmdi zmdi-twitter"></i> @malinda (twitter.com/malinda)</li>
                                    <li>
                                        <i class="zmdi zmdi-pin"></i>
                                        <address>
                                            44-46 Morningside Road <br>
                                            Edinburgh <br>
                                            Scotland
                                        </address>
                                    </li>
                                </ul>
                            </div>

                            <a class="widget-contacts__map" href="">
                                <img src="demo/img/map.png" alt="">
                            </a>
                        </div>
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

        <!-- Light Gallery -->
        <script src="http://bootstrapsale.com/projects/maed/v1/vendors/bower_components/lightgallery/lib/lightgallery-all.min.js"></script>

        <!-- Auto Size Textarea -->
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>

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