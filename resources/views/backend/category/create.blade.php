@include('backend.partials.header')

<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">
      <!-- start of Sidebar -->
    @include('backend.left-sidebar')
    <!-- End of Sidebar -->
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
      <!-- Main Content -->
      <div id="content">
        <!-- Topbar -->
        @include('backend.partials.nav')
        <!-- End of Topbar -->
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <div class="card o-hidden border-0 shadow-lg my-5">
                  <!-- Nested Row within Card Body -->
                  <div class="row">

                    <div class="col-lg-7">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">Create Catergory</h1>
                        </div>
                        <form method="POST" action={{ route('categoryStore') }} class="user">
                            @csrf
                          <div class="form-group">
                            <input type="text" name="cat_name" class="form-control form-control-user"  placeholder="Create News Category">
                          </div>

                          <div class="form-group">
                            <textarea name="cat_desc" class="form-control form-control-user"  rows="1"></textarea>
                          </div>

                          <input type="submit" class="btn btn-primary btn-user btn-block">


                        </form>
                        <hr>

                      </div>
                    </div>
                </div>
              </div>

            </div>
            </div>
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->
  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
    @include('backend.partials.modal-logout')
    @include('backend.partials.scripts')

</body>
</html>
