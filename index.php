<?php 
include 'connect2.php';
$query = "select * from MyRequest";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Requests Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<style>
.m-0
{
    margin: 0 !important    ;
}
#footer
{
    background: black;
    color: white;
}

</style>


</style>
</head>
<body>

        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
              
                <!-- Links -->
               
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                  </li>
                </ul>
              

              </nav>    
                    <div id="wrapper">
                            <div class="overlay"></div>

        <div class="container-fluid mt-5">
            <div class="row">
                <div class="col-md-2 h-100">
                    <div class="row">
                        <p>Requests</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <?php 
                    $query = "select * from MyRequest";
                    $res= mysqli_query($connect,$query);
                    $i=0;
                    while($row= mysqli_fetch_assoc($res))
                    {$i++;
                        ?>
                        <div class="mt-3">

                                <div class="row">
                                    <h5 class="pl-2">Req No <?php echo $i; ?></h5>
                                </div>
                                <div class="row">
                                    <div class="card w-100">
                                            <div class="card-body">
                                                <div class="row pl-3">
                                                        <p>Name : <?php  echo $row['Name'];?> </p>
            
                                                </div>
                                                <div class="row pl-3">
                                                        <p>Address : <?php echo $row['Address'] ;?></p>
            
                                                </div>
                                                <div class="row">
                                                        <div class="col-md-6">
                                                                <p class="  ">Time : <?php echo $row['Time'] ;?></p>
            
                                                        </div>
                                                        <div class="col-md-6">
                                                                <p class="">Contact : <?php echo $row['Contact']; ?> </p>
            
                                                        </div>
                                                </div>
                                                <div class="row d-flex justify-content-center">
                                                    <form action="confirm.php" method="POST"> 
                                                        <input type="hidden" name="requestid" value='<?php
                                                        $id = $row['ReqId'];
                                                        echo "$id"; ?>'>
                                                        <?php 
                                                        if($row['Status'] =='confirmed')
                                                        {
                                                            ?>
                                                    <button class="btn btn-primary" disabled >Confirm</button>
                                                            <?php 

                                                        }
                                                        else 
                                                        {
                                                            ?>
                                                     <button class="btn btn-primary" >Confirm</button>
                                                           <?php
                                                 }   

                                                        ?>
                    </form>
                                                </div>
                                            </div>
                                    </div>
                                    </div>
            
                                </div>
                                <?php
                    }
                    ?>
                   
                    <!-- <div class="mt-5 mb-5">

                            <div class="row">
                                <h5>Req No 2</h5>
                            </div>
                            <div class="row">
                                <div class="card w-100">
                                        <div class="card-body">
                                            <div class="row pl-3">
                                                    <p>Name : Balvinder </p>
        
                                            </div>
                                            <div class="row pl-3">
                                                    <p>Address : Prabhu Shrine</p>
        
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-6">
                                                            <p class="  ">Time : 9:00 pm </p>
        
                                                    </div>
                                                    <div class="col-md-6">
                                                            <p class="">Contact : 9930104841 </p>
        
                                                    </div>
                                            </div>
                                            <div class="row d-flex justify-content-center">
                                                <button class="btn btn-primary" >Confirm</button>
                                            </div>
                                        </div>
                                </div>
                                </div>
        
                            </div>
                            <div class="mt-5">

                                    <div class="row">
                                        <h5>Req No 3</h5>
                                    </div>
                                    <div class="row">
                                        <div class="card w-100">
                                                <div class="card-body">
                                                    <div class="row pl-3">
                                                            <p>Name : </p>
                
                                                    </div>
                                                    <div class="row pl-3">
                                                            <p>Address : </p>
                
                                                    </div>
                                                    <div class="row">
                                                            <div class="col-md-6">
                                                                    <p class="  ">Time : </p>
                
                                                            </div>
                                                            <div class="col-md-6">
                                                                    <p class="">Contact : </p>
                
                                                            </div>
                                                    </div>
                                                    <div class="row d-flex justify-content-center">
                                                        <button class="btn btn-primary" >Confirm</button>
                                                    </div>
                                                </div>
                                        </div>
                                        </div>
                
                                    </div> -->
                </div>
                <div class="col-md-2 mt-4">
                    <div class="card">
                        <div class="d-flex justify-content-start">
                                <h5 class="card-title pl-4 pr-5 pt-2">Appointed <br>Logs</h5>

                        </div>
                        <hr>
                        <div class="card-body">
                            <?php 
                            $query = "select * from MyRequest where Status='confirmed'";
                            $res= mysqli_query($connect,$query);
                            
                            while($row=mysqli_fetch_assoc($res))
                            {
                                ?>
                        <div class="row pl-2">
                                <p>Request <?php echo $row['ReqId']; ?></p>
                            </div>
                            <?php 
                            }
                            ?>
                           
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        
        <section id="footer" class="mt-5">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-center">
                        <p>Footer</p>
                    </div>
                </div>
            </section>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <!-- Popper.JS -->
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
            <!-- Bootstrap JS -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        
        </body>
</html>