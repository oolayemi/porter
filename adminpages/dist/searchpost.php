    <?php 
    require_once("connection.php");
    ?>

<?php include("header.php");  ?>
            <div id="layoutSidenav_content">

                <main>
                    <?php 
                    if (isset($_POST['Search'])) {
                      $query = "SELECT * from posts WHERE post_by = '".$_POST['searchinput']."'";
                      $result = mysqli_query($connection, $query);
                     ?>
                      <div class="container">
                            <div class="row">
                              <!-- Post Content Column -->
                              <div class="col-lg-8">
                                <?php 
                                      while ($results = mysqli_fetch_assoc($result)) {
                                    ?>
                                <!-- Title -->
                                <h1 class="mt-4"><?php echo $results["post_title"]; ?></h1>
                                <!-- Author -->
                                <p class="lead">
                                  by
                                  <a href="#"><?php echo $results["post_by"]; ?></a>
                                </p>
                                <hr>                                <!-- Date/Time -->
                                <p>Posted on <?php echo $results["post_time"]; ?></p>
                                <hr>
                                <!-- Preview Image -->
                                <img class="img-fluid rounded align='center'" src="<?php echo $results["picture_link"]; ?>" style="width:600px; height:auto;">
                                <!-- <img class="img-fluid rounded" src="http://placehold.it/900x300" alt=""> -->
                                <hr>
                                <!-- Post Content -->
                                <p class="lead"><?php echo $results["post_content"]; ?>  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus. </p>

                                <hr>
                                <?php 
                              }
                                    }
                                ?>

                                <?php mysqli_free_result($result); ?>

                             </div>

                              <!-- Sidebar Widgets Column -->
                              <div class="col-md-4">

                                <!-- Search Widget -->
                                <div class="card my-4">
                                  
                                  <h5 class="card-header">Search</h5>
                                  <div class="card-body">
                                  <form action="index.php" method="post">
                                    <div class="input-group">
                                      <input type="text" class="form-control" name="searchinput" placeholder="Search for...">
                                      <span class="input-group-btn">
                                        <button class="btn btn-secondary" name="Search" type="button">Go!</button>
                                      </span>
                                    </div>
                                    </form>
                                    
                                  </div>
                                
                                </div>

                                <!-- Categories Widget -->
                                <div class="card my-4">
                                  <h5 class="card-header">Categories</h5>
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-lg-6">
                                        <ul class="list-unstyled mb-0">
                                          <li>
                                            <a href="#">Web Design</a>
                                          </li>
                                          <li>
                                            <a href="#">HTML</a>
                                          </li>
                                          <li>
                                            <a href="#">Freebies</a>
                                          </li>
                                        </ul>
                                      </div>
                                      <div class="col-lg-6">
                                        <ul class="list-unstyled mb-0">
                                          <li>
                                            <a href="#">JavaScript</a>
                                          </li>
                                          <li>
                                            <a href="#">CSS</a>
                                          </li>
                                          <li>
                                            <a href="#">Tutorials</a>
                                          </li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <!-- Side Widget -->
                                <div class="card my-4">
                                  <h5 class="card-header">Side Widget</h5>
                                  <div class="card-body">
                                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                                  </div>
                                </div>

                              </div>

                            </div>
                            <!-- /.row -->

                          </div>
                   
                </main>


                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2019</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
  }
