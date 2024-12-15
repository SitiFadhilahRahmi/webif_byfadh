<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Departemen Informatika Universitas Andalas</title>
	<script src="js\text.js"></script>
    <link rel="stylesheet" href="css\people.css">
	<link rel="stylesheet" href="css\style2.css">
	<link rel="icon" href="pages\images\image.png" sizes="192x192" />
	<script type="text/javascript" src="js\jquery-core.js" id="jquery-core-js"></script>
</head>
<body class="page-template page-template-templates page-template-template-filter-hub page-template-templatestemplate-filter-hub-php page page-id-4041 page-child parent-pageid-162 wp-embed-responsive mega-menu-primary edge page-full-time-faculty has-sidebar no-js">
    <div class="site">
        <div class="header">
            <!-- header -->
            <?php include 'pages\header2.php'; ?>
        </div>
        <main id="main" class="site-content" role="main">
            <div class="page-content">
                <section
                    id=""
                    class="section section--page-content">
                    <div class="container">
                        <div class="grid">
                            <?php include 'pages\people\sidebar.php'; ?>
                            <div class="primary-content">
                                
                                <!-- Begin Page Content -->
                                <?php
                                if (isset($_GET['page'])) {
                                    $page = $_GET['page'];
                                    switch ($page) {
                                        case 'kadep':
                                            include 'pages\people\kadep.php';
                                            break;
                                        case 'tendik':
                                            include 'pages\people\tendik.php';
                                            break;
                                        case 'dosen':
                                            include 'pages\people\dosen.php';
                                            break;
                                        case 'laboratorium':
                                            include 'pages\people\laboratorium.php';
                                            break;
                                        default:
                                            include 'pages\people\kadep.php';
                                            break;
                                    }
                                } else {
                                    include 'pages\people\kadep.php';
                                }
                                ?>
                                <!-- /.container-fluid -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
        <div class="footer">
            <!-- footer -->
            <?php include 'pages\footer.php'; ?>
        </div>
    </div>
    <script type="text/javascript" src="js\philament.js" id="philament-scripts-js"></script>
	<script type="text/javascript" src="js\megamenu.js" id="megamenu-js"></script>
<?php include 'symbol.php'; ?>
</body>
</html>