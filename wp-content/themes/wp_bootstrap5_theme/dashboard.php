<?php 
/**
 * Template Name: Dashboard
*/
get_header();?>

    <body>
        <!-- Start Header -->
        <header id="main-header">
            <div class="account">
                <figure>
                    <div class="avatar">
                        <img src="Assets/images/avatar/man/23.jpg" alt="" class="w-100 h-100">
                        <div class="effect"></div>
                    </div>
                    <figcaption>
                        <h2 class="text-md">Admin</h2>
                    </figcaption>
                </figure>
            </div>
            <div class="search">
                <span class="icon flaticon-search color-fff"></span>
                <input type="text" placeholder="Search" name="search" id="search">
            </div>
        </header>
        <!-- End Header -->
		
        <!-- Start Main Content -->
        <section class="container-fluid no-padding">
            <div class="row wrapper no-padding">
                <div class="col-xl-1 col-sm-2">
                    <nav class="menu-left">
                        <ul class="list">
                            <li>
                                <a href="#" title="">
                                    <span class="icon flaticon-home"></span>
                                    <span class="text">Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="" class="active">
                                    <span class="icon flaticon-notepad-1"></span>
                                    <span class="text">Tasks</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <span class="icon flaticon-settings-5"></span>
                                    <span class="text">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" title="">
                                    <span class="icon flaticon-power"></span>
                                    <span class="text">Exit</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="col-xl-11 col-sm-10">
                    <div class="main-content">
                        <header class="header-content">
                            <ul class="list list-inline">
                                <li>
                                    <a href="" title="">
                                        <span class="state red"></span>
                                        <span>Task</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="">
                                        <span class="state yellow"></span>
                                        <span>Story</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="" title="">
                                        <span class="state green"></span>
                                        <span>Bug</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="action">
                                <a href="" title="">New Task </a>
                                <button class="btn btn-blue">New Board <span class="flaticon-add"></span></button>
                            </div>
                        </header>
                            <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="col-lg-12">
                    <div class="m-2 card card-outline card-success">
                        <div class="card-header">
                            <div class="card-tools">
                                <a class="btn btn-primary" href=""><i class="fa fa-plus"></i> Add New project</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <table class="table tabe-hover table-condensed" id="list">
                                <colgroup>
                                    <col width="5%">
                                    <col width="15%">
                                    <col width="20%">
                                    <col width="15%">
                                    <col width="15%">
                                    <col width="10%">
                                    <col width="10%">
                                    <col width="10%">
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th>Project</th>
                                        <th>Task</th>
                                        <th>Project Started</th>
                                        <th>Project Due Date</th>
                                        <th>Project Status</th>
                                        <th>Task Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">1</td>
                                        <td>
                                            <p><b>Sample Project</b></p>
                                        </td>
                                        <td>
                                            <p><b>Sample Task 1</b></p>
                                            <p class="truncate">Fusce ullamcorper mattis semper. Nunc vel risus ipsum. Sed maximus dapibus nisl non laoreet. 
                                                Pellentesque quis mauris odio. Donec fermentum facilisis odio, sit amet aliquet purus scelerisque eget.&amp;nbsp;
                                            </p>
                                        </td>
                                        <td><b>Nov 03, 2022</b></td>
                                        <td><b>Jan 20, 2023</b></td>
                                        <td class="text-center">
                                            <span class='badge badge-info'>On-Progress</span>						
                                        </td>
                                        <td>
                                            <span class='badge badge-success'>Done</span>                        
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                Action
                                            </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item new_productivity" data-pid = '1' data-tid = '1'  data-task = 'Sample Task 1'  href="javascript:void(0)">Add Productivity</a>
                                                </div>
                                        </td>
                                    </tr>	
                                    <tr>
                                        <td class="text-center">2</td>
                                        <td>
                                            <p><b>Sample Project</b></p>
                                        </td>
                                        <td>
                                            <p><b>Sample Task 2</b></p>
                                            <p class="truncate">
                                                Sample Task 2							
                                            </p>
                                        </td>
                                        <td><b>Nov 03, 2022</b></td>
                                        <td><b>Jan 20, 2023</b></td>
                                        <td class="text-center">
                                            <span class='badge badge-info'>On-Progress</span>						
                                        </td>
                                        <td>
                                            <span class='badge badge-secondary'>Pending</span>                        
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                Action
                                            </button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item new_productivity" data-pid = '1' data-tid = '2'  data-task = 'Sample Task 2'  href="javascript:void(0)">Add Productivity</a>
                                                </div>
                                        </td>
                                    </tr>	
                                    <tr>
                                        <td class="text-center">3</td>
                                        <td>
                                            <p><b>Sample Project 102</b></p>
                                        </td>
                                        <td>
                                            <p><b>Task Test</b></p>
                                            <p class="truncate">Sample</p>
                                        </td>
                                        <td><b>Dec 02, 2022</b></td>
                                        <td><b>Dec 31, 2022</b></td>
                                        <td class="text-center">
                                            <span class='badge badge-primary'>Started</span>						
                                        </td>
                                        <td>
                                            <span class='badge badge-secondary'>Pending</span>                        
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                Action
                                            </button>
                                                <div class="dropdown-menu" style="">
                                                    <a class="dropdown-item new_productivity" data-pid = '2' data-tid = '3'  data-task = 'Task Test'  href="javascript:void(0)">Add Productivity</a>
                                                </div>
                                        </td>
                                    </tr>	
                                    <tr>
                                        <td class="text-center">4</td>
                                        <td>
                                            <p><b>Sample Project 102</b></p>
                                        </td>
                                        <td>
                                            <p><b>Test 23</b></p>
                                            <p class="truncate">Sample test 23</p>
                                        </td>
                                        <td><b>Dec 02, 2022</b></td>
                                        <td><b>Dec 31, 2022</b></td>
                                        <td class="text-center">
                                            <span class='badge badge-primary'>Started</span>						
                                        </td>
                                        <td>
                                            <span class='badge badge-secondary'>Pending</span>                        
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-default btn-sm btn-flat border-info wave-effect text-info dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                                Action
                                            </button>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item new_productivity" data-pid = '2' data-tid = '4'  data-task = 'Test 23'  href="javascript:void(0)">Add Productivity</a>
                                            </div>
                                        </td>
                                    </tr>	
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!--/. container-fluid -->
        </section>
                        <!-- <div class="dashboard">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6">
                                    <article class="board red">
                                        <header>
                                            <h4>Backlog <span>(7)</span></h4>
                                            <span class="icon flaticon-more-1"></span>
                                        </header>
                                        <div class="board-content">
                                            <ul class="list">
                                                <li class="el">
                                                    <div class="task blue">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="el">
                                                    <div class="task red">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="el">
                                                    <div class="task green">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="el">
                                                    <div class="task yellow">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="el">
                                                    <div class="task yellow">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="el">
                                                    <div class="task yellow">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <article class="board yellow">
                                        <header>
                                            <h4>In progress <span>(2)</span></h4>
                                            <span class="icon flaticon-more-1"></span>
                                        </header>
                                        <div class="board-content">
                                            <ul class="list">
                                                <li>
                                                    <div class="task red">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task green">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <article class="board green">
                                        <header>
                                            <h4>Review <span>(3)</span></h4>
                                            <span class="icon flaticon-more-1"></span>
                                        </header>
                                        <div class="board-content">
                                            <ul class="list">
                                                <li>
                                                    <div class="task red">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task green">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task blue">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-xl-3 col-sm-6">
                                    <article class="board blue">
                                        <header>
                                            <h4>Done <span>(42)</span></h4>
                                            <span class="icon flaticon-more-1"></span>
                                        </header>
                                        <div class="board-content">
                                            <ul class="list">
                                                <li>
                                                    <div class="task red">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="task green">
                                                        <header>
                                                            <h3>Splash screen</h3>
                                                            <span class="icon flaticon-link"></span>
                                                        </header>
                                                        <div class="task-content">
                                                            The book itself is surprisingly thin and it's not really a book
                                                            perse it's a compilation.
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Main Content-->


<?php get_footer();?>