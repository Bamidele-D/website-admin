<?php include "includes/header.php"; ?>
<?php include "includes/sidebar.php"; ?>

<div class="content-page">
  <div class="content">

    <!-- Start Content-->
    <div class="container-fluid">

      <!-- start page title -->
      <div class="row">
        <div class="col-12">
          <div class="page-title-box">
            <div class="page-title-right">
              <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                <li class="breadcrumb-item active">Datatables</li>
              </ol>
            </div>
            <h4 class="page-title">Datatables</h4>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title">Basic Data Table</h4>
              <p class="text-muted font-13 mb-4">
                DataTables has most features enabled by default, so all you need to do to use it with your own tables is
                to call the construction
                function:
                <code>$().DataTable();</code>.
              </p>

              <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Salary</th>
                    <th>Action</th>
                  </tr>
                </thead>


                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>$320,800</td>
                    <td><a href="" class="btn btn-info btn-sm">Edit</a>&nbsp; <a href="" class="btn btn-danger btn-sm">Delete</a></td>
                  </tr>
                </tbody>
              </table>

            </div> <!-- end card body-->
          </div> <!-- end card -->
        </div><!-- end col-->
      </div>
      <!-- end row-->
    </div> <!-- container -->

  </div> <!-- content -->

  <?php include "includes/footer.php"; ?>