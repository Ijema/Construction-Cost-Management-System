<?php
include 'db_connect.php';
?>
<div id="content-wrapper">

        <div class="container-fluid">
 <h2>History Log</h2> 
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Logs</th>
                    </tr>
                  </thead>
                  
              <?php

$query = "SELECT * FROM logs";
                    $result = mysqli_query($conn, $query) or die (mysqli_error($conn));
                  
                        while ($row = mysqli_fetch_assoc($result)) {
                                             
                            echo '<tr>';
                             echo '<td>'. $row['action'].'---'.$row['date_time'].'</td>';
                            echo '</tr> ';

                               
                        }
                        
            ?> 
           
                </table>
                <?php

              include('scripts.php');
       
        ?>