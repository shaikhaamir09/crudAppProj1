<?php
session_start();
include 'header.php';
?>
<div id="main-content">
    <?php if(isset($_SESSION['msg'])){
        ?>
        <div style="background-color: #82aa82;color: #0e371e;border-radius: 5px;padding: 10px;"><?php echo $_SESSION['msg']; ?></div>
        <?php
        unset($_SESSION['msg']);
    }
    ?>
    <h2>Student Details</h2>
    <?php
      include 'config.php';

      $sql = "SELECT student.*,studentclass.cname as sclass FROM student LEFT JOIN studentclass ON studentclass.cid=student.sclass";
      $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

      if(mysqli_num_rows($result) > 0)  {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
          <?php
            while($row = mysqli_fetch_assoc($result)){
          ?>
            <tr>
                <td><?php echo $row['sid']; ?></td>
                <td><?php echo $row['sname']; ?></td>
                <td><?php echo $row['saddress']; ?></td>
                <td><?php echo $row['sclass']; ?></td>
                <td><?php echo $row['sphone']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['sid']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['sid']; ?>'>Delete</a>
                </td>
            </tr>
          <?php } ?>
        </tbody>
    </table>
  <?php }else{
    echo "<h2>No Record Found</h2>";
  }
  mysqli_close($conn);
  ?>
</div>

</body>
</html>
