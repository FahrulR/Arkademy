<?php 
  include "api/db_config.php";
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Bootcamp Arkademy</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <script type="text/javascript" src="assets/js/jquery.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.twbsPagination.min.js"></script>
    <script src="assets/js/jquery.twbsPagination.min.js"></script>
    <script type="text/javascript" src="assets/js/toastr.min.js"></script>
        <link href="assets/css/toastr.min.css" rel="stylesheet">
        <script src="assets/js/ajax.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">                   
                <div class="pull-left">
                    <h2>Bootcamp Arkademy</h2>
                </div>
                <div class="pull-right"><br>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
                      Add
                </button>
                </div>
            </div>
        </div>


        <table class="table table-bordered">
            <thead>
                <tr>
                <th>Name</th>
                <th>Hobby</th>
                <th>Category</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>



            <!-- Create Item Modal -->
        <div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <br>
                <h4 class="modal-title" id="myModalLabel">Add Data</h4>
              </div>


              <div class="modal-body">
                    <form data-toggle="validator" action="api/create.php" method="POST">


                        <div class="form-group">
                            <label class="control-label" for="title">Name:</label>
                            <input type="text" name="name" class="form-control" data-error="Please enter Name." required />
                            <div class="help-block with-errors"></div>
                        </div>


                        <div class="form-group">
                            <label class="control-label" for="title">Hobby:</label>
                            <select name="hobby" class="form-control" data-error="Please enter hobby." required>
                                <option selected="selected">--Select Hobby--</option>
                              <?php
                        
                              $sql="select * from hobi";
                        
                              $query=mysqli_query($koneksi,$sql);

                           while($row=mysqli_fetch_object($query))

                         {

                            echo "<option value=$row->id_hobby>$row->name</option>";

                            }

                         ?>
                         </select>
                            <div class="help-block with-errors"></div>
                        </div>


                        <div class="form-group">
                            <label class="control-label" for="title">Category:</label>
                            <select name="category" class="form-control" data-error="Please enter Category." required>
                                <option selected="selected">--Select Category--</option>
                              <?php
                        
                              $sql="select * from kategori";
                        
                              $query=mysqli_query($koneksi,$sql);

                           while($row=mysqli_fetch_object($query))

                         {

                            echo "<option value=$row->id_category>$row->name</option>";

                            }

                         ?>
                         </select>
                            <div class="help-block with-errors"></div>
                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn crud-submit btn-success">Submit</button>
                        </div>


                    </form>


              </div>
            </div>


          </div>
        </div>


        <!-- Edit Item Modal -->
        <div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                <h4 class="modal-title" id="myModalLabel">Edit Data</h4>
              </div>

              <div class="modal-body">
                    <form data-toggle="validator" action="api/update.php" method="put">
                        <input type="hidden" name="id" class="edit-id">
                         <div class="form-group">
                            <label class="control-label" for="title">Name:</label>
                            <input type="text" name="name" value=" " class="form-control" data-error="Please enter Name." required />
                            <div class="help-block with-errors"></div>
                        </div>



                        <div class="form-group">
                            <label class="control-label" for="title">Hobby:</label>
                            <select name="hobby" class="form-control" data-error="Please enter hobby." required>
                                <option selected="selected">--Select Hobby--</option>
                              <?php
                        
                              $sql="select * from hobi";
                        
                              $query=mysqli_query($koneksi,$sql);

                           while($row=mysqli_fetch_object($query))

                         {

                            echo "<option value=$row->id_hobby>$row->name</option>";

                            }

                         ?>
                         </select>
                            <div class="help-block with-errors"></div>
                        </div>


                         <div class="form-group">
                            <label class="control-label" for="title">Category:</label>
                            <select name="category" class="form-control" data-error="Please enter Category." required>
                                <option selected="selected">--Select Category--</option>
                              <?php
                        
                              $sql="select * from kategori";
                        
                              $query=mysqli_query($koneksi,$sql);

                           while($row=mysqli_fetch_object($query))

                         {

                            echo "<option value=$row->id_category>$row->name</option>";

                            }

                         ?>
                         </select>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success crud-submit-edit">Submit</button>
                        </div>


                    </form>


              </div>
            </div>
          </div>
        </div>


    </div>
</body>
</html>