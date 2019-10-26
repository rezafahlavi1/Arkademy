<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arkademy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    .tables{
        margin-top: 80px;
    }
    .title{
        margin-top:10px;
    }
    </style>
</head>
<body>
    <!-- Image and text -->
    <div class='container'>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="assets/img/logo arkademy-01.9c1222ba.png" width="100" height="40" class="d-inline-block" alt="">
                ARKADEMY<strong>COFFE SHOP</strong>
            </a>
            <form class="form-inline">
                <button class="btn btn-danger" type="button" data-toggle="modal" data-target="#add">Add</button>
            </form>
        </nav>
    </div>


    <div class="container tables">
        <table class="table rounded">
            <thead class="thead-light">
                <tr>
                <th scope="col">NO</th>
                <th scope="col">CASHIER</th>
                <th scope="col">PRODUCT</th>
                <th scope="col">CATEGORY</th>
                <th scope="col">PRICE</th>
                <th scope="col">ACTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include ('koneksi.php');
                $hasil = mysqli_query($koneksi, "SELECT cashier.name, product.name, category.name, price 
                                                 FROM product, cashier, category 
                                                 WHERE product.id_category=category.id_category 
                                                       AND product.id_cashier=cashier.id_cashier");
                while($baca=mysqli_fetch_array($hasil)){
                    echo'
                    <tr>
                        <th scope="row">1</th>
                        <td>'.$baca[0].'</td>
                        <td>'.$baca[1].'</td>
                        <td>'.$baca[2].'</td>
                        <td>Rp. '.$baca[3].'</td>
                        <td>
                            <a data-toggle="modal" data-target="#edit">EDIT</a> | <a data-toggle="modal" data-target="#edit">DELETE</a>
                        </td>
                    </tr>
                    ';
                };
                ?>
                <tr>
                    <th scope="row">1</th>
                    <td>PEVITA PEARCE</td>
                    <td>LATTE</td>
                    <td>DRINK</td>
                    <td>Rp. 10.000</td>
                    <td>
                        <a data-toggle="modal" data-target="#edit">EDIT</a> | <a data-toggle="modal" data-target="#edit">DELETE</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Raisa Andriana</td>
                    <td>Cake</td>
                    <td>Food</td>
                    <td>Rp. 15.000</td>
                    <td>
                        <a data-toggle="modal" data-target="#edit">EDIT</a> | <a data-toggle="modal" data-target="#edit">DELETE</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Raisa Adriana</td>
                    <td>Fried Rice</td>
                    <td>Food</td>
                    <td>Rp. 30.000</td>
                    <td>
                        <a data-toggle="modal" data-target="#edit">EDIT</a> | <a data-toggle="modal" data-target="#edit">DELETE</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <select class="form-control" name="cashier" id="cashier" placeholder="1">
                        <option value="1">1</option>
                    </select><br>
                    <select class="form-control" name="cashier" id="cashier" placeholder="1">
                        <option value="1">1</option>
                    </select><br>
                    <input class="form-control" type="text" name="product" id="product"><br>
                    <input class="form-control" type="text" name="price" id="price"><br>
                    <button type="button" class="btn btn-primary">ADD</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <select class="form-control" name="cashier" id="cashier">
                        <option value="1">1</option>
                    </select><br>
                    <select class="form-control" name="cashier" id="cashier">
                        <option value="1">1</option>
                    </select><br>
                    <input class="form-control" type="text" name="product" id="product"><br>
                    <input class="form-control" type="text" name="price" id="price"><br>
                    <button type="button" class="btn btn-primary">ADD</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
                    <select class="form-control" name="cashier" id="cashier">
                        <option value="1">1</option>
                    </select><br>
                    <select class="form-control" name="cashier" id="cashier">
                        <option value="1">1</option>
                    </select><br>
                    <input class="form-control" type="text" name="product" id="product"><br>
                    <input class="form-control" type="text" name="price" id="price"><br>
                    <button type="button" class="btn btn-primary">ADD</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->
    
 




    <script src="js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>