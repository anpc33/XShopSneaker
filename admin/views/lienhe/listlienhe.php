<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 29 Oct 2024 07:29:52 GMT -->

<head>

 <meta charset="utf-8" />
 <title>Liên hệ</title>
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
 <meta content="Themesbrand" name="author" />

 <!-- CSS -->
 <?php
 require_once "views/layouts/libs_css.php";
 ?>

</head>

<body>

 <!-- Begin page -->
 <div id="layout-wrapper">

  <!-- HEADER -->
  <?php
  require_once "views/layouts/header.php";

  require_once "views/layouts/siderbar.php";
  ?>

  <!-- Left Sidebar End -->
  <!-- Vertical Overlay-->
  <div class="vertical-overlay"></div>

  <!-- ============================================================== -->
  <!-- Start right Content here -->
  <!-- ============================================================== -->
  <div class="main-content">

   <div class="page-content">
    <div class="container-fluid">
     <!-- start page title -->
     <div class="row">
      <div class="col-12">
       <div class="page-title-box d-sm-flex align-items-center justify-content-between bg-galaxy-transparent">
        <h4 class="mb-sm-0">Quản lý liên hệ</h4>

        <div class="page-title-right">
         <ol class="breadcrumb m-0">
          <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
          <li class="breadcrumb-item active">Liên hệ</li>
         </ol>
        </div>

       </div>
      </div>
     </div>
     <!-- end page title -->

     <div class="row">
      <div class="col">

       <div class="h-100">
        <!-- Striped Rows -->
        <div class="card">
         <div class="card-header align-items-center d-flex">
          <h4 class="card-title mb-0 flex-grow-1">Danh sách liên hệ</h4>
          <!-- <a href="?act=form-add-lien-he" class="btn btn-soft-success material-shadow-none">
                                        <i class="ri-add-circle-line align-middle me-1"></i>
                                        Thêm liên hệ
                                    </a> -->
          <div class="flex-shrink-0">

          </div>
         </div><!-- end card header -->

         <div class="card-body">
          <div class="live-preview">
           <div class="table-responsive">
            <table class="table table-striped table-nowrap align-middle mb-0">
             <thead>
              <tr>
               <th scope="col">STT</th>
               <th scope="col">Tên liên hệ </th>
               <th scope="col">Email</th>
               <th scope="col">Số điện thoại</th>
               <th scope="col">Nội dung</th>

               <th scope="col">Ngày tạo</th>
               <th scope="col">Trạng thái</th>

               <th scope="col">Action</th>

              </tr>
             </thead>
             <tbody>
              <?php
              foreach ($danhSachLienHe as $key => $lienhe) { ?>
               <tr>
                <td class="fw-medium"><?= $key + 1 ?></td>
                <td><?= $lienhe['ten'] ?></td>
                <td><?= $lienhe['email'] ?></td>
                <td><?= $lienhe['so_dien_thoai'] ?></td>

                <td title="<?php echo ($noi_dung); ?>">
                 <?php
                 // Giới hạn độ dài của nội dung
                 $maxLength = 10;
                 $noi_dung = $lienhe['noi_dung'];

                 if (mb_strlen($noi_dung) > $maxLength) {
                  echo mb_substr($noi_dung, 0, $maxLength) . '...';
                 } else {
                  echo $noi_dung;
                 }
                 ?>
                </td>

                <td><?= $lienhe['ngay_tao'] ?></td>
                <td><?php
                    if ($lienhe['trang_thai'] == 1) { ?>
                  <span class="badge bg-success">Hiển thị</span>
                 <?php } else { ?>
                  <span class="badge bg-danger">Ẩn</span>

                 <?php }
                 ?>


                </td>
                <td>
                 <div class="hstack gap-3 flex-wrap">
                  <a href="?act=form-update-lien-he&lien_he_id=<?= $lienhe['id'] ?>" class="link-success fs-15"><i class="ri-edit-2-line"></i></a>

                  <form action="?act=xoa-lien-he" method="POST" onsubmit="return confirm('Bạn có đồng ý xóa không?')">
                   <input type="hidden" name="lien_he_id" value="<?= $lienhe['id'] ?>">
                   <button class="link-danger fs-15" style="border: none; background: none;"><i class="ri-delete-bin-line"></i></button>

                  </form>
                 </div>
                </td>
               </tr>
              <?php
              }
              ?>



             </tbody>
            </table>
           </div>
          </div>

         </div><!-- end card-body -->
        </div><!-- end card -->

       </div> <!-- end .h-100-->

      </div> <!-- end col -->
     </div>

    </div>
    <!-- container-fluid -->
   </div>
   <!-- End Page-content -->

   <footer class="footer">
    <div class="container-fluid">
     <div class="row">
      <div class="col-sm-6">
       <script>
        document.write(new Date().getFullYear())
       </script> © Adadis.
      </div>
      <div class="col-sm-6">
       <div class="text-sm-end d-none d-sm-block">
        Giày thể thao chất lượng cao

       </div>
      </div>
     </div>
    </div>
   </footer>
  </div>
  <!-- end main content-->

 </div>
 <!-- END layout-wrapper -->



 <!--start back-to-top-->
 <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
  <i class="ri-arrow-up-line"></i>
 </button>
 <!--end back-to-top-->

 <!--preloader-->
 <div id="preloader">
  <div id="status">
   <div class="spinner-border text-primary avatar-sm" role="status">
    <span class="visually-hidden">Loading...</span>
   </div>
  </div>
 </div>

 <div class="customizer-setting d-none d-md-block">
  <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas" data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
   <i class='mdi mdi-spin mdi-cog-outline fs-22'></i>
  </div>
 </div>

 <!-- JAVASCRIPT -->
 <?php
 require_once "views/layouts/libs_js.php";
 ?>

</body>

</html>
