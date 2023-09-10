<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>UPWork Test Task</title>
</head>
<?php 
    include_once "helper_functions.php";
    /**
    * If post Method comes
    */
    $selected = '';
    $selected1 = '';
    $option = array('asc'=>'Low to High','desc'=>'High to Low');
    $sort = '';
    if(isset($_REQUEST['sort']) && $_REQUEST['sort'] != ''){
        $sort = $_REQUEST['sort'];
        if($_REQUEST['sort'] == 'asc'){
            $selected = 'selected="selected"';
            $selected1='';
        }else{
            $selected1 = 'selected="selected"';
            $selected='';
        }
        $printTable = display_cars_table($sort);
    }else{
        $printTable = display_cars_table('asc');
    }
    /**
     * End
     */
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <h1>Product List</h1>
                <form action="" method="post">
                    <label for="sort">Sort by Price:</label>
                    <select name="sort" id="sort">
                        <option value="asc" <?php if ($sort === 'asc') echo 'selected'; ?>>Low to High</option>
                        <option value="desc" <?php if ($sort === 'desc') echo 'selected'; ?>>High to Low</option>
                    </select>
                    <input type="submit" value="Sort" class="btn btn-primary">
                </form>
            </div>
            <div class="col-lg-12 col-md-12">
                <table id="product-table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Car Name</th>
                            <th>Price </th>
                            <th id="color-sort">Color <i class="fas fa-sort"></th>
                            <th>Discount</th>
                            <th>Hand</th>
                            <th>Availability</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            echo $printTable;
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
    <script src="./scripts.js"></script>
</body>

</html>