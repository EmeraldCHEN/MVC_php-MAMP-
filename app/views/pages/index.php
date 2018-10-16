<?php include(APPROOT . "/views/includes/header.php"); ?>

<div class="row">
  <!-- Code plain HTML here - use PHP when wanting to display data -->
    <div class="col-sm-12">
    <h2><?php echo $data['title']; ?></h2>
   
        <table class="table">
            <thead class="myheader">
                <tr>
                    <th>Name</th>
                    <th>Company Name</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                
                    $output = "";
                    $today = new DateTime('now');
                    $todayPrint = $today->format('d/m/Y');
                    foreach($data['people'] as $item) {
                        $date = new DateTime($item['DOB']);
                        $datePrint = $date->format('d/m/Y');
                        $diff = date_diff($today, $date);
                        $diff = $diff->format('%y Years');
                        
                        $output .= "<tr><td>";
                        $output .= $item['FNAME'];
                        $output .= " ";
                        $output .= $item['LNAME'];
                        $output .= "</td><td>";
                        $output .= $datePrint;
                        $output .= "</td><td>";
                        $output .= $diff;
                        $output .= "</td></tr>";
                    } 
                    echo $output;
                  // echo "<h4>Why isn't it below thead?</h4>";
                   //  echo "<h4>Where r the data of all people?<h4>";
                ?>
            </tbody>
        </table>
    </div>
</div>


<?php include(APPROOT . "/views/includes/footer.php"); ?>