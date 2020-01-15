<?php
$servername = "localhost";
$username = "root";
$password = "";
$c=0;

try {
    $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $s="select * from visit";
   $r=$conn->query($s);
   if($r->rowCount() >0)
   {
       while($row=$r->fetch(PDO::FETCH_ASSOC)
       {
           $c=$c+1;
       }
    }
   echo $c;
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>

 <!--  PAPER WRAP -->
 <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">
            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-6" style="display: none ">
                        <div class="chart-wrap" >
                            <div class="chart-dash">
                                
                                <div id="placeholder" style="width:100%;height:200px;"></div>
                            </div>
                        </div>  
                    </div>

                <!-- center page-->
                 <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="profit" id="profitClose">
                            <div class="headline ">
                                <h3>
                                    <span>
                                        <i class="entypo-user"></i> Total Visitors</span>
                                </h3>
                                <div class="titleClose">
                                    
                                </div>
                            </div>

                            <div class="value">
                                <span class="pull-left"><i class="entypo-clock clock-position"></i>
                                </span>
                                <div id="getting-started">
                                    <span>10</span>

                                    
                                </div>


                            </div>

                            <div class="progress-tinny">
                                <div style="width: 50%" class="bar"></div>
                            </div>
                            
                        </div>
                    </div>
                    
                    
                    
                    
                    
                    <div class="col-sm-3">
                        <div class="profit" id="profitClose">
                            <div class="headline ">
                                <h3>
                                    <span>
                                        <i class="entypo-user"></i> Total Employees</span>
                                </h3>
                                <div class="titleClose">
                                    
                                </div>
                            </div>

                            <div class="value">
                                <span class="pull-left"><i class="entypo-clock clock-position"></i>
                                </span>
                                <div id="getting-started">
                                    <span>20</span>

                                    
                                </div>


                            </div>

                            <div class="progress-tinny">
                                <div style="width: 50%" class="bar"></div>
                            </div>
                            
                        </div>
                        
                        </div>
                        
                        <div class="col-sm-3">
                        <div class="profit" id="profitClose">
                            <div class="headline ">
                                <h3>
                                    <span>
                                        <i class="entypo-user"></i> Total Departments</span>
                                </h3>
                                <div class="titleClose">
                                    
                                </div>
                            </div>

                            <div class="value">
                                <span class="pull-left"><i class="entypo-clock clock-position"></i>
                                </span>
                                <div id="getting-started">
                                    <span>30</span>

                                    
                                </div>


                            </div>

                            <div class="progress-tinny">
                                <div style="width: 50%" class="bar"></div>
                            </div>
                            
                        </div>
                    </div>
                        
                        
                        
                        
                    </div>
            </div>

                </div>
                   
                   

            </div>                          
        </div>
    </div>
             
                <!-- /END OF CONTENT -->
                </div>
        </div>
    </div>
    <!--  END OF PAPER WRAP -->