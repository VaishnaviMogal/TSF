<html>

  <head>
    <title>Transfer Money</title>
      <link rel="stylesheet" href="CSS/table.css">
      <link rel="stylesheet" href="CSS/style.css">
    <style>
      #myBtn {
        width: 300px;
        padding: 10px;
        background-color: rgb(241, 229, 48);
        font-size: 24px;
        border-radius: 20px;
        border: 2px solid black;
      }

      .btn {
        text-align: center;
        padding: 15px;
      }

      .butt {
        padding: 6px;
        background-color: rgb(218, 34, 34);
        border-radius: 20px;
        border: 1px solid black;
        width: 150px;
        color: black;
        font-size: 16px;
        font-weight: 600;
        margin-left: auto;
        margin-right: auto;
      }

      .butt:hover {
      background-color: rgb(145, 226, 65);
      color: black;
      border: 2px solid blue;
      }


      .modal {
      display: none;
      position: absolute;
      z-index: 1;
      padding-top: 150px;
      padding-left: 350px;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgb(0, 0, 0);
      background-color: rgba(0, 0, 0, 0.6);
      }

    .modal-content {
      background-color: rgb(145, 147, 250);
      margin: 10px;
      width: 700px;
      border: 1px solid rgb(230, 215, 13);
      padding: 15px;
    }

    form input {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 20px;
      box-sizing: border-box;
      font-size: 16px;
      border-radius: 10px;
    }

    .close {
      color: #aaaaaa;
      float: right;
      font-size: 30px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <img src="../TSF Bank/Images/transfer.jpg" />
  <?php include('nav.php'); ?>

  <div class="btn">
    <button id="myBtn">Transfer Money</button>
  </div>
  <form action="" method="post">
    <div id="myModal" class="modal">

      <div class="modal-content">
        <span class="close">&times;</span>

        <input type="text" placeholder="Sender" name="sender" required>
        <input type="text" placeholder="Receiver" name="receiver" required>
        <input type="number" placeholder="Amount" name="amount" required>
        <input type="submit" name="submit" value="Transfer" class="butt">

      </div>

    </div>

  </form>

  <script>
    var modal = document.getElementById("myModal");

    var btn = document.getElementById("myBtn");

    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
      modal.style.display = "block";
    }

    span.onclick = function () {
      modal.style.display = "none";
    }

    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <?php include 'config.php'; ?>

  <?php
    if(isset($_POST['submit'])){

    $se=$_POST['sender'];
    $re=$_POST['receiver'];
    $am=$_POST['amount'];

    $query="INSERT INTO transaction VALUES (null,'$se','$re','$am',current_timestamp())";
    $data= mysqli_query($conn, $query);

    if($data)
    {
      echo "<script> alert('Transaction Successful...!')
      window.location='transfer.php';
      </script>";
    }
    else{
        echo "failed";
    }
  }
?>
  <div class="bg2">
    <div class="trans">
      <table class="tb1">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Balance</th>
          </tr>
        </thead>
        <tbody>
  <?php
    $sql = "SELECT * from user";
    $result = $conn-> query($sql);
    if( $result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()){
            ?>
          <tr>
            <td>
              <?php echo $row["id"];?>
            </td>
            <td>
              <?php echo $row["name"];?>
            </td>
            <td>
              <?php echo $row["email"];?>
            </td>
            <td>
              <?php echo $row["balance"];?>
            </td>
          </tr>
          <?php
        } ?>
        </tbody>
      </table>
      <?php
    } ?>

    </div>
  </div>
</body>
<footer id="footer"> Copyright © 2021, by Vaishnavi Mogal <br>For the project of The Sparks Foundation</footer>

</html>