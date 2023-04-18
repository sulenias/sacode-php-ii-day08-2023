<!DOCTYPE html>
<html>
<head>
    <title>Index</title>

<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="bg-blue-800">

    <!-- .container start -->
    <div class="container mx-auto bg-gray-100 p-4 m-4 shadow rounded">

        <!-- HEADER START -->
        <?php include('partials/header.php'); ?>
        <!-- HEADER END -->


        <!-- main content start -->

        <?php 
            if(isset($_GET['page']) && $_GET['page'] == ''){
                include('pages/index.php');
            } elseif(isset($_GET['page']) && $_GET['page'] == 'tambah-siswa'){
                // echo "Tambah Siswa";
                include('pages/create.php');
            }

            else{
                include('pages/404.php');
            }
         ?>

        <!-- main content end -->


        <!-- FOOTER START -->
        <?php include('partials/footer.php'); ?>
        <!-- FOOTER END -->

    </div>
    <!-- .container end -->

    </body>
</html>