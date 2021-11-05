<?php 

class requestView extends Dbh {

    public function getRequest() {
        $sql = 'SELECT * FROM requests';
        $stmt = $this->connect()->query($sql);
   
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo '<table style="margin-top:40px;">';
                    if($_SESSION['privilege'] == "user"){echo '<tr class="w3-red">';}
                    if($_SESSION['privilege'] == "admin"){echo '<tr class="w3-blue">';}
                    if($_SESSION['privilege'] == "superuser"){echo '<tr class="w3-green">';}
                    echo '<td>'.date('F j, Y' ,strtotime($row['Timestamp'])).'</td></tr><tr><td>Address: '.$row["Address"].' '.$row["City"].', '.$row["Zip"].'</td></tr><tr><td>Request Type: '.$row["RequestType"].'</td></tr><tr><td>Job Start: '.$row["JobStart"].'</td></tr><tr><td>Status: '.$row["Result"].'</td></tr></table>';

                    echo '<tr><td>';
                if(in_array($_SESSION['privilege'],array('superuser','user'))) {
                    echo '<div class="orange">
                        <a href="plumber.php?customerfirstname='.$row['CustomerFirstName'].'&customerlastname='.$row['CustomerLastName'].'&customeraddress='.$row['Address'].'&customerphone='.$row['PhoneNumber'].'&timestamp='.$row['Timestamp'].'&requesttype='.$row['RequestType'].'&city='.$row['City'].'&zip='.$row['Zip'].'&info='.$row['Info'].'" class="list-button"><i class="fas fa-edit"></i></a>
                        </div>';
                }
                
                    echo '<div class="green">
                        <a href="form.php?customername='.$row['CustomerName'].'&customeraddress='.$row['Address'].'&customercity='.$row['City'].'&customerzip='.$row['Zip'].'&customerphone='.$row['PhoneNumber'].'&timestamp='.$row['Timestamp'].'&plumber='.$row['ServiceBy'].'&request='.$row['RequestType'].'&result='.$row['Result'].'&requester='.$row['RequestBy'].'&complete='.$row['CompletionDate'].'&pipe='.$row['Pipe'].'" class="list-button"><i class="fas fa-print"></i></a>
                        </div>';

                    echo '<div class="red">
                        <a href="customerinfo.php?customername='.$row['CustomerName'].'&customeraddress='.$row['Address'].'&timestamp='.$row['Timestamp'].'" class="list-button-two"><i class="fas fa-eye"></i></a>
                        </div>';

                    echo '</td></tr></table>';
            }

    }
    public function plumberView() {
        $sql = 'SELECT * FROM requests WHERE ';
        $stmt = $this->connect()->query($sql);
   
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
               echo '<tr><td>';
                if(in_array($_SESSION['privilege'],array('superuser','user'))) {
                    echo '<div class="orange">
                        <a href="plumber.php?customerfirstname='.$row['CustomerFirstName'].'&customerlastname='.$row['CustomerLastName'].'&customeraddress='.$row['Address'].'&customerphone='.$row['PhoneNumber'].'&timestamp='.$row['Timestamp'].'&requesttype='.$row['RequestType'].'&city='.$row['City'].'&zip='.$row['Zip'].'&info='.$row['Info'].'" class="list-button"><i class="fas fa-edit"></i></a>
                        </div>';
                }
                
                    echo '<div class="green">
                        <a href="form.php?customername='.$row['CustomerName'].'&customeraddress='.$row['Address'].'&customercity='.$row['City'].'&customerzip='.$row['Zip'].'&customerphone='.$row['PhoneNumber'].'&timestamp='.$row['Timestamp'].'&plumber='.$row['ServiceBy'].'&request='.$row['RequestType'].'&result='.$row['Result'].'&requester='.$row['RequestBy'].'&complete='.$row['CompletionDate'].'&pipe='.$row['Pipe'].'" class="list-button"><i class="fas fa-print"></i></a>
                        </div>';

                    echo '<div class="red">
                        <a href="customerinfo.php?customername='.$row['CustomerName'].'&customeraddress='.$row['Address'].'&timestamp='.$row['Timestamp'].'" class="list-button-two"><i class="fas fa-eye"></i></a>
                        </div>';

                    echo '<td>'.$row["Timestamp"].'</td><td>'.$row["Address"].'</td><td>'.$row["City"].'</td><td>'.$row["Zip"].'</td><td>'.$row["RequestType"].'</td><td>'.$row["JobStart"].'</td><td>'.$row["Result"].'</td></tr>';
            }

    }
}