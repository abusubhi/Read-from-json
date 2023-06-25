<!DOCTYPE html>  
 <html>  
      <head>  
           <title>How to Load JSON Data Using GET</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Phones</h3><br />                 
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                             <th>Phones</th>  
                          </tr>  
                           <?php
                           $data = file_get_contents("phones.json");  
                           $data = json_decode($data, true);  
                           foreach($data as $row)  
                           {  
                                echo '<tr><td>'.$row["name"].'</td></tr>';  
                                echo '<tr><td><img height="100%" width="100%" src="'.$row['link']. '" ></td></tr>';
                                echo '<tr><td>'.$row["desc"].'</td></tr>';
                           }  
                            ?>
                           </table>  
                </div>  
           </div>  
           <br />  
      </body>  
 </html>  