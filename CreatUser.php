<html>
    <head>
        <title>Create User</title>
        <link rel="stylesheet" href="CSS/table.css">
        <link rel="stylesheet" href="CSS/style.css">
        
        <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }       
    .userform{
        width: 400px;
        padding: 20px;
        text-align: center;
        position: absolute;
        margin-top: 50px;
        top: 50%;
        left: 50%;
        background: rgba(101, 102, 114, 0.8);
        transform: translate(-50%,-50%);
        overflow: hidden;
        border-radius: 20px;
        border: 2px solid yellow;
    }
    form{
        padding:20px;
   
    }
    form input{
        display:block;
        width:100%;
        padding:10px;
        margin-top:20px;
        box-sizing: border-box;
        font-size:16px;
    }
    .txt{
        margin: 20px,0px;
        border-radius: 05px;
    }
    .btn{
        margin-top:50px;
        margin-bottom:15px;
        background: lightblue;
        border-radius:40px;
        border:1px solid black;
        cursor:pointer;
        transition: 0.8s;
    }    
    .btn:hover{
        transform: scale(0.96);
        background:linear-gradient(to bottom right,cyan,yellow);
    }
        </style>
    </head>
    <body >
        <?php include('nav.php'); ?>
        
        <img  src="../TSF Bank/Images/customer.jpg"/>

        <?php include 'config.php'; ?>
           
        <h2 class="head1"> CREATE USER </h2>
        <div class ="userform">
            <form  method ="post">
                <input type ="text" placeholder ="Name" name="name" class ="txt" required>
                <input type ="email" placeholder ="Email" name="email" class="txt" required >
                <input type ="int" placeholder ="Balance" name="balance" class="txt" required>
                <input type ="submit" name="submit" value="Create Account" class="btn">
        </form>
        </div>
        </body>
       
</html>
    <?php
        if(isset($_POST['submit'])){

        $nm= $_POST['name'];
        $em= $_POST['email'];
        $ba= $_POST['balance'];

        $query="INSERT INTO USER VALUES ( null,'$nm','$em','$ba')";
        $data= mysqli_query($conn, $query);

        if($data)
        {
            echo "<script> alert('Acount Created Successfully...!')
            window.location='transfer.php';
            </script>";
        }
        else{
            echo "failed";
        }
        }
    ?>
 
