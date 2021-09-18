<html>
    <head>
        <title>Transaction history</title>
        <link rel="stylesheet" href="CSS/table.css">
        <link rel="stylesheet" href="CSS/style.css">
        <style>
            table th{
                background:rgb(12, 10, 10);
            }
            table ,td{
                color:black;
                font-weight:600;
            }
            table tr:nth-child(2n+0){
                background: rgb(106, 195, 224);
            }
            table tr:nth-child(2n+1){
                background: lightblue;
            }
            table, tr, td{
                padding:15px 35px;
            }
            .his{
                padding-bottom:80px;
            }
            img{
                opacity: 0.4;
            }
        </style>
    </head>
    <body>
        <img src="../TSF Bank/Images/transaction.jpg"/>
        <?php include('nav.php'); ?>
       
        <div class="bg3">
        <h2 class="head3">TRANSACTION HISTORY</h2>
        </div>
            <div class="his">
                <table class ="tb2">
                <thead>
                    <tr>
                        <th>Sr.No</th>
                        <th>Sender</th>
                        <th>Receiver</th>
                        <th>Amount</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>

    <?php include 'config.php' ; ?>
 
    <tbody>
    <?php
        $sql = "SELECT * from transaction";
        $result = $conn-> query($sql);
        if( $result-> num_rows > 0){
        while ($row = $result-> fetch_assoc()){
    ?>
           <tr>
                <td><?php echo $row["sr.no"];?></td>
                <td><?php echo $row["sender"];?></td>
                <td><?php echo $row["receiver"];?></td>
                <td><?php echo $row["amount"];?></td>
                <td><?php echo $row["datetime"];?></td>
            </tr>
        <?php    } ?>
    </tbody>
    </table>
    <?php  } ?>
    </div>
        <footer id="footer"> Copyright © 2021, by Vaishnavi Mogal <br>For the project of The Sparks Foundation</footer>
    </body>
</html>