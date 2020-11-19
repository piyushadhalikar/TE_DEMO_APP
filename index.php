<?php require_once('db.php');
    if(isset($_POST['submit'])){
        $ename = $_POST['ename'];
        $contact = $_POST['contact'];
        $department = $_POST['department'];
        
        $sql = "INSERT INTO `emp` (`id`, `ename`, `dept`, `contact`) VALUES (NULL, '$ename', '$department', '$contact');";
        $result = $db->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:". $sql . "<br>". $db->error;
		}
        
    
		$db->close();

    }


?>
<html>
    <head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <style>
            .note
{
    text-align: center;
    height: 80px;
    background: -webkit-linear-gradient(left, #0072ff, #8811c5);
    color: #fff;
    font-weight: bold;
    line-height: 80px;
}
.form-content
{
    padding: 5%;
    border: 1px solid #ced4da;
    margin-bottom: 2%;
}
.form-control{
    border-radius:1.5rem;
}
.btnSubmit
{
    border:none;
    border-radius:1.5rem;
    padding: 1%;
    width: 20%;
    cursor: pointer;
    background: #0062cc;
    color: #fff;
}
        </style>
    </head>
    <body>
    <br>
    <a href="fetch.php" class="btn btn-primary btn-lg " role="button" aria-disabled="true">Fetch</a>    

<div class="container register-form">


            <div class="form">
                <div class="note">
                    <p>This is a simpleRegister Form made using Boostrap.</p>
                </div>
                <form action="" method="POST">
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="ename" type="text" class="form-control" placeholder="Your Name *" value=""/>
                            </div>
                        
                        </div>
                        <div class="col-md-6">
                        <div class="form-group">
                                <input name="contact" type="text" class="form-control" placeholder="Phone Number *" value=""/>
                            </div>
                          
                        </div>
                        <div class="col-md-12">
                        <div class="form-group">
                                <input name="department" type="text" class="form-control" placeholder="Department *" value=""/>
                            </div>
                          
                        </div>
                    </div>
                    <button name="submit" type="submit" class="btnSubmit">Submit</button>
                </div>
                </form>
            </div>
        </div>
        <?php

        ?>
    </body>

</html>