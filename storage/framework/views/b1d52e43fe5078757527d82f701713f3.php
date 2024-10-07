

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>School of Professional Engineering</title>

    <!-- Bootstrap -->
    <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->

    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-paw"></i> <span>Add Corousel</span></a>
            </div>

            <div class="clearfix"></div>

<!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/profile.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <?php echo e(Auth::user()->name); ?>

              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo e(route('dashboard')); ?>"><i class="fa fa-home"></i> Home <span class=""></span></a>

                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>
                <nav class="nav navbar-nav">
                <ul class=" navbar-right">
                  <li class="nav-item dropdown open" style="padding-left: 15px;">
                    <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                      <img src="images/profile.png" alt=""> <?php echo e(Auth::user()->name); ?>

                    </a>
                    <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item"  href="javascript:;"> Profile</a>
                        <a class="dropdown-item"  href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                    <a class="dropdown-item"  href="javascript:;">Help</a>
                      <a class="dropdown-item"  href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                    </div>
                  </li>
                  </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>



<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right">
                  <div class="input-group">
    <span class="input-group-btn">
    <button type="button" class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-lg">Add Corousel</button>

    <!-- Modal  for adding new cosousel start-->


<!-- Modal for adding new corousel end -->




                <!-- css start -->
                      <style>

                        .modal fade{
                          background: black;
                        }
                       .btn
                       {
                        /* background-color: #29374b; */
                        color: white;
                       }
                        .title_right :hover{
                            color: white;

                        }

                        button :hover
                       {
                        background-color: green;
                        color: white;
                       }
                       label{
                        color: black;
                        padding: 20px;

                        text-align: center;
                       }
                       h11
                       {
                        color:black;
                       }
                    </style>
                      <!-- css end -->
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="toastrMsg">
  <?php if(session()->has('message')): ?>
     <div id="successMessage" class="alert alert-success">
     <button type="button" class="close" data-dismiss="alert"></button>

         <?php echo e(session('message')); ?>

     </div>
  <?php endif; ?>
</div>
            <div class="clearfix"></div>

            <div class="row" style="display: block;">
    <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> View Corousel <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class=""></i></a>

                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">


                    <p><code></code> </p>


                    <div class="table-responsive">
                    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                        <tr>
                          <th></th>
                          <th>No</th>
                          <th>Date Created</th>
                          <th>Content1</th>
                          <th>Content2</th>
                          <th>Content3</th>
                          <th>Photo</th>
                          <th>Action</th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><?php echo e($datas->id); ?>      </td>
                            <td class=" "><?php echo e($datas->created_date); ?></td>
                            <td class=" "><?php echo e($datas->content1); ?></td>
                            <td class=" "><?php echo e($datas->content2); ?></td>
                            <td class=" "><?php echo e($datas->content3); ?></td>
                            <td class=" "><img src = "<?php echo e(($datas->photo)); ?>" height = 50px width = 50px></td>
                            <td class=" ">


                            <button type="button" class="btn btn-round btn-success">Edit</button>
                            <a href="" class="btn btn-round btn-danger" data-toggle="modal" data-target="#myModal">Delete</a>




                          </td>

                            </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    </div>
<!-- add model start -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Slideshow/Corousel</h4>
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
     </div>
     <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" enctype = "multipart/form-data" method ="post" action = "<?php echo e(route('store.corousel')); ?>">
                                          <?php echo csrf_field(); ?>
                                           <div class="item form-group">
                                           <label class="col-form-label col-md-3 col-sm-3 label-align" for="content2">Content1 <span class="required">*</span>
											</label>
                                           <div class="col-md-6 col-sm-6 ">
											 <input type="text" id="content1" name="content1" required="required" class="form-control">
											</div>

											<div class="col-md-6 col-sm-6 ">
												<input type="hidden" id="id" name = "id"  class="form-control " value="">
											</div>
										     </div>
										    <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="content2">Content2 <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											 <input type="text" id="content2" name="content2" required="required" class="form-control">
											</div>
										    </div>
                                            <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="content2">Content3 <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="content3" name="content3" required="required" class="form-control">
											</div>
										    </div>
										     <div class="item form-group">
											<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Photo</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="photo" class="form-control" type="file" name="photo">
											</div>
										    </div>
										     <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Creation <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input id="created_date"  name = "created_date" class="date-picker form-control" placeholder="dd-mm-yyyy" type="text" required="required" type="text" onfocus="this.type='date'" onmouseover="this.type='date'" onclick="this.type='date'" onblur="this.type='text'" onmouseout="timeFunctionLong(this)">
												<script>
													function timeFunctionLong(input) {
														setTimeout(function() {
															input.type = 'text';
														}, 60000);
													}
												</script>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">

											</div>
										  </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-success">Submit</button>

                     </div>
                      </form>
                     </div>
                   </div>
                    </div>
                    <!-- add model end -->

                    <!-- delete modal start -->
     <form action = ""  enctype = "multipart/form-data" method ="post" >
        <?php echo e(method_field('delete')); ?>

        <?php echo e(csrf_field()); ?>

    <div id="myModal" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header flex-column">
				<div class="icon-box">

				</div>
				<h4 class="modal-title w-100"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<p>Do you really want to delete these records? This process cannot be undone.</p>
			</div>
			<div class="modal-footer justify-content-center">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
				<button type="button" class="btn btn-danger">Delete</button>
			</div>
		</div>
	</div>
</div>
                                                </form>
                    <!-- delete modal end -->

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Developed  by Mangale IT Company Limited<a href="
            #"></a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- <script type = "text/javascript">
      function confirmation(event)
      {
       event.preventDefault();
       var urlToRedirect = event.currentTarget.getAttribute('href');

       console.log(urlToRedirect);

       swal({
           title:"Are you sure to delete this",
           text: "This delete will be parmanent",
           icon: "warning",
           button: true,
           dangerMode: true,



       })

       .then((willCancel)=>{
            if (willCancel)
       {
        window.location.href=urlToRedirect;
       }

       });

      }

    </script> -->




<!-- Modal HTML -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
<?php /**PATH C:\xampp\htdocs\SoPE\resources\views/slideshow.blade.php ENDPATH**/ ?>