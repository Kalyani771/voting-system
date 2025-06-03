<?php
  include 'verify.php';
  
  $sql = "SELECT CName, Ccount FROM votingcount";
$result = $conn->query($sql);

?>


  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Candidate Vote Count</title>
    <link rel="stylesheet" href="result.css">
</head>
<body>
    <h2 style="text-align:center;">Candidate Vote Count</h2>

    <table border="1" align="center" cellpadding="10">
        <tr>
            <th>Candidate Name</th>
            <th>Vote Count</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row["CName"]) . "</td>";
                echo "<td>" . htmlspecialchars($row["Ccount"]) . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2' style='text-align:center;'>No candidates found</td></tr>";
        }
        
        ?>

    </table>

</body>
</html>

<?php
$conn->close(); 
?>

