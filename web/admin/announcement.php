<?php include "include/header.php"?>

<div id="wrapper">

<?php include "include/navigation.php"?>






    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">

                        <h1 class="page-header">
      Announcement
      <small>CCP</small>
      </h1>

      <table class="table table-borded tale-hover">
          <thead>
              <tr>
                  <th>Author</th>
                  <th>Date</th>
                  <th>Announcement</th>
              </tr>
          </thead>
          <tbody>
          <tr>
              <td>Malone No Party</td>
              <td>23 october 2018</td>
              <td>Play dota or sleep</td>
          </tr>
      </tbody>
      </table>




      <?php
         if(isset($_POST['create_post'])){
             echo $_POST['title'];
         }
         ?>
      <form action="" method="post" enctype="multipart/form-data">
         <div class ="form-group">
            <label for="title">Anncouncement Title</Label>
            <input type="text" class="form-control" name="title">
         </div>

         <div class="form-group">
            <label for="post_category">Post Category Id</label>
            <input type="text" class="form-control" name="post_category_id">
         </div>

         <div class ="form-group">
            <label for="post_content">Post Content</Label>
            <textarea class="form-control" name="post_content" id="" cols="30" rows="10">
            </textarea>
         </div>
         
         <div class="form-group">
            <input class="btn btn-primary" type="submit" name="create_post" value="Publish Announcement">
         </div>
      </form>
      
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

  
