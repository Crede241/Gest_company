<<<<<<< HEAD
=======
<?php
$p = "";
if (isset($_GET['p'])) {
    $p = explode("/", $_GET['p']);
}
$session = userSession();
?>
>>>>>>> 22e3733 (initial commit)
<!doctype html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <base href="/balance/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> <?= $title ?> </title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<<<<<<< HEAD
    <!-- project css file  -->
    <link rel="stylesheet" href="public/assets/css/my-task.style.min.css">
=======
    <link rel="stylesheet" href="public/assets/plugin/datatables/responsive.dataTables.min.css">
    <link rel="stylesheet" href="public/assets/plugin/datatables/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="public/assets/plugin/datatables/dataTables.bootstrap5.min.js">
    <link rel="stylesheet" href="public/assets/plugin/datatables/jquery.dataTables.min.js">

    <!-- project css file  -->
    <link rel="stylesheet" href="public/assets/css/my-task.style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
>>>>>>> 22e3733 (initial commit)
</head>
<body>

<div id="mytask-layout" class="theme-indigo">

    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
<<<<<<< HEAD
            <a href="home.php" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <svg  width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
=======
            <a href="home" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <svg width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
>>>>>>> 22e3733 (initial commit)
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                    </svg>
                </span>
<<<<<<< HEAD
                <span class="logo-text">My-Task</span>
=======
                <span class="logo-text">Balance</span>
>>>>>>> 22e3733 (initial commit)
            </a>
            <!-- Menu: main ul -->

            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
<<<<<<< HEAD
                    <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#dashboard-Components" href="#">
                        <i class="icofont-home fs-5"></i> <span>Dashboard</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse show" id="dashboard-Components">
                        <li><a class="ms-link active" href="home.php"> <span>Hr Dashboard</span></a></li>
                        <li><a class="ms-link" href="project-dashboard.html"> <span>Project Dashboard</span></a></li>
                    </ul>
                </li>
                <li  class="collapsed">
                    <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#project-Components" href="#">
                        <i class="icofont-briefcase"></i><span>Projects</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="project-Components">
                        <li><a class="ms-link" href="projects.html"><span>Projects</span></a></li>
                        <li><a class="ms-link" href="task.html"><span>Tasks</span></a></li>
                        <li><a class="ms-link" href="timesheet.html"><span>Timesheet</span></a></li>
                        <li><a class="ms-link" href="team-leader.html"><span>Leaders</span></a></li>
                    </ul>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#tikit-Components" href="#"><i
                            class="icofont-ticket"></i> <span>Tickets</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="tikit-Components">
                        <li><a class="ms-link" href="tickets.html"> <span>Tickets View</span></a></li>
                        <li><a class="ms-link" href="ticket-detail.html"> <span>Ticket Detail</span></a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#client-Components" href="#"><i
                            class="icofont-user-male"></i> <span>Our Clients</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="client-Components">
                        <li><a class="ms-link" href="ourclients.html"> <span>Clients</span></a></li>
                        <li><a class="ms-link" href="profile.html"> <span>Client Profile</span></a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#emp-Components" href="#"><i
                            class="icofont-users-alt-5"></i> <span>Employees</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="emp-Components">
                        <li><a class="ms-link" href="members.html"> <span>Members</span></a></li>
                        <li><a class="ms-link" href="employee-profile.html"> <span>Members Profile</span></a></li>
                        <li><a class="ms-link" href="holidays.html"> <span>Holidays</span></a></li>
                        <li><a class="ms-link" href="attendance-employees.html"> <span>Attendance Employees</span></a></li>
                        <li><a class="ms-link" href="attendance.html"> <span>Attendance</span></a></li>
                        <li><a class="ms-link" href="leave-request.html"> <span>Leave Request</span></a></li>
                        <li><a class="ms-link" href="department.html"> <span>Department</span></a></li>
                    </ul>
                </li>

                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                            class="icofont-ui-calculator"></i> <span>Accounts</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Componentsone">
                        <li><a class="ms-link" href="invoices.html"><span>Invoices</span> </a></li>
                        <li><a class="ms-link" href="payments.html"><span>Payments</span> </a></li>
                        <li><a class="ms-link" href="expenses.html"><span>Expenses</span> </a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#payroll-Components" href="#"><i
                            class="icofont-users-alt-5"></i> <span>Payroll</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="payroll-Components">
                        <li><a class="ms-link" href="salaryslip.html"><span>Employee Salary</span> </a></li>

                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#app-Components" href="#">
                        <i class="icofont-contrast"></i> <span>App</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="app-Components">
                        <li><a class="ms-link" href="calendar.html"> <span>Calander</span></a></li>
                        <li><a class="ms-link" href="chat.html"><span>Chat App</span></a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#extra-Components" href="#">
                        <i class="icofont-code-alt"></i> <span>Other Pages</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="extra-Components">
                        <li><a class="ms-link" href="charts.html"> <span>Apex Charts</span></a></li>
                        <li><a class="ms-link" href="forms.html"><span>Forms Example</span></a></li>
                        <li><a class="ms-link" href="table.html"> <span>Table Example</span></a></li>
                        <li><a class="ms-link" href="review.html"><span>Reviews Page</span></a></li>
                        <li><a class="ms-link" href="icon.html"><span>Icons</span></a></li>
                        <li><a class="ms-link" href="contact.html"><span>Contact</span></a></li>
                        <li><a class="ms-link" href="widgets.html"><span>Widgets</span></a></li>
                    </ul>
                </li>
                <li><a class="m-link" href="ui-elements/ui-alerts.html"><i class="icofont-paint"></i> <span>UI Components</span></a></li>
            </ul>

            <!-- Theme: Switch Theme -->
