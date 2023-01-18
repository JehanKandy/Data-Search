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
                    <div class="search-form">
                        <input type="text" class="form-input" id="searchValue" placeholder="Search">
                        <p id="inputerror"></p>
                        <input type="submit" value="Search" class="btn btn-primary search-btn" name="searchBtn">
                    </div>
                </form>
            </div>
        
        </div>
    </div>
</div>


<?php include("lib/layouts/footer.php")?>
<script src="js/script.js"></script>
