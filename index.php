<?php
include('header.php');
?>
<?php
include('database.php');
?>
<?php
session_start();
if (!isset($_SESSION['users'])) {
  header("location:login.php");
}
?>
<div id="box2">
  <a href="logout.php" class="btn btn-warning"> LOGOUT</a>
</div>
<a href="search.php" class="btn btn-secondary "> Search Student.... </a>

<div class="box1">
  <h2 id="pz">STUDENT LIST</h2>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD STUDENT</button>



  <table class="table table-hover table-border table-striped">
    <thead>
      <tr>
        <th> ID </th>
        <th> Reg No</th>
        <th> First Name</th>
        <th> Last Name</th>
        <th> Age</th>
        <th> Course</th>
        <th> Semester </th>
        <th> Phone No </th>
        <th> Email </th>
        <th>Update</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php

      $query = "SELECT * FROM students";
      $result = $mysqli->query($query);
      if ($result) {
        // Fetch and process the results
        while ($row = $result->fetch_assoc()) {

          echo "<tr>";
          echo "<td>" . $row["id"] . "</td>";
          echo "<td>" . $row["reg_no"] . "</td>";
          echo "<td>" . $row["first_name"] . "</td>";
          echo "<td>" . $row["last_name"] . "</td>";
          echo "<td>" . $row["age"] . "</td>";
          echo "<td>" . $row["course"] . "</td>";
          echo "<td>" . $row["semester"] . "</td>";
          echo "<td>" . $row["phone"] . "</td>";
          echo "<td>" . $row["email"] . "</td>";
          //to edit or delete data in database.
          echo "<td><a href='update.php?id={$row["id"]}' class='btn btn-success'>Update</a></td>";
          echo "<td><a href='delete.php?id={$row["id"]}' class='btn btn-danger'>Delete</a></td>";

          // You can access and display other columns as needed
          echo "</tr>";
        }
      }
      ?>
    </tbody>
  </table>
  <?php
  if (isset($_GET['message'])) {
    echo "<p>" . $_GET['message'] . "</p>";
  }
  ?>

  <?php
  if (isset($_GET['add_msg'])) {
    echo "<h5>" . $_GET['add_msg'] . "</h5>";
  }
  ?>

  <?php
  if (isset($_GET['update_msg'])) {
    echo "<h4>" . $_GET['update_msg'] . "</h4>";
  }
  ?>
  <?php
  if (isset($_GET['delete_msg'])) {
    echo "<h4>" . $_GET['delete_msg'] . "</h4>";
  }
  ?>


  <form action="addstudent.php" method="post">
    <!-- action to where data will be submitted  -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">

        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">ADD STUDENTS</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="reg_no">Reg No</label>
              <input type="int" name="reg_no" class="form-control">
            </div>


            <div class="form-group">
              <label for="first_name">First Name</label>
              <input type="text" name="first_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="last_name">Last Name</label>
              <input type="text" name="last_name" class="form-control">
            </div>
            <div class="form-group">
              <label for="age">Age</label>
              <input type="int" name="age" class="form-control">
            </div>
            <div class="form-group">
              <label for="course">Course</label>
              <input type="text" name="course" class="form-control">
            </div>
            <div class="form-group">
              <label for="semester">Semester</label>
              <select id="semester" name="semester">
                <option value="y1s1">Y1S1</option>
                <option value="y1s2">Y1S2</option>
                <option value="y2s1">Y2S1</option>
                <option value="y2s2">Y2S2</option>
                <option value="y3s1">Y3S1</option>
                <option value="y3s2">Y3S2</option>
                <option value="y4s1">Y4S1</option>
                <option value="y4s2">Y4S2</option>
              </select>

            </div>

            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="int" name="phone" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">email</label>
              <input type="email" name="email" class="form-control">
            </div>




          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <input type="submit" name="add_student" value="ADD" class="btn btn-success">
            <!-- add_student... copy to data.php confirm is clicked -->
          </div>
        </div>
      </div>
    </div>

</div>
</form>


<?php
include('footer.php');
?>