=======
                    <a class="m-link <?= $p[0] == "home" ? "active" : "" ?>" href="home">
                        <i class="icofont-home fs-5"></i> <span>Tableau de Bord</span> </a>
                </li>
                <li class="collapsed">
                    <a class="m-link <?= $p[0] == "accounting" ? "active collapsed" : "" ?>" data-bs-toggle="collapse"
                       data-bs-target="#project-Components" href="#" <?= $p[0] == "accounting" ? 'aria-expanded="true"' : "" ?> >
                        <i class="icofont-coins"></i><span>Comptabilité</span> <span
                                class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                    <ul class="sub-menu collapse <?= $p[0] == "accounting" ? "show" : "" ?>" id="project-Components">
                        <?php
                        if ($_SESSION['role'] == 2): ?>
                            <li><a class="ms-link <?= $p[0] == "accounting" && $p[1] == "income" ? "active" : "" ?>" href="accounting/income"><span>Entrées</span></a>
                            </li>
                        <?php
                        endif; ?>
                        <li><a class="ms-link <?= $p[0] == "accounting" && $p[1] == "expense" ? "active" : "" ?>" href="accounting/expense"><span>Dépenses</span></a>
                        </li>
                    </ul>
                </li>
                <li><a class="m-link <?= $p[0] == "department" ? "active" : "department" ?>" href="department"><i class="icofont-company"></i> <span>Departement</span></a>
                </li>
                <?php
                if ($_SESSION['role'] == 1): ?>
                    <li><a class="m-link <?= $p[0] == "users" ? "active" : "" ?>" href="users"><i class="fa fa-users"></i>
                            <span>Utilisateurs</span></a></li>
                    <li><a class="m-link <?= $p[0] == "category" ? "active" : "" ?>" href="category"><i class="fa fa-list-alt"></i>
                            <span>Categories</span></a></li>
                <?php
                endif; ?>
                <li><a class="m-link <?= $p[0] == "company" ? "active" : "" ?>" href="company"><i class="fa fa-building-o"></i>
                        <span>Entreprise</span></a></li>
                <li><a class="m-link <?= $p[0] == "finance" ? "active" : "" ?>" href="finance"><i class="fa fa-line-chart"></i> <span>Historique de dépense</span></a>
                </li>

            </ul>
>>>>>>> 22e3733 (initial commit)
            <ul class="list-unstyled mb-0">
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-switch">
                        <input class="form-check-input" type="checkbox" id="theme-switch">
<<<<<<< HEAD
                        <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                    </div>
                </li>
                <li class="d-flex align-items-center justify-content-center">
                    <div class="form-check form-switch theme-rtl">
                        <input class="form-check-input" type="checkbox" id="theme-rtl">
                        <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                    </div>
                </li>
            </ul>

            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>
=======
                        <label class="form-check-label" for="theme-switch">Mode Sombre!</label>
                    </div>
                </li>

            </ul>


