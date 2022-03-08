<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("location: ../");
    }
    $data = $_SESSION['data'];

    if($_SESSION['status']==1){
        $status = '<b style="color: green">Voted</b>';
    }
    else{
        $status = '<b style="color: red">Not Voted</b>';
    }
?>


<html>
    <head>
        <title>Online voting system - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
        <style>
        .container {
            display: flex;
            flex-direction: column;
            background: transparent;
            box-shadow: 0 0 15px rgb(255, 255, 255);
            border-radius: 15px;
            width: 500px;
            margin: 10vh auto;
        }
        .container1 {
            display: flex;
            flex-direction: column;
            background: transparent;
            box-shadow: 0 0 15px rgb(255, 255, 255);
            border-radius: 15px;
            width: 500px;
           
        }
        .background {
            background: url(https://image.chitra.live/api/v1/wps/d72d958/f21dbbd2-75a5-4c92-ab3e-cf4aea1558ad/2/Online-voting-580x358.jpg) rgba(0, 0, 0, 0.61);
            background-repeat: no-repeat;
            background-size:cover;
            background-blend-mode: darken;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            z-index: -1;
            filter: blur(3px);
            min-height: 800px;
            opacity: 100%;
        }
        #back-button {
            float: left;
            margin-left: 20px;
            margin-top: 20px;
            padding: 5px;
            font-size: 15px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
        }

        #logout-button {
            float: right;
            margin-right: 20px;
            margin-top: 20px;
            padding: 5px;
            font-size: 15px;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            }
    </style>
</head>
<body>
    <div>
    <div id="headerSection">
            <a href="../routes/login.php"><button id="back-button"> Back</button></a>
            <a href="logout.php"><button id="logout-button">Logout</button></a>
            <center><h1 style="color:white; font-family:arial;">Online Voting System</h1>  </center>
            </div>
	</div>
       
    <div class="background"></div>
    <div class="container" style="margin-left: 5%; margin-top: 5%;  float: left;">
    
        <h2 style="color:yellow; "><center>Your Vote Counts!</h2></center>
            <center><img src="../uploads/<?php echo $data['photo']?>" height="100" width="100"></center><br>
            <b style="margin-left: 4%; color:white; font-size:18px; ">Name : &nbsp<?php echo $data['name'] ?></b>
            <b style="margin-left: 4%; margin-top:3%; color:white; font-size:18px;">Voterid : &nbsp <?php echo $data['voterid'] ?></b>
            <b style="margin-left: 4%; margin-top:3%; color:white; font-size:18px;">Address :&nbsp <?php echo $data['address'] ?></b>
            <b style="margin-left: 4%;margin-top:3%; color:white; margin-bottom: 3%; font-size:18px;">Status : &nbsp<?php echo $status ?></b>
        </div>

        <div class="container1" style="margin-left: 45%; margin-top: 5%; padding-right: 15%;">
            <h2><center style="color:yellow">Your Vote Your Voice!</h2></center>
        <?php
            if(isset($_SESSION['groups'])){
            $groups = $_SESSION['groups'];
            for($i=0; $i<count($groups); $i++){
        ?>
           <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
                        <img style="float: right; margin-right: -35%; " src="../uploads/<?php echo $groups[$i]['photo']?>" height="80" width="80">
                        <b style="margin-left: 4%; color:white; font-size:20px" >Group Name :<?php echo $groups[$i]['name']?> </b> <br><br>
                        <b style="margin-left: 4%; color:white; font-size:20px">Votes : <?php echo $groups[$i]['votes']?> </b> <br><br>
                        <form method="POST" action="../api/vote.php">
                        <input type="hidden" name="gvotes" value="<?php echo $groups[$i]['votes'] ?>">
                        <input type="hidden" name = "gid" value="<?php echo $groups[$i]['id'] ?>">
            <?php

            if($_SESSION['status']==1){
                ?>
                <button disabled style="margin-left:4%; padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>
                <?php
            }
            else{
                ?>
                <button style=" margin-left:4%; padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;" type="submit">Vote</button>
                <?php
            }
            ?>
            </form>
            </div>
        <?php
    }
}
else{
    ?>
        <div style="border-bottom: 1px solid #bdc3c7; margin-bottom: 10px">
            <b>No groups available right now.</b>    
        </div>
    <?php
}  
?>
</div>
</div> 
</body>
</html>

