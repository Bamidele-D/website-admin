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
                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                <li class="breadcrumb-item active">Basic Elements</li>
              </ol>
            </div>
            <h4 class="page-title">Basic Elements</h4>
          </div>
        </div>
      </div>
      <!-- end page title -->

      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="header-title">Input Types</h4>
              <div class="row">
                <div class="col-lg-6">
                  <form>

                    <div class="mb-3">
                      <label for="simpleinput" class="form-label">Text</label>
                      <input type="text" id="simpleinput" class="form-control">
                    </div>

                    <div class="mb-3">
                      <label for="example-email" class="form-label">Email</label>
                      <input type="email" id="example-email" name="example-email" class="form-control"
                        placeholder="Email">
                    </div>

                    <div class="mb-3">
                      <label for="">File Upload</label>
                      <input type="file" data-plugins="dropify" data-height="300" />
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <div class="card">
                          <div class="card-body">
                            <h4 class="header-title">Snow Editor</h4>

                            <div id="snow-editor" style="height: 300px;">
                              <h3><span class="ql-size-large">Hello World!</span></h3>
                              <p><br></p>
                              <h3>This is an simple editable area.</h3>
                              <p><br></p>
                              <ul>
                                <li>
                                  Select a text to reveal the toolbar.
                                </li>
                                <li>
                                  Edit rich document on-the-fly, so elastic!
                                </li>
                              </ul>
                              <p><br></p>
                              <p>
                                End of simple area
                              </p>

                            </div> <!-- end Snow-editor-->
                          </div> <!-- end card-body-->
                        </div> <!-- end card-->
                      </div><!-- end col -->
                    </div>
                    <!-- end row -->

                    <div class="mb-3">
                      <button class="btn btn-danger btn-block">Add</button>
                    </div>
                  </form>
                </div>
              </div>
            </div> <!-- end card-body -->
          </div> <!-- end card -->
        </div><!-- end col -->
      </div>
      <!-- end row -->


    </div> <!-- container -->
  </div> <!-- content -->

  <?php include "includes/footer.php"; ?>