>>>>>>> 22e3733 (initial commit)
        </div>
    </div>

    <!-- main body area -->
    <div class="main px-lg-4 px-md-4">

        <!-- Body: Header -->
        <div class="header">
            <nav class="navbar py-4">
                <div class="container-xxl">

                    <!-- header rightbar icon -->
                    <div class="h-right d-flex align-items-center mr-5 mr-lg-0 order-1">
                        <div class="d-flex">
                            <a class="nav-link text-primary collapsed" href="help.html" title="Get Help">
                                <i class="icofont-info-square fs-5"></i>
                            </a>
                            <div class="avatar-list avatar-list-stacked px-3">
                                <img class="avatar rounded-circle" src="public/assets/images/xs/avatar2.jpg" alt="">
                                <img class="avatar rounded-circle" src="public/assets/images/xs/avatar2.jpg" alt="">
                                <img class="avatar rounded-circle" src="public/assets/images/xs/avatar1.jpg" alt="">
                                <img class="avatar rounded-circle" src="public/assets/images/xs/avatar3.jpg" alt="">
                                <img class="avatar rounded-circle" src="public/assets/images/xs/avatar4.jpg" alt="">
                                <img class="avatar rounded-circle" src="public/assets/images/xs/avatar7.jpg" alt="">
                                <img class="avatar rounded-circle" src="public/assets/images/xs/avatar8.jpg" alt="">
<<<<<<< HEAD
                                <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i class="icofont-ui-add"></i></span>
=======
                                <span class="avatar rounded-circle text-center pointer" data-bs-toggle="modal" data-bs-target="#addUser"><i
                                            class="icofont-ui-add"></i></span>
>>>>>>> 22e3733 (initial commit)
                            </div>
                        </div>
                        <div class="dropdown notifications zindex-popover">
                            <a class="nav-link dropdown-toggle pulse" href="#" role="button" data-bs-toggle="dropdown">
                                <i class="icofont-alarm fs-5"></i>
                                <span class="pulse-ring"></span>
                            </a>
<<<<<<< HEAD
                            <div id="NotificationsDiv" class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
=======
                            <div id="NotificationsDiv"
                                 class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-sm-end p-0 m-0">
>>>>>>> 22e3733 (initial commit)
                                <div class="card border-0 w380">
                                    <div class="card-header border-0 p-3">
                                        <h5 class="mb-0 font-weight-light d-flex justify-content-between">
                                            <span>Notifications</span>
                                            <span class="badge text-white">11</span>
                                        </h5>
                                    </div>
                                    <div class="tab-content card-body">
                                        <div class="tab-pane fade show active">
                                            <ul class="list-unstyled list mb-0">
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="public/assets/images/xs/avatar1.jpg" alt="">
                                                        <div class="flex-fill ms-2">
<<<<<<< HEAD
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Dylan Hunter</span> <small>2MIN</small></p>
=======
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Dylan Hunter</span>
                                                                <small>2MIN</small></p>
>>>>>>> 22e3733 (initial commit)
                                                            <span class="">Added  2021-02-19 my-Task ui/ux Design <span class="badge bg-success">Review</span></span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <div class="avatar rounded-circle no-thumbnail">DF</div>
                                                        <div class="flex-fill ms-2">
<<<<<<< HEAD
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
=======
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span>
                                                                <small>13MIN</small></p>
>>>>>>> 22e3733 (initial commit)
                                                            <span class="">Task added Get Started with Fast Cad project</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="public/assets/images/xs/avatar3.jpg" alt="">
                                                        <div class="flex-fill ms-2">
<<<<<<< HEAD
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
=======
                                                            <p class="d-flex justify-content-between mb-0 "><span
                                                                        class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
>>>>>>> 22e3733 (initial commit)
                                                            <span class="">Quality Assurance Task Completed</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="public/assets/images/xs/avatar5.jpg" alt="">
                                                        <div class="flex-fill ms-2">
<<<<<<< HEAD
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span> <small>13MIN</small></p>
=======
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Diane Fisher</span>
                                                                <small>13MIN</small></p>
>>>>>>> 22e3733 (initial commit)
                                                            <span class="">Add New Project for App Developemnt</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2 mb-1 border-bottom">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="public/assets/images/xs/avatar6.jpg" alt="">
                                                        <div class="flex-fill ms-2">
<<<<<<< HEAD
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
=======
                                                            <p class="d-flex justify-content-between mb-0 "><span
                                                                        class="font-weight-bold">Andrea Gill</span> <small>1HR</small></p>
>>>>>>> 22e3733 (initial commit)
                                                            <span class="">Add Timesheet For Rhinestone project</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li class="py-2">
                                                    <a href="javascript:void(0);" class="d-flex">
                                                        <img class="avatar rounded-circle" src="public/assets/images/xs/avatar7.jpg" alt="">
                                                        <div class="flex-fill ms-2">
<<<<<<< HEAD
                                                            <p class="d-flex justify-content-between mb-0 "><span class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
