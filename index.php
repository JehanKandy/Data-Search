<link rel="stylesheet" href="css/style.css">
<?php include("lib/layouts/header.php"); ?>
<?php include("lib/layouts/nav.php"); ?>

<div class="home-content">
    <div class="container">
        <div class="title">All Data</div>
        <hr>
        <div class="body">
            <a href="add_products.php"><button class="btn btn-success">+ Add New</button></a>

            <div class="left-search">
                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" name="search_form" onsubmit="return validate_search();">
                    <input type="text" name="search_value" id="search" class="form-control" placeholder="Search">
                </form>
            </div>
        
        </div>
    </div>
</div>


<?php include("lib/layouts/footer.php")?>
<script src="js/script.js"></script>
