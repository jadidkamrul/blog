@include('backend.partials.header')

 <body id="page-top">
   <!-- Page Wrapper -->
   <div id="wrapper">
    <!-- start of Sidebar -->
    @include('backend.left-sidebar')
    <!-- end  of Sidebar -->

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
                        <div class="col-lg-12">

                            <div class="row justify-content-md-center">
                                <div class="col col-lg-2"></div>
                                    <div class="col-md-auto">
                                        @if(session()->has('status'))
                                        <div class="alert alert-primary" role="alert">
                                            {{ session()->get('status') }}
                                        @endif

                                        </div>
                                    </div>
                                <div class="col col-lg-2"></div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Image</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Category</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>

                                            @foreach ($contents as $content)
                                          <tr>
                                            <td> {{ $content->contentName }}</td>
                                            <td>{{ $content->contentDesc }}</td>
                                            <td><img src="{{ URL::to('/') }}/public/uploads/{{ $content->content_pic }}"> </td>
                                            <td>{{ $content->category->catName }}</td>
                                            <th>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                <button type="submit" class="btn btn-success">Edit</button>
                                            </th>
                                          </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
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