=======
                                                            <p class="d-flex justify-content-between mb-0 "><span
                                                                        class="font-weight-bold">Zoe Wright</span> <small class="">1DAY</small></p>
>>>>>>> 22e3733 (initial commit)
                                                            <span class="">Add Calander Event</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <a class="card-footer text-center border-top-0" href="#"> View all notifications</a>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown user-profile ml-2 ml-sm-3 d-flex align-items-center zindex-popover">
                            <div class="u-info me-2">
<<<<<<< HEAD
                                <p class="mb-0 text-end line-height-sm "><span class="font-weight-bold">Dylan Hunter</span></p>
                                <small>Admin Profile</small>
=======
                                <p class="mb-0 text-end line-height-sm "><span
                                            class="font-weight-bold"> <?= $session->getFirstName() . "  " . $session->getLastName() ?> </span></p>
                                <small>En ligne</small>
>>>>>>> 22e3733 (initial commit)
                            </div>
                            <a class="nav-link dropdown-toggle pulse p-0" href="#" role="button" data-bs-toggle="dropdown" data-bs-display="static">
                                <img class="avatar lg rounded-circle img-thumbnail" src="public/assets/images/profile_av.png" alt="profile">
                            </a>
                            <div class="dropdown-menu rounded-lg shadow border-0 dropdown-animation dropdown-menu-end p-0 m-0">
                                <div class="card border-0 w280">
                                    <div class="card-body pb-0">
                                        <div class="d-flex py-1">
                                            <img class="avatar rounded-circle" src="public/assets/images/profile_av.png" alt="profile">
                                            <div class="flex-fill ms-3">
<<<<<<< HEAD
                                                <p class="mb-0"><span class="font-weight-bold">Dylan Hunter</span></p>
                                                <small class="">Dylan.hunter@gmail.com</small>
                                            </div>
                                        </div>

                                        <div><hr class="dropdown-divider border-dark"></div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="task.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-tasks fs-5 me-3"></i>My Task</a>
                                        <a href="members.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-ui-user-group fs-6 me-3"></i>members</a>
                                        <a href="ui-elements/auth-signin.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-logout fs-6 me-3"></i>Signout</a>
                                        <div><hr class="dropdown-divider border-dark"></div>
                                        <a href="ui-elements/auth-signup.html" class="list-group-item list-group-item-action border-0 "><i class="icofont-contact-add fs-5 me-3"></i>Add personal account</a>
=======
                                                <p class="mb-0"><span
                                                            class="font-weight-bold"><?= $session->getFirstName() . "  " . $session->getLastName() ?> </span>
                                                </p>
                                                <small class=""><?= $session->getEmail() ?> </small>
                                            </div>
                                        </div>

                                        <div>
                                            <hr class="dropdown-divider border-dark">
                                        </div>
                                    </div>
                                    <div class="list-group m-2 ">
                                        <a href="profile" class="list-group-item list-group-item-action border-0 "><i
                                                    class="icofont-tasks fs-5 me-3"></i>profil</a>
                                        <a href="logout" class="list-group-item list-group-item-action border-0 "><i
                                                    class="icofont-logout fs-6 me-3"></i>Deconnexion</a>
                                        <div>
                                            <hr class="dropdown-divider border-dark">
                                        </div>

>>>>>>> 22e3733 (initial commit)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- menu toggler -->
<<<<<<< HEAD
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse" data-bs-target="#mainHeader">
=======
                    <button class="navbar-toggler p-0 border-0 menu-toggle order-3" type="button" data-bs-toggle="collapse"
                            data-bs-target="#mainHeader">
>>>>>>> 22e3733 (initial commit)
                        <span class="fa fa-bars"></span>
                    </button>

                    <!-- main menu Search-->
                    <div class="order-0 col-lg-4 col-md-4 col-sm-12 col-12 mb-3 mb-md-0 ">
                        <div class="input-group flex-nowrap input-group-lg">
                            <button type="button" class="input-group-text" id="addon-wrapping"><i class="fa fa-search"></i></button>
<<<<<<< HEAD
                            <input type="search" class="form-control" placeholder="Search" aria-label="search" aria-describedby="addon-wrapping">
                            <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal" data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
=======
                            <input type="search" class="form-control" placeholder="Recherche" aria-label="search" aria-describedby="addon-wrapping">
                            <button type="button" class="input-group-text add-member-top" id="addon-wrappingone" data-bs-toggle="modal"
                                    data-bs-target="#addUser"><i class="fa fa-plus"></i></button>
>>>>>>> 22e3733 (initial commit)
                        </div>
                    </div>

                </div>
            </nav>
        </div>