 <div class="col-md-4">

                <!-- Blog Search Well -->
               
                <div class="well">
                    <h4>Blog Search</h4>
                     
                    <form action="search.php" method="POST">
                        <div class="input-group">
                             <input name="search" type="text" class="form-control">
                            <span class="input-group-btn">
                                <button name="submit" type='submit' class="btn btn-default" type="button">
                                    <span class="glyphicon glyphicon-search"></span>
                            </button>
                            </span>
                        </div>
                    <!-- /.input-group -->                   
                    
                    </form>
                   
                </div>


                <!-- Blog Categories Well -->
                <?php 
                    $query="SELECT * FROM categories";
                    $output_data = mysqli_query($connection,$query);
                
                ?>
                <div class="well">
                    <h4>Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">

                            <ul class="list-unstyled">
                            <?php 

                            while($row=mysqli_fetch_assoc($output_data)){
                            $cat_title = $row['cat_title'];

                            echo "<li><a href='#'>$cat_title</a></li>";

                            }
                            ?>
                                
                            </ul>
                           
                        </div>
                        <!-- /.col-lg-12 -->
                       
                    </div>
                    <!-- /.row -->
                </div>

                

                <!-- Side Widget Well -->
                <?php
                include ('includes/sidewidget.php');
                ?>