<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:06:42 GMT -->
<head>

    <meta charset="utf-8" />
    <title>Biztrox - @yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.ico">

   @include('admin.includes.css')
</head>

<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

   @include('admin.includes.header')
   <!-- ========== Left Sidebar Start ========== -->
    @include('admin.includes.menu')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            @yield('body')
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <!-- Modal -->
        <div class="modal fade exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Order Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p class="mb-2">Product id: <span class="text-primary">#SK2540</span></p>
                        <p class="mb-4">Billing Name: <span class="text-primary">Neal Matthews</span></p>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap">
                                <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Product Name</th>
                                    <th scope="col">Price</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">
                                        <div>
                                            <img src="{{asset('/')}}admin/assets/images/product/img-7.png" alt="" class="avatar-sm">
                                        </div>
                                    </th>
                                    <td>
                                        <div>
                                            <h5 class="text-truncate font-size-14">Wireless Headphone (Black)</h5>
                                            <p class="text-muted mb-0">$ 225 x 1</p>
                                        </div>
                                    </td>
                                    <td>$ 255</td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <div>
                                            <img src="{{asset('/')}}admin/assets/images/product/img-4.png" alt="" class="avatar-sm">
                                        </div>
                                    </th>
                                    <td>
                                        <div>
                                            <h5 class="text-truncate font-size-14">Phone patterned cases</h5>
                                            <p class="text-muted mb-0">$ 145 x 1</p>
                                        </div>
                                    </td>
                                    <td>$ 145</td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Sub Total:</h6>
                                    </td>
                                    <td>
                                        $ 400
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Shipping:</h6>
                                    </td>
                                    <td>
                                        Free
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <h6 class="m-0 text-right">Total:</h6>
                                    </td>
                                    <td>
                                        $ 400
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end modal -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Skote.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by Themesbrand
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
{{--<div class="right-bar">--}}
{{--    <div data-simplebar class="h-100">--}}
{{--        <div class="rightbar-title px-3 py-4">--}}
{{--            <a href="javascript:void(0);" class="right-bar-toggle float-right">--}}
{{--                <i class="mdi mdi-close noti-icon"></i>--}}
{{--            </a>--}}
{{--            <h5 class="m-0">Settings</h5>--}}
{{--        </div>--}}

{{--        <!-- Settings -->--}}
{{--        <hr class="mt-0" />--}}
{{--        <h6 class="text-center mb-0">Choose Layouts</h6>--}}

{{--        <div class="p-4">--}}
{{--            <div class="mb-2">--}}
{{--                <img src="{{asset('/')}}admin/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">--}}
{{--            </div>--}}
{{--            <div class="custom-control custom-switch mb-3">--}}
{{--                <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch" checked />--}}
{{--                <label class="custom-control-label" for="light-mode-switch">Light Mode</label>--}}
{{--            </div>--}}

{{--            <div class="mb-2">--}}
{{--                <img src="{{asset('/')}}admin/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">--}}
{{--            </div>--}}
{{--            <div class="custom-control custom-switch mb-3">--}}
{{--                <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch" data-bsStyle="assets/css/bootstrap-dark.min.css" data-appStyle="assets/css/app-dark.min.css" />--}}
{{--                <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>--}}
{{--            </div>--}}

{{--            <div class="mb-2">--}}
{{--                <img src="{{asset('/')}}admin/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">--}}
{{--            </div>--}}
{{--            <div class="custom-control custom-switch mb-5">--}}
{{--                <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch" data-appStyle="assets/css/app-rtl.min.css" />--}}
{{--                <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>--}}
{{--            </div>--}}


{{--        </div>--}}

{{--    </div> <!-- end slimscroll-menu-->--}}
{{--</div>--}}
<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
@include('admin.includes.js')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>

<script src="https://cdn.ckeditor.com/4.20.0/standard/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        CKEDITOR.replace( 'long_description' );
        CKEDITOR.replace( 'short_description' );

    })

</script>

<script>
    $(document).on('change','#categoryName',function () {
        var categoryId=$(this).val();

      $.ajax({
          url: "/get-sub-category-by-category-id/"+categoryId,
          method: "GET",
          dataType: "JSON",
          success: function (data) {
                var option='';
                option+= '<option selected disabled>Select a sub Category</option>';
                $.each(data, function (key, value) {
                    option+= '<option value=" '+value.id+' ">'+value.sub_category_name+'</option>';

                });
                $('#subCategoryName').empty().append(option);

          },
      })
    })
</script>
</body>


<!-- Mirrored from themesbrand.com/skote/layouts/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Sep 2020 15:07:20 GMT -->
</html